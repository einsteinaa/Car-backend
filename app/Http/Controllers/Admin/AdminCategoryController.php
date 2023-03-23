<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function create(){
        return view('admin.category.category_create');

    }

    public function show(){
       $categories = Category::get();
       return view('admin.category.category_show',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        $category = new Category();
        $category->name=$request->name;
        $category->save();

        return redirect()->route('admin_category_show')->with('success','Data is added successfully');
    }

    public function edit($id){
        $category_single =Category::where('id',$id)->first();
        return view('admin.category.category_edit',compact('category_single'));
    }

    public function update(Request $request ,$id){
        $request->validate([
            'name'=>'required',
        ]);
        $category = Category::where('id',$id)->first();
        $category->name=$request->name;
        $category->update();
        return redirect()->route('admin_category_show')->with('success','Data is updated successfully');

    }

    public function delete($id){
        $category_single =Category::where('id',$id)->first();
        $category_single->delete();
        return redirect()->route('admin_category_show')->with('success','Data is deleted successfully');

    }
}

