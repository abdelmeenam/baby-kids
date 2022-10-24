<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index(){

        $admin_name =Auth::User()->name;                //how to get authUser data

        return view('Admin.index' , compact('admin_name'));

    }
}
