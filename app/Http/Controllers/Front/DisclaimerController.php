<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function index(){
        $page_data = Page::where('id',1)->first();
  
        return view('front.disclaimer',compact('page_data'));
    }
}
