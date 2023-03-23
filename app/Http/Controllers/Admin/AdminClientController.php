<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

class AdminClientController extends Controller
{
    
    public function show(){
        $clients = Client::get();
        return view('admin.client.client_show',compact('clients'));
     }

     public function create(){
       
        return view('admin.client.client_create');
     }


     public function store(Request $request){
  

        $client = new Client();
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'password'=>'required',
            'retype_password'=>'required|same:password'
        ]);
        
       
          
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'client_photo_' .$now. '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $client->photo = $final_name;
        }

        $client->name = $request->name;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $client->token = '';
        $client->save();


             // Send mail
         
         $subject = 'Your account is created to the website ';
         $message = 'Hi, your account is created successfully.Please go to this link: <br>';
         $message .= 'Please login to the website as client. : <br>';
         $message .= '<a href="'.route('login').'">';
         $message .= 'Click on this link';
         $message .= '</a>';
         $message .= '<br> Please login by this email : ';
         $message .= $request->email;
         $message .= '<br> Your Password : ';
         $message .= $request->password;
         $message .= '<br> Please change after login';





         Mail::to($request->email)->send(new Websitemail($subject, $message));
 

        return redirect()->route('admin_client_show')->with('success','Client account created successfully');

    }

    public function edit($id){

        $client_data = Client::where('id',$id)->first();
        return view('admin.client.client_edit', compact('client_data'));
    }



    public function update(Request $request, $id){
        $client = Client::where('id',$id)->first();

        $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('clients')->ignore($client->id)
            ],
         
        ]);

        if ($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            $client->password = Hash::make($request->password);
        }
        if ($request->hasFile('photo')) {

            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            unlink(public_path('uploads/' . $client->photo));

            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'client_photo_' .$now. '.' . $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
    
            $client->photo = $final_name;
        }


        $client->name = $request->name;
        $client->email = $request->email;
        $client->update();

        return redirect()->route('admin_client_show')->with('success','Client information updated successfully.');

    }

    public function delete($id){
        $client = Client::where('id',$id)->first();
        if($client->photo !=NULL){
            unlink(public_path('uploads/'.$client->photo));
        }
        $client->delete();

        return redirect()->route('admin_client_show')->with('success','Client is deleted successfully');
    }
}
