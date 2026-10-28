<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginview()
    {
        return view('auth.login');
    }

    public function loginpost()
    {
        
    }

    public function registerview()
    {
        return view('auth.register');
    }

    public function regiterhost()
    {
        
    }
}
