<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//jangan smpe lupaini
use Auth;
//ok bang
class AuthController extends Controller
{
    public function login() {
        
            return view('auth.login');
    }
    public function postlogin(Request $request) {
        $validatedData = $request->validate([
            
            'email' => 'required|email',
            'password' => 'required',
                  
        ]);
        
        if (Auth::attempt($request->only('email','password'))) {
           
            return redirect('/dashboard')->with('sukses','Selamat Datang');
        }
            return redirect('/login')->with('gagal','Email atau password ada yang salah');
    }
    
    public function logout() {
        
        Auth::logout();
            return redirect('/');
    }
    
}
