<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigatorController extends Controller
{
    //
    public function agrovet(){
        return view('components.agrovet');
    }
    public function loans(){
        return view('components.loans');

    }
    public function farming(){
        return view('components.farming');

    }
    public function investment(){
        return view('components.investment');

    }
    public function operations(){
        return view('components.operation');

    }
    public function manage(){
        return view('components.manage');

    }
    public function reports(){
        return view('components.reports');
    }
    public function forums(){
        return view('components.forum');

    }
    public function sales(){
        return view('components.sales');

    }
    public function goods(){
        return view('components.goods');

    }
    // public function agrovet(){

    // }
    // public function agrovet(){

    // }
    // public function agrovet(){

    // }
    // public function agrovet(){

    // }
    // public function agrovet(){

    // }
    // public function agrovet(){

    // }

}
