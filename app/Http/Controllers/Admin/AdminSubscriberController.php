<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminSubscriberController extends Controller
{
    public function show_all(){
        $subscribers = Subscriber::where('status','Active')->get();
        return view('admin.subscriber.subscriber_all',compact('subscribers'));
    }

    public function show_email(){
        return view('admin.subscriber.subscriber_send_email');

    }
    public function send_email_submit(Request $request){
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
           
        ]);
        $subject = $request->subject;
        $message = $request->message;
       

        $subscribers =   Subscriber::where('status','Active')->get();
        foreach($subscribers as $row){
            Mail::to($row->email)->send(new Websitemail($subject, $message));
        }
        return redirect()->back()->with('success', 'Email is sent successfully');

    }
}
