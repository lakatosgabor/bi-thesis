<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Documents;
use App\News;
use App\Users;

class MenuController extends Controller{

    function dashboardmenu(){
        $file=Documents::all();
        return view('dashboard', compact('file'));
    }

    function newsmenu(){
        $news = News::orderBy('created_at', 'desc')->get();

        return view('news')->with('news', $news);
    }

    function coursemenu(){
        return view('course');
    }

    function chatmenu(){
        return view('chat');
    }

    function warningmenu(){
        return view('warning');
    }

    function asksmenu(){
        return view('asks');
    }

    function editmenu(){
        $users = Users::orderBy('name', 'asc')->get();

        return view('/admin/editstudents')->with('users', $users);
    }

}

