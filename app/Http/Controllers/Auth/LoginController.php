<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show(){
        $user = Auth::user();
        if($user)
        {
            return redirect()->to(RouteServiceProvider::HOME);
        }else{
            return view('auth.login');
        }
    }

    public function handle(){
        $success = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ], request()->has('remember'));

        if($success){
            return redirect()->to(RouteServiceProvider::HOME);
        }

        return back()->withErrors([
            'email' => 'Email Belum Terdaftar'
        ]);
    }
}
