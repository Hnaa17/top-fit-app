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

    public function showForm()
    {
        return view('member.register');
    }

    public function submitForm(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        // Simpan data ke database atau lakukan tindakan lainnya
        // Example: FormModel::create($request->all());

        return redirect()->route('form.success');
    }
}
