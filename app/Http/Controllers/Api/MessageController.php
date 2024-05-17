<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'name' => 'string|max:100',
            'email' => 'email',
            'message' => 'string',
            'msg_id' => 'integer|exists:projects,id'
        ]);

        $message = new Message();
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->message = $data['message'];
        $message->msg_id = $data['msg_id'];
        $message->save();


        return $message;

    }
}
