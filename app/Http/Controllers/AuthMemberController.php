<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Member;
use Exception;

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

    public function loginPost(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $req->input('username');
        $password = $req->input('password');

        if($validator->fails()){
            return redirect('/member')->with('error', 'Login Gagal!');
        }else{
            $member = Member::where('name', $username)->first();

            if(!$member){
                return redirect('/member')->with('error', 'Username Tidak Terdaftar!');
            }

            $isValidPassword = Hash::check($password, $member->password);

            if(!$isValidPassword){
                return redirect('/member')->with('error', 'Kata Sandi Salah!');
            }

            $req->session()->regenerate();
            Session::put('id', $member->id);
            Session::put('name', $member->name);
            Session::put('email', $member->email);
            Session::put('img_path', $member->img_path);

            // if($member->role_code == 1 || $member->role_code == 2){
            //     return redirect('/dashboard-adm');
            // }else{
            //     return redirect('/dashboard');
            // }

            return redirect('/home')->with('success', 'Selamat Datang!!');
        }
    }

    public function showForm()
    {
        return view('member.register');
    }

    public function submitForm(Request $req)
    {
        $image = $req->file('profile-img');
        $image_path = time().rand(1,100).'.'.$image->getClientOriginalExtension();
        $image_name = $image->getClientOriginalName();
        $image->storeAs('public/profile_picture', $image_path);

        // $validatedData = $req->validate([
        //     'name' => 'required|string|max:255',
        //     'gender' => 'required|string|max:5',
        //     'address' => 'required|string|max:500',
        //     'phone_number' => 'required|string|max:15',
        //     'weight' => 'required|integer',
        //     'height' => 'required|integer',
        //     'bust' => 'required|integer',
        //     'abdomen' => 'required|integer',
        //     'hip' => 'required|integer',
        //     'thigh' => 'required|integer',
        //     'email' => 'required|email|max:255',
        //     'password' => 'required|string|min:8|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|confirmed',
        // ]);

        $simpan = Member::create([
            'name' => $req->name,
            'gender' => $req->gender,
            'address' => $req->address,
            'phone_number' => $req->phone_number,
            'weight' => $req->weight,
            'height' => $req->height,
            'bust' => $req->bust,
            'abdomen' => $req->abdomen,
            'hip' => $req->hip,
            'thigh' => $req->thigh,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'img_name' => $image_name,
            'img_path' => $image_path
        ]);

        if ($simpan) {
            return redirect('/member')->with('success', 'Proses Register Berhasil, Silakan Login');
        } else {
            return redirect('/member')->with('error', 'Proses Register Gagal, Silakan Coba Lagi');
        }
    }

    public function logout()
    {
        try {
            Session::flush();
            return redirect('/')->with('success', 'Sampai Jumpa!!');

        } catch (Exception $e) {
            Session::flush();
            return redirect('/')->with('success', 'Sampai Jumpa!!');
        }
    }
}
