<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Authorization extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        };
        return back()->with('auth_error', 'Username atau Password anda salah');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function adjust(){
        if(auth()->user()->status == 'admin'){
            return redirect()->intended('/dashboard');
        }
        return redirect()->intended('/home');
    }
}
