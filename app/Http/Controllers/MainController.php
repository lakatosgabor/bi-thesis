<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index(){
        return view('login');
    }  
    
    function checklogin(Request $request){
        $this->validate($request, [
            'email'        =>  'required|email',
            'password'     =>  'required|alphaNum|min:6'
        ]);

        $user_data = array(
            'email'        =>  $request->get('email'),
            'password'     =>  $request->get('password'),
        );

        if (Auth::attempt($user_data)){
            return redirect('main/dashboard');

        }
        else{
            return back()->with('error', 'Sikertelen bejelentkezés!');
        }

    }

    function successlogin(){
        return view('dashboard');
    }

    function logout(){
        Auth::logout();
        return redirect('main');
    }





}
