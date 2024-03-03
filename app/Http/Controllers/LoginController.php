<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index() {
        $data = [
            'content' => 'home/auth/login'
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function action(Request $request)
    {
        $request->validate([
            'email'    => 'required|max:200|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == "User") {
                return redirect()->route('front.home.index')->withSuccess("Login Berhasil");
            }else{
                return redirect()->route('dashboard.index')->withSuccess("Login Berhasil");
            }
        }
        return redirect()->route('login')->withError("Login Gagal!");
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate(false);
        return redirect('/');
    }
}
