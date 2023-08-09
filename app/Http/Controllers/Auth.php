<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }

    public function LoginAction()
    {
        return view('backend.auth.login');
    }
}
