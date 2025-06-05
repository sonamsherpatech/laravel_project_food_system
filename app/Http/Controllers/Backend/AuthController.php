<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    function showLogin() {
        return view('backend.user.login');
    }

    function showRegister() {
        return view('backend.user.register');
    }

    function register(RegisterRequest $request) {
        try{
            // dd($request);
            $user = User::create($request->all());
            if($user) {
                return redirect()->route('backend.showlogin')->with('success','User registered sucessfully');
            }else {
                return redirect()->back()->with('error','User registration failed');
            }
        }catch(Exception $ex) {
            return redirect()->back()->with('error','Oops...Error');
        }
    }

    function login(Request $request) {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('backend/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials'
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('backend.login');
    }

}
