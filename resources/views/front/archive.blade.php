@extends('front.layout.app')

@section('main_content')
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- @php
                $ts = strtotime($updated_date);
                $year = date('Y',$ts);
                $month = date('m',$ts);
                $day = date('d',$ts);
                $date = Bsdate::eng_to_nep($year,$month, $day);
                echo( $date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

               @endphp --}}
        
                <h2>All posts of {{ $updated_date}}</h2>
                <nav class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
               
                        <li class="breadcrumb-item active" aria-current="page">{{ $updated_date }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                        
                <div class="category-page">
                    <div class="row">
                        @if(count($post_data_archive))
                        @foreach ($post_data_archive as $item)

                        <div class="col-lg-6 col-md-12">
                            <div class="category-page-post-item">
                                <div class="photo">
                                    <img src="{{ asset('uploads/'.$item->post_photo) }}" alt="">
                                </div>
                                <div class="category">
                                    <span class="badge bg-success">{{$item->rAllCategory->category_name  }}</span>
                                </div>
                                <h3><a href="{{ route('news_detail',$item->id) }}">{{ $item->post_title }}</a></h3>
                                <div class="date-user">
                         
                                    <div class="user">
                                        @if($item->author_id==0)
                                            @php $user_data = \App\Models\Admin::where('id',$item->admin_id)->first();
                                             @endphp
                                        @else
                                        @php $user_data = \App\Models\Author::where('id',$item->author_id)->first();
                                        @endphp

                                        @endif
                                        <a href="">{{ $user_data->name }}</a>
                                    </div>
                          
                                    <div class="date">
                                        {{-- @php
                                        $ts = strtotime($item->updated_at);
                                        $updated_date= date('d F Y',$ts);
        
                                @endphp
                               
                                        <a href=""> {{  $updated_date }}</a> --}}
                                        @php
                                        $ts = strtotime($item->updated_at);
                                        $year = date('Y',$ts);
                                        $month = date('m',$ts);
                                        $day = date('d',$ts);
                                        $date = Bsdate::eng_to_nep($year,$month, $day);
                                        echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

                                       @endphp
                                
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                        @endforeach
                            @else
                            <span class="text-danger">No News Found </span>
                            @endif


                        <div class="col-md-12">
                            {{ $post_data_archive->links() }}
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 sidebar-col">
                @include('front.layout.sidebar')
              
            </div>
        </div>
    </div>
</div>
    
@endsection