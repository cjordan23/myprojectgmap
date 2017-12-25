<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function admin(){
        return view('pages.admin');
    }
    public function adminRegistration(){
        return view('pages.adminregis');
    }
    public function statistic(){
        return view('pages.statistic');
    }
    public function workflow(){
        return view('pages.workflow');
    }
}
