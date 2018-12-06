<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Carbon\Carbon;

class MessagesController extends Controller
{
    public function submit(Request $request){
        
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'email' => 'required|email',
            // 'phonenr'       => 'phone:NL',
            'phonenr' => 'required|min:10|numeric',
            'message' => 'required'
            ]);


            //Create new Message
            $message = new Message;
            $message->start_date = $request->input('start_date');
            $message->end_date = $request->input('end_date');
            $message->email = $request->input('email');
            $message->phonenr = $request->input('phonenr');
            $message->message = $request->input('message');

            $message->start_date = $request->input('start_date');
            $message->end_date = $request->input('end_date');
          
            
            
            
            //Save Message
            $message->save();

            //Redirect
            return redirect('/home')->with('success', 'Message Sent');


    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
