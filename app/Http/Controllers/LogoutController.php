<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function index(){
        // dd("logout");
        Auth::logout();
        return redirect()->route('landing');

    }
}
