@extends('author.layout.app')
@section('heading', 'Add New Posts')
@section('button')
<a href="{{ route('author_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
@endsection
@section('main_content')


    <div class="section-body">
        <form action="{{ route('author_post_store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      
            

                            <div class="form-group mb-3">
                                <label>Post Title *</label>
                                <input type="text" class="form-control" name="post_title"
                                    value="">
                            </div>
                            <div class="form-group mb-3">
                                <label>Post Detail *</label>
                                <textarea name="post_detail" class="form-control snote" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Artical Source Name If Any </label>
                                <input type="text" class="form-control" name="post_detail_src"
                                    value="">
                            </div>
                            <div class="form-group mb-3">
                                <label>Post Photo *</label>
                                <div>
                                <input type="file" class="" name="post_photo">

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Artical Photo Source Name If Any </label>
                                <input type="text" class="form-control" name="post_photo_src"
                                    value="">
                            </div>
                            <div class="form-group mb-3">
                                <label>Select Category *</label>
                                <select name="category_id" class="form-control select2">
                                    @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->category_name }} </option>
                                        
                                    @endforeach
                              

                                </select>
                            </div>
                            {{-- <div class="form-group mb-3">
                                <label>Select Sub Category</label>
                                <select name="sub_category_id" class="form-control select2">
                                    <option value="">Choose any sub category</option>
                                    @foreach ($sub_categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->sub_category_name }} ({{ $item->rCategory->category_name }})</option>
                                        
                                    @endforeach
                              

                                </select>
                            </div> --}}
                            <div class="form-group mb-3">
                                <label>Is Shareable?</label>
                                <select name="is_share" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label>Is Comment?</label>
                                <select name="is_comment" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>

                                </select>
                            </div>
{{-- 
                            <div class="form-group mb-3">
                                <label>Tags</label>
                                <input type="text" class="form-control" name="tags"
                                    value="">
                            </div> --}}

                            {{-- <div class="form-group mb-3">
                                <label>Want to share to subscribe?</label>
                                <select name="subscriber_send_option" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>

                                </select>
                            </div> --}}
                      
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
