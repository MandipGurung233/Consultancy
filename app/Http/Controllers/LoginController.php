<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function logout(){
        Session::forget('admin');
        return redirect ('login');
    }
}