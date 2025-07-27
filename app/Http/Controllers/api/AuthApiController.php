<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthApiController extends Controller{

    public function login(Request $request){
        $request->validate([
            'phone' => 'required|string|size:16',
        ]);
        $phone = $request->phone;
        $user = User::where('phone', $phone)->first();
        if (!$user) {
            $user = User::create([
                'company_id' => 1,
                'name' => 'name',
                'position' => 'user',
                'phone' => $phone,
                'status' => 'pending',
            ]);
        }
        $throttleKey = 'login:' . $phone;
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            return response()->json(['error' => 'Juda ko‘p urinish. Keyinroq urinib ko‘ring.'], 429);
        }
        RateLimiter::hit($throttleKey, 60);
        $code = rand(100000, 999999);
        $user->code = Hash::make($code);
        $user->code_expires_at = now()->addMinutes(5);
        $user->save();
        $this->sendMessage($phone, $code);
        return response()->json([
            'phone' => $phone,
            'message' => ($user->getMaskedPhone() ?? $phone) . ' raqamga tasdiqlash kodi yuborildi.'.$code,
        ]);
    }


    public function verify(Request $request){
        $request->validate([
            'phone' => 'required|string|size:16',
            'code' => 'required|string',
        ]);
        $user = User::where('phone', $request->phone)->first();
        if (!$user || !$user->code || $user->isCodeExpired()) {
            return response()->json([
                'phone' => $request->phone,
                'error' => 'Tasdiqlash kodi eskirgan yoki noto‘g‘ri.'
            ], 400);
        }
        if (!Hash::check(trim(str_replace(" ","",$request->code)), $user->code)) {
            return response()->json([
                'phone' => $request->phone,
                'error' => 'Tasdiqlash kodi noto‘g‘ri.'
            ], 400);
        }
        $user->code = null;
        $user->code_expires_at = null;
        if ($user->isPhoneVerification()) {
            $user->status = 'active';
        } elseif (!$user->isActive()) {
            $user->status = 'active';
        }
        $user->save();
        $token = $user->createToken('api_token')->plainTextToken;
        return response()->json([
            'message' => 'Muvaffaqiyatli tasdiqlandi.',
            'token' => $token,
            'user' => $user
        ]);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Tizimdan chiqildi.']);
    }

    protected function sendMessage($phone, $code){
        logger("Sending SMS to $phone: $code");
        // Real SMS xizmat integratsiyasi shu yerga yoziladi
    }
}
