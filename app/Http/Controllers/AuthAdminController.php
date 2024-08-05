<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthAdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function loginPost(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $req->input('username');
        $password = $req->input('password');

        if($validator->fails()){
            return redirect('/admin')->with('error', 'Login Gagal!');
        }else{
            $user = User::where('name', $username)->first();

            if(!$user){
                return redirect('/admin')->with('error', 'Username Tidak Terdaftar!');
            }

            $isValidPassword = Hash::check($password, $user->password);

            if(!$isValidPassword){
                return redirect('/admin')->with('error', 'Kata Sandi Salah!');
            }

            $req->session()->regenerate();
            Session::put('id', $user->id);
            Session::put('name', $user->name);
            Session::put('email', $user->email);
            Session::put('role_code', $user->role_code);

            // if($user->role_code == '01' || $user->role_code == '02'){
            //     return redirect('/dashboard-adm');
            // }else{
            //     return redirect('/dashboard-owner');
            // }

            return redirect('/adm-home')->with('success', 'Selamat Datang!!');
        }
    }
}
