<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    public function login(){
        return view('auth.login');
    }

    public function login_store(Request $request){
        $phone = $request->phone;
        $User = User::where('phone',$phone)->first();
        if(!$User){
            return redirect()->back()->with('error', 'Tizimga kirish uchun oldin ro\'yxatdan o\'ting!');
        }elseif($User->status == 'pedding'){
            return redirect()->route('success')->with('id', $User->id);
        }else{
            $code = 666666;
            $User->code = $code;
            $User->save();
            $start = substr($request->phone, 0, 4);
            $end = substr($request->phone, -4);
            return redirect()->route('verify')->with(['phone' => $request->phone,'message' => $start." ... ".$end]);
        }
    }

    public function register(){
        return view('auth.register');
    }

    public function verify(){
        return view('auth.verify');
    }
    public function verify_store(Request $request){
        $credentials = $request->validate([
            'phone' => ['required'],
            'code' => ['required'],
        ]);
        $phone = $credentials['phone'];
        $code = str_replace(" ","", $credentials['code']);
        $User = User::where('phone', $phone)->where('code', $code)->first();
        $start = substr($phone, 0, 4);
        $end = substr($phone, -4);
        if (!$User) {
            return back()->withErrors([
                'phone' => $phone,
                'message' => $start." ... ".$end,
                'error' => 'Tasdiqlash kodi noto\'g\'ri'
            ]);
        }
        Auth::login($User, $request->boolean('remember'));
        $User->code = null;
        $User->status = 'active';
        $User->save();
        $request->session()->regenerate();
        return redirect()->intended('/home');
    }
    public function success(){
        return view('auth.success');
    }
}
