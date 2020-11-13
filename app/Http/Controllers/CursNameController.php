<?php

namespace App\Http\Controllers;
use App\CursName;
use Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NewCourse;

class CursNameController extends Controller
{
    public function store(Request $request){
        $name = new CursName();
        if ($request->input('name')){
            $name->name = $request->input('name');
            $table_name = Str::lower($request->input('name'));
            $table_name = Str::ascii($request->input('name'));  
            $name->cid = Str::snake($table_name);
            $name->save();
            $name = CursName::orderBy('name', 'asc')->get();


            $model_name = 'NewCourse';          
            Artisan::call('make:model',['name'=>$model_name]);
            Schema::create(Str::snake($table_name), function (Blueprint $table) {
                $table->increments('id');
                $table->string('text');
                $table->string('file');
                $table->timestamps();
            });
            
            return redirect()->back();

        }

        else{
            echo ("Hiányzó érték!");
        }



    }

    public function show(){

        return view('admin.aeditcours');
        
    }

}