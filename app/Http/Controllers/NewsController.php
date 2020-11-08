<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    
    public function store(Request $request ){

        $news = new News();
        if ($request->input('post')){
            $news->name = $request->input('name');
            $news->post = $request->input('post');
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images', $filename);
            $news->image = $filename;
            $news->save();
            $news = News::orderBy('created_at', 'desc')->get();
            return view('news')->with('news', $news); 
        }

        else{
            echo("Hiányzó érték!");
        }
    }
}