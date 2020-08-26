<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MenuController extends Controller{

    function dashboardmenu(){
        return view('dashboard');
    }

    function newsmenu(){
        return view('news');
    }
}

