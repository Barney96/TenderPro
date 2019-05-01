<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required'
    	]);

    	//create new message
    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');
    	//save message
    	$message->save();

    	//Redirect
    	return redirect('/')->with('status', 'Message Sent');
    }

    public function getMessages(){
    	$messages = Message::all();

    	return view('messages')->with('messages', $messages);
    }
}
