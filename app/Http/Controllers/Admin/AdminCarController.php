<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCarController extends Controller
{
    public function show(){
        // $cars = Car::get(); category
        $cars = Car::with('category')->get();
        
        return view('admin.car.car_show',compact('cars'));
     }

     public function create(){
        $categories = Category::all();
        return view('admin.car.car_create',compact('categories'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'image1' => 'required|image|mimes:jpg,jpeg,png,gif',
            'price'=>'required',
            'status'=>'required',
            'category_id'=>'required'
        ]);

        $now = time();
        $ext = $request->file('image1')->extension();
        $final_name = 'image1' . $now . '.' . $ext;
        $request->file('image1')->move(public_path('uploads/'), $final_name);

        $car = new Car();
        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->status = $request->status;
        $car->category_id = $request->category_id;
        $car->image1 = $final_name;
        $car->description = $request->description ? $request->description:null;

        $car->save();
        return redirect()->route('admin_car_show')->with('success','Data is added successfully');


    }


    public function edit($id)
    {
     
        $categories = Category::all();
        $car_single = Car::where('id', $id)->first();
        return view('admin.car.car_edit', compact('car_single', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price'=>'required',
            'status'=>'required',
            'category_id'=>'required'
        ]);
        $car = Car::where('id', $id)->first();
        if ($request->hasFile('image1')) {
            $request->validate([
                'image1' => 'image|mimes:jpg,jpeg,png,gif',
            ]);
            unlink(public_path('uploads/' . $car->image1));
            $now = time();
            $ext = $request->file('image1')->extension();
            $final_name = 'image1_' . $now . '.' . $ext;

            $request->file('image1')->move(public_path('uploads/'), $final_name);
            $car->image1 = $final_name;
        }


        $car->name = $request->name;
        $car->model = $request->model;
        $car->price = $request->price;
        $car->status = $request->status;
        $car->category_id = $request->category_id;
        // $car->image1 = $final_name;
        $car->description = $request->description ? $request->description:null;

        $car->update();
        return redirect()->route('admin_car_show')->with('success', 'Data is updated successfully');
    }

    public function delete($id)
    {
        $car = Car::where('id', $id)->first();
        unlink(public_path('uploads/' . $car->image1));

        $car->delete();
        return redirect()->route('admin_car_show')->with('success', 'Data is Deleted successfully');
    }
}
