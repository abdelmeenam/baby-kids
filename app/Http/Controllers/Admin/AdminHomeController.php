<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){

        //Auth::User()->email;                //how to get authUser data
        return view('Admin.index');

    }
}
