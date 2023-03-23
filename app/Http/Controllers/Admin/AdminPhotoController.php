<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class AdminPhotoController extends Controller
{
    public function show(){
        $photos = Photo::get();
        return view('admin.photos.photo_show',compact('photos'));
     }


     public function create(){
        return view('admin.photos.photo_create');

    }

    public function store(Request $request){
        $request->validate([
            'caption'=>'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $now = time();
        $ext = $request->file('photo')->extension();
        $final_name = 'photo_' .$now. '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $photo = new Photo();
        $photo->photo=$final_name;
        $photo->caption=$request->caption;
        $photo->save();

        return redirect()->route('admin_photo_show')->with('success','Data is added successfully');
    }

    public function edit($id){
        
        $photo_data= Photo::where('id',$id)->first();
    
        return view('admin.photos.photo_edit',compact('photo_data'));

    }

    public function update(Request $request,$id){
        $photo_data= Photo::where('id',$id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            unlink(public_path('uploads/' . $photo_data->photo));
            $now = time();
            $ext = $request->file('photo')->extension();
            $final_name = 'photo' .$now. '.' . $ext;

            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $photo_data->photo = $final_name;
        }

        $photo_data->caption = $request->caption;
        $photo_data->update();
      return redirect()->route('admin_photo_show')->with('success','Data is Updated successfully');

    }

    public function delete($id){
        $photo_data= Photo::where('id',$id)->first();
        unlink(public_path('uploads/' . $photo_data->photo));
        $photo_data->delete();
        return redirect()->route('admin_photo_show')->with('success','Data is Deleted successfully');

    }


}
