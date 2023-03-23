@extends('admin.layout.app')
@section('heading', 'Add Car')
@section('button')
    <a href="{{ route('admin_car_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
@endsection
@section('main_content')


    <div class="section-body">
        <form method="post" action="{{ route('admin_car_store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Name *</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label>Model *</label>
                                        <input type="text" class="form-control" name="model">
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label>Price *</label>
                                        <input type="text" class="form-control" name="price">
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label>Select Category *</label>
                                        <select name="category_id" class="form-control">
                                            <option value=""> Select Category
                                            </option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}">
                                                    {{ $cat->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                       
                                    <div class="col-md-6">
                                    
                                                <label>Car Image *</label>
                                                <div>
                                                    <input type="file" class="" name="image1">
                                                </div>
                                    </div>

                                     
                                    <div class="col-md-6">

                                        <label>Status *</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                  
                         
                               
                   

                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Description *</label>
                                        <textarea name="description" class="form-control snote" cols="30" rows="10"></textarea>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


@endsection
