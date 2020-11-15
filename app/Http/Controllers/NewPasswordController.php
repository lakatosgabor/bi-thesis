<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class NewPasswordController extends Controller
{
    public function newpassword(Request $request){
        if ($request->input('name') and $request->input('password') and $request->input('password2')){
            if ($request->input('password') == $request->input('password2')){
                $name = $request->input('name');
                $password = $request->input('password');
                $password = Hash::make($password);

                DB::table('users')
                    ->where('name', $name)
                    ->update(
                        [
                            'password' => $password

                        ]

                );
                Auth::logout();
                echo ("A jelszó módosításra került. <a href="."/main".">Bejelentkezés</a>");
                
            }
            else{echo "A két jelszó nem egyezik!";}
        }    
        else {echo "Hiányzó érték!";}
    }
}
