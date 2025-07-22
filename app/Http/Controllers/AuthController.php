<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class AuthController extends Controller{
    public function login(){
        return view('auth.login');
    }

    public function login_store(Request $request){
        $request->validate([
            'phone' => 'required|string|size:16',
        ]);
        $phone = $request->phone;
        $user = User::where('phone', $phone)->first();
        if (!$user) {
            return back()->with('error', "Avval ro'yxatdan o'ting.");
        }
        if ($user->position === 'currer' || $user->position === 'user') {
            return redirect()->route('success')->with('id', $user->id);
        }
        $throttleKey = 'login:' . $phone;
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            return back()->withErrors([
                'phone' => 'Juda ko‘p urinish. Keyinroq urinib ko‘ring.',
            ]);
        }
        RateLimiter::hit($throttleKey, 60);
        $code = rand(100000, 999999);
        $user->code = Hash::make($code);
        $user->code_expires_at = now()->addMinutes(5);
        $user->save();
        $this->sendMessage($phone, $code);
        return redirect()->route('verify')->with([
            'phone' => $phone,
            'message' => $user->getMaskedPhone(),
        ]);
    }

    public function register(){
        return view('auth.register');
    }

    public function register_store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|size:16',
        ]);
        $existing = User::where('phone', $request->phone)->first();
        if ($existing) {
            return back()->with('error', "Bu raqam bilan ro'yxatdan o'tilgan.");
        }
        $code = rand(100000, 999999);
        $user = User::create([
            'name' => $request->name,
            'position' => 'user',
            'phone' => $request->phone,
            'code' => Hash::make($code),
            'code_expires_at' => now()->addMinutes(5),
            'status' => 'phone',
        ]);
        $this->sendMessage($request->phone, $code);
        return redirect()->route('verify')->with([
            'phone' => $user->phone,
            'message' => $user->getMaskedPhone(),
        ]);
    }

    public function verify(){
        return view('auth.verify');
    }

    public function verify_store(Request $request){
        $request->validate([
            'phone' => 'required|string|size:16',
            'code' => 'required|string',
        ]);
        $user = User::where('phone', $request->phone)->first();
        if (!$user || !$user->code || $user->isCodeExpired()) {
            return redirect()->route('verify')->withErrors([
                'phone' => $request->phone,
                'message' => substr($request->phone, 0, 4) . " ... " . substr($request->phone, -4),
                'error' => 'Tasdiqlash kodi eskirgan yoki mavjud emas. Qayta urinib ko‘ring.'
            ]);
        }
        if (!Hash::check(trim(str_replace(" ","",$request->code)), $user->code)) {
            return redirect()->route('verify')->withErrors([
                'phone' => $request->phone,
                'message' => substr($request->phone, 0, 4) . " ... " . substr($request->phone, -4),
                'error' => 'Tasdiqlash kodi noto‘g‘ri.'
            ]);
        }
        $user->code = null;
        $user->code_expires_at = null;
        if ($user->isPhoneVerification()) {
            $user->status = 'active';
            $user->save();
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('success');
        }
        if ($user->isPending()) {
            return redirect()->route('success');
        }
        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    public function success(){
        return view('auth.success');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    protected function sendMessage($phone, $code){
        // Laravel log ga yozish
        logger("Sending SMS to $phone: $code");

        // Real SMS xizmatga integratsiya qilish uchun bu yerga kod yoziladi.
        // Misol: Http::post('https://sms.api.uz/send', [...]);
    }
}
