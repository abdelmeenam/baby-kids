<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function loginPage(){
        return view('admin.login');
    }

    public function login(LoginRequest $req){

        $credentials = $req->only('email' ,'password');
        if (Auth::attempt($credentials)){
            return redirect(route('admin.index'));
        }
        Alert::error('Error', 'user is not found');
        return redirect()->back() ;
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('admin.login'));
    }

}
