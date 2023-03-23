<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Admin;
use App\Models\Author;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detail($id){
 
    //    $post_detail= Post::where('id',$id)->first();
   //  $tag_data=Tag::where('post_id',$id)->get();
      //  $post_detail= Post::with('rSubCategory')->where('id',$id)->first();
        $post_detail= Post::with('rAllCategory')->where('id',$id)->first();

       if($post_detail->author_id == 0){
            $user_data = Admin::where('id',$post_detail->admin_id)->first();
            
       }else {
         $user_data = Author::where('id',$post_detail->author_id)->first();
       }
    //    Update page view count
    $new_value = $post_detail->visitors+1;
    $post_detail->visitors = $new_value;
    $post_detail->update();

    $related_post_array = Post::with('rAllCategory')->orderBy('id',"desc")->where('category_id', $post_detail->category_id)->get();


       return view('front.post_detail',compact('post_detail','user_data','related_post_array'));
    }
}
