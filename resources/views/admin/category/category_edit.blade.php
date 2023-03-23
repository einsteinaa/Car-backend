@extends('admin.layout.app')
@section('heading', 'Edit Category')
@section('button')
<a href="{{ route('admin_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
@endsection
@section('main_content')


    <div class="section-body">
        <form action="{{ route('admin_category_update', $category_single->id) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body"> 
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $category_single->name }}">
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
    </div>


@endsection
