<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = request(['email', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerateToken();

            return redirect()->route('dashboard')->with('status', 'Selamat Datang Admin');
        } else {
            return back()->withErrors([
                'error' => 'Email dan Password Anda Salah!'
            ]);
        }
    }
}
