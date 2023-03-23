<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AuthorPostController extends Controller
{
    public function show()
    {
        $posts="";
        $posts = Post::with('rSubCategory.rCategory','rAllCategory')->where('author_id',Auth::guard('author')->user()->id)->get();
        return view('author.post.post_show', compact('posts'));
    }

    public function create()
    {

        $sub_categories = SubCategory::with('rCategory')->get();
        $categories = Category::get();
    
        return view('author.post.post_create', compact('sub_categories','categories'));
    }


    public function store(Request $request)
    {

    

        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required',
            'post_photo' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);
        $q = DB::select("SHOW TABLE STATUS LIKE 'posts'");
        $ai_id = $q[0]->Auto_increment;

        $now = time();

        $ext = $request->file('post_photo')->extension();
        $final_name = 'post_photo_' . $now . '.' . $ext;

        $request->file('post_photo')->move(public_path('uploads/'), $final_name);

        $post = new Post();
        $post->post_title = $request->post_title;
        $post->post_detail = $request->post_detail;
        $post->post_photo = $final_name;
        $post->category_id = $request->category_id;
        $post->post_detail_src = $request->post_detail_src ? $request->post_detail_src:null;
        $post->sub_category_id = $request->sub_category_id ? $request->sub_category_id:null;
        $post->post_photo_src = $request->post_photo_src ? $request->post_photo_src:null;
        $post->visitors = 1;
        $post->author_id =  Auth::guard('author')->user()->id;
        $post->admin_id = 0;
        $post->is_share = $request->is_share;
        $post->is_comment = $request->is_comment;

        $post->save();

        return redirect()->route('author_post_show')->with('success', 'News is added successfully');
    }


    public function edit($id)
    {
        $test = Post::where('id',$id)->where('author_id',Auth::guard('author')->user()->id)->count();
      
        if(!$test){
            return redirect()->route('author_home');
        }

        // $sub_categories = SubCategory::with('rCategory')->get();
        $categories = Category::get();
  
       
        $post_single = Post::where('id', $id)->first();
        return view('author.post.post_edit', compact('post_single', 'categories'));
    }



    public function update(Request $request, $id)
    {
   
        // $test = Post::where('id',$id)->where('author_id',Auth::guard('author')->user()->id)->count();
      
        // if(!$test){
        //     return redirect()->route('author_home');
        // }

        $request->validate([
            'post_title' => 'required',
            'post_detail' => 'required',
        ]);
        $post = Post::where('id', $id)->first();

        if ($request->hasFile('post_photo')) {
            $request->validate([
                'post_photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            unlink(public_path('uploads/' . $post->post_photo));
            $now = time();
            $ext = $request->file('post_photo')->extension();
            $final_name = 'post_photo_' . $now . '.' . $ext;

            $request->file('post_photo')->move(public_path('uploads/'), $final_name);
            $post->post_photo = $final_name;
        }


        // $post->sub_category_id = $request->sub_category_id;

        $post->post_detail_src = $request->post_detail_src ? $request->post_detail_src:null;

        $post->category_id = $request->category_id;

        $post->sub_category_id = $request->sub_category_id ? $request->sub_category_id:null;
      
        $post->post_photo_src = $request->post_photo_src ? $request->post_photo_src:null;
        $post->post_title = $request->post_title;
        $post->post_detail = $request->post_detail;
        // $post->visitors = 1;
        // $post->author_id = Auth::guard('author')->user()->id;
        // $post->admin_id = 0;
        $post->is_share = $request->is_share;
        $post->is_comment = $request->is_comment;

        $post->update();
        return redirect()->route('author_post_show')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $test = Post::where('id',$id)->where('author_id',Auth::guard('author')->user()->id)->count();

        if(!$test){
            return redirect()->route('author_home');
        }
        $post = Post::where('id', $id)->first();
        unlink(public_path('uploads/' . $post->post_photo));
        $post->delete();
        return redirect()->route('author_post_show')->with('success', 'Data is Deleted successfully');
    }

}
