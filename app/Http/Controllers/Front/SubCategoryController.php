<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index($id){
        $sub_category_data = SubCategory::where('id',$id)->first();
        $post_data = Post::where('sub_category_id',$id)->orderBy('id','desc')->paginate(10);
        
        return view('front.sub_category',compact('sub_category_data','post_data'));
    }
}
