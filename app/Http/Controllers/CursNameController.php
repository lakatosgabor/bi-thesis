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
            
            return redirect()->back();

        }

        else{
            echo ("Hiányzó érték!");
        }



    }

    public function show($name){
        print $name;
        return view('admin.aeditcours')->with('name', $name);
    }

    public function edit(Request $request){

        $cours = new NewCourse();
        if ($request->input('task')){
            $cours->text = $request->input('task');
            $cours->curs = $request->input('table');;
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/files', $filename);
            $cours->file = $filename;
            $cours->save();

            $cours = NewCourse::orderBy('created_at', 'asc')->get();
            return view('admin.aeditcours')->with('cours', $cours);
            
            

            

    }

    else{
        echo ("Hiányzó érték!");
    }
        
    }

}