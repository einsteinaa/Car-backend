<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $category_data = Category::where('id',$id)->first();
        $post_data = Post::where('category_id',$id)->orderBy('id','desc')->paginate(10);
        
        return view('front.category',compact('category_data','post_data'));
    }
}
