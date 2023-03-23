<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Page;

use App\Mail\Websitemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $page_data = Page::where('id',1)->first();
        return view('front.contact',compact('page_data'));
    }
    public function send_email(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email' => 'required|email',
            'message' => 'required'
        ])  ; 
        if(!$validator->passes())
        {
            return response()->json(['code'=>0, 'error_message'=>$validator->errors()->toArray()]);
        }
        else {
            // Send mail
            $admin_data = Admin::where('id', 1)->first();
            $subject = 'Contact Form Email';
        $message = 'Visitor Message Details : <br>';

        $message .= '<b> Visitor Name : </b>'.$request->name.'<br>';
        $message .= '<b> Visitor Email : </b>'.$request->email.'<br>';
        $message .= '<b> Visitor Message : </b>'.$request->message.'<br>';

    
        Mail::to($request->email)->send(new Websitemail($subject, $message));

            return response()->json(['code'=>1, 'success_message' => 'Email is sent !']);
        }
    }
}
