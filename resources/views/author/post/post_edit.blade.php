@extends('author.layout.app')
@section('heading', 'Edit Posts')
@section('button')
    <a href="{{ route('author_post_show') }}" class="btn btn-primary"><i class="fas fa-eye"></i> View</a>
@endsection
@section('main_content')


    <div class="section-body">
        <form action="{{ route('author_post_update', $post_single->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Post Title *</label>
                                <input type="text" class="form-control" name="post_title"
                                    value="{{ $post_single->post_title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Post Detail *</label>
                                <textarea name="post_detail" class="form-control snote" cols="30" rows="10">{{ $post_single->post_detail }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Artical Source Name If Any </label>
                                <input type="text" class="form-control" name="post_detail_src"
                                    value="{{ $post_single->post_detail_src }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Existing Post Photo</label>
                                <div>
                                    <img src="{{ asset('uploads/' . $post_single->post_photo) }}" style="width: 200px;" />

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Change Photo </label>
                                <div>
                                    <input type="file" class="" name="post_photo">

                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Artical Photo Source Name If Any </label>
                                <input type="text" class="form-control" name="post_photo_src"
                                    value="{{ $post_single->post_photo_src }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Select Category *</label>
                                <select name="category_id" class="form-control select2">
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($item->id == $post_single->category_id) selected @endif>{{ $item->category_name }}
                                        </option>

                                    @endforeach


                                    

                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Is Shareable?</label>
                                <select name="is_share" class="form-control">
                                    <option value="1" @if ($post_single->is_share == 1) selected @endif>Yes</option>
                                    <option value="0" @if ($post_single->is_share == 0) selected @endif>No</option>

                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label>Is Comment?</label>
                                <select name="is_comment" class="form-control">
                                    <option value="1" @if ($post_single->is_comment == 1) selected @endif>Yes</option>
                                    <option value="0" @if ($post_single->is_comment == 0) selected @endif>No</option>

                                </select>
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
