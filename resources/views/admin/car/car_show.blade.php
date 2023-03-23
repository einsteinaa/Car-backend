@extends('admin.layout.app')
@section('heading', 'Car')
@section('button')
    <a href="{{ route('admin_car_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Car</a>
@endsection
@section('main_content')
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="example1">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Model</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/'.$car->image1) }}" alt="" style="width:100px">
                                            </td>

                                            <td>{{ $car->name }}</td>

                                            <td>{{ $car->model }}</td>
                                            <td>{{ $car->category->name }}</td>


                                            <td class="pt_10 pb_10">
                                                <a href="{{ route('admin_car_edit', $car->id) }}"
                                                    class="btn btn-primary">Edit</a>

                                                <a href="{{ route('admin_car_delete', $car->id) }}"
                                                    class="btn btn-danger"
                                                    onClick="return confirm('Are you sure?');">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
