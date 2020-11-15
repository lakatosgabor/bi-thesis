<?php

namespace App\Http\Controllers;
use App\Chat;
use App\Providers\BroadcastServiceProvider;


use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request ){

        $msg = new Chat();
            if ($request->input('name') and $request->input('message')){
            $msg->name = $request->input('name');
            $msg->message = $request->input('message');
            $msg->save();
            $msg = Chat::orderBy('created_at', 'asc')->get();
            return view('chat')->with('msg', $msg);
        }

        else{
            echo ("Hiányzó érték!");
        }
    }


    public function adminstore(Request $request ){

        $msg = new Chat();
            if ($request->input('name') and $request->input('message')){
            $msg->name = $request->input('name');
            $msg->message = $request->input('message');
            $msg->save();
            $msg = Chat::orderBy('created_at', 'asc')->get();
            return view('admin.achat')->with('msg', $msg);
        }

        else{
            echo ("Hiányzó érték!");
        }
    }
}
