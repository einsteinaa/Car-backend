@extends('admin.layout.app')
@section('heading', 'Edit Client')
@section('button')
<a href="{{ route('admin_client_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
@endsection
@section('main_content')


    <div class="section-body">
        <form action="{{ route('admin_client_update', $client_data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Existing Photo </label>
                            <div>
                            <img src="{{ asset('uploads/'.$client_data->photo) }}" alt="" style="width:150px;">

                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label>Photo </label>
                            <div>
                            <input type="file" name="photo">

                            </div>
                        </div>
                      
                        <div class="form-group mb-3">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" value="{{ $client_data->name }}">
                        </div>

                            <div class="form-group mb-3">
                                <label>Email *</label>
                                <input type="text" class="form-control" name="email"
                                value="{{ $client_data->email }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password *</label>
                                <input type="text" class="form-control" name="password"
                                    value="">
                            </div>
                            <div class="form-group mb-3">
                                <label>Retype Password *</label>
                                <input type="text" class="form-control" name="retype_password"
                                    value="">
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
