<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
   public function index(){
   $setting_data= Setting::where('id',1)->first();
    return view('admin.setting.setting',compact('setting_data'));
   }
   public function update(Request $request){
     
      $request->validate([
         'name'=>'required',
         'address'=>'required',
         'mobile'=>'required',
         
     ]);
     $setting = Setting::where('id',1)->first();
     $setting->name=$request->name;
     $setting->address=$request->address;
     $setting->email=$request->email;
     $setting->mobile=$request->mobile;
     $setting->phone=$request->phone;

     $setting->update();
     return redirect()->route('admin_setting')->with('success','Data is updated successfully');
   }
}
