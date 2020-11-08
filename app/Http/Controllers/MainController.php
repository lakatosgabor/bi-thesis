<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Validator;
use Auth;
use App\Documents;
use App\Users;

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
            if(Auth::user()->usertype == 'oktato'){
                return redirect('/admin/tutorial');
            }
            else{
                return redirect('main/dashboard');
            }
            

        }
        else{
            return back()->with('error', 'Sikertelen bejelentkezés!');
        }

    }

    function successlogin(){
        $file=Documents::all();
        return view('dashboard', compact('file'));
    }

    function logout(){
        Auth::logout();
        return redirect('main');
    }

    function store(Request $request){
        $users = new Users();

        if($request->input('password') and $request->input('neptun') and $request->input('name') and $request->input('email')){
            $password = $request->input('password');
            $users->usertype = "hallgato";
            $users->neptun = $request->input('neptun');
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->password = Hash::make($password);
            $users->remember_token = Str::random(10);
            $users->save();
            $users = Users::orderBy('name', 'asc')->get();
            return view('/admin/editstudents')->with('users', $users);
        }
        else{
            echo("Hiányzó érték!");
        }
        


            
            


    
    }




}


