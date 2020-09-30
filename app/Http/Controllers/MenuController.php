<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Documents;

class MenuController extends Controller{

    function dashboardmenu(){
        $file=Documents::all();
        return view('dashboard', compact('file'));
    }

    function newsmenu(){
        return view('news');
    }

    function tasksmenu(){
        return view('tasks');
    }

    function chatmenu(){
        return view('chat');
    }

    function warningmenu(){
        return view('warning');
    }

}

