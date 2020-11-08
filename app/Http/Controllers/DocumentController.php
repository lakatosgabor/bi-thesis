<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;



use Illuminate\Http\Request;
use App\Documents;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $file=Documents::all();
        return view('tasks', compact('file'));


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Documents;


        //fájl mentése
        if ($request->file('file')) {
            $file=$request->file('file');
               Storage::disk('local')->put($request->neptun, $file);

                $data->file=$request->file;
                $data->neptun=$request->neptun;
                $data->title=$request->title;
                $data->description=$request->description;
                $data->save();
                return redirect()->back(); 
        }
        echo("A fájl feltöltése sikertelen!");
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Documents::find($id);
        return view('details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function download($file){
        //
        


    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
