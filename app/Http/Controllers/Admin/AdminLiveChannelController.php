<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LiveChannel;
use Illuminate\Http\Request;

class AdminLiveChannelController extends Controller
{
    public function show(){
        $live_channels = LiveChannel::get();
        return view('admin.livevideo.live_channel_show',compact('live_channels'));
    }
    public function create(){
        return view('admin.livevideo.live_channel_create');
    }

    public function store(Request $request){

        $request->validate([
            'heading' => 'required',
            'video_id' => 'required'
        ]);

        $live_channel = new LiveChannel();
        $live_channel->video_id = $request->video_id;
        $live_channel->heading = $request->heading;
        $live_channel->save();

        return redirect()->route('admin_live_channel_show')->with('success','Data is added successfully');

    }
    public function edit($id){
        $live_channel_data = LiveChannel::where('id',$id)->first();
        return view('admin.livevideo.live_channel_edit',compact('live_channel_data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'heading'=>'required',
            'video_id'=>'required'
        ]);
        $live_channel_data = LiveChannel::where('id',$id)->first();
        $live_channel_data->video_id = $request->video_id;
        $live_channel_data->heading = $request->heading;
        $live_channel_data->Update();

        return redirect()->route('admin_live_channel_show')->with('success','Data is Updated successfully');

    }

    public function delete ($id){
        $live_channel_data = LiveChannel::where('id',$id)->first();
        $live_channel_data->delete();
        return redirect()->route('admin_live_channel_show')->with('success','Data is deleted successfully');

    }
}
