<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthMemberController extends Controller
{
    public function landing()
    {
        return view('member.landing');
    }

    public function loginForm()
    {
        return view('member.login');
    }

    public function regisForm()
    {
        return view('member.register');
    }
}
