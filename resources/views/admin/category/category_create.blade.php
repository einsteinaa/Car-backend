@extends('admin.layout.app')
@section('heading', 'Add Category')
@section('button')
<a href="{{ route('admin_category_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
@endsection
@section('main_content')


    <div class="section-body">
        <form action="{{ route('admin_category_store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name">
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
