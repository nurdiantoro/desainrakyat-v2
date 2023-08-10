<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function LoginAction(Request $request)
    {
        $validasi = [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];

        $pesan = [
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Email yang kamu masukan salah',
            'password.required' => 'Password Wajib Di isi',
        ];

        $remember = $request->filled('remember_me');
        $credentials = $request->validate($validasi, $pesan);

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();

            return redirect(url('/admin'));
        } else {
            return back();
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }
}
