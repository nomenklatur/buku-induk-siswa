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
            return redirect()->intended('/dashboard');
        };

        return back()->with('auth_error', 'Username atau Password anda salah');
    }
}
