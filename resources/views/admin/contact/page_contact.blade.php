@extends('admin.layout.app')
@section('heading', 'Edit Contact page')

@section('main_content')


    <div class="section-body">
        <form action="{{route('admin_page_contact_update')}}" method="post">
            @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Contact Title *</label>
                                <input type="text" class="form-control" name="contact_title"
                                    value="{{  $page_data->contact_title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Show on menu?</label>
                                <select name="contact_status" class="form-control">
                                    <option value="Show" @if($page_data->contact_status =="Show") selected @endif>Show</option>
                                    <option value="Hide" @if($page_data->contact_status =="Hide") selected @endif>Hide</option>

                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Map (iFrame Code)</label>
                                <textarea class="form-control" name="contact_map" cols="30" rows="10" style="height: 120px"
                                    >{{  $page_data->contact_map }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Contact Details </label>
                                <textarea name="contact_detail" class="form-control snote" cols="30" rows="10">{{ $page_data->contact_detail }}</textarea>
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
