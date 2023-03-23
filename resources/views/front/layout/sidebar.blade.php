<div class="sidebar">

    <div class="widget">
        @foreach($global_sidebar_top_ad as $row)
        <div class="ad-sidebar">
            @if($row->sidebar_ad_url == '')
           <img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt="">
            @else
            <a href="{{ $row->sidebar_ad_url }}" target="_blank"><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt=""></a>
@endif
        </div>
        @endforeach
    </div>
{{-- tags --}}
    {{-- <div class="widget">
        <div class="tag-heading">
            <h2>Tags</h2>
        </div>
        <div class="tag">
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">business</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">river</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">politics</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">google</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">tree</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">airplane</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">tiles</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">recent</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">brand</span></a>
            </div>
            <div class="tag-item">
                <a href=""><span class="badge bg-secondary">election</span></a>
            </div>
        </div>
    </div> --}}

    <div class="widget">
        <div class="archive-heading">
            <h2>Archive</h2>
        </div>
        <div class="archive">
            @php
            $all_post_data = \App\Models\Post::orderBy('id','desc')->get();
         
          
            foreach ($all_post_data as $row) {
                $ts = strtotime($row->created_at);
                $month = date('m',$ts);
                $month_full = date('F',$ts);

                $year = date('Y',$ts);
                $archive_array[]=$month.'-'.$month_full.'-'.$year;
            }
       
               $archive_array = (array_unique($archive_array));
            
           
         @endphp
         {{-- <form action="{{ route('archive_show') }}" method="post">
            @csrf
            <select name="archive_month_year" class="form-select" onchange="this.form.submit()">
                <option value="">Select Month</option>

                @for($i=0;$i<count($archive_array);$i++)
                    @php
                                $temp_arr = explode('-',$archive_array[$i])                        
                    @endphp
                <option value="{{ $temp_arr[0].'-'.$temp_arr[2] }}">{{ $temp_arr[1] }}, {{ $temp_arr[2] }}</option>

                @endfor
            </select>
         </form> --}}
        </div>
    </div>
    {{-- live youtube channel --}}
{{-- @foreach($global_live_channel_data as $item)
    <div class="widget">
        <div class="live-channel">
            <div class="live-channel-heading">
                <h2>{{ $item->heading }}</h2>
            </div>
            <div class="live-channel-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $item->video_id }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endforeach --}}
    <div class="widget">
        <div class="news">
            <div class="news-heading">
                <h2>Popular & Recent News</h2>
            </div>

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab"
                        aria-controls="pills-home" aria-selected="true">Recent News</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Popular News</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    @foreach($global_recent_news_data as $item)
                    @if($loop->iteration > 5)
                        @break;
                    @endif
                    <div class="news-item">
                        <div class="left">
                            <img src="{{ asset('uploads/'.$item->post_photo) }}" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success">{{ $item->rAllCategory->sub_category }}</span>
                            </div>
                            <h2><a href="{{ route('news_detail',$item->id) }}">{{ $item->post_title }}</a></h2>
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
    
                            @endphp --}}
                            @php
                            $ts = strtotime($item->updated_at);
                            $year = date('Y',$ts);
                            $month = date('m',$ts);
                            $day = date('d',$ts);
                            $date = Bsdate::eng_to_nep($year,$month, $day);
                            echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

                           @endphp
                    
                           
                                    {{-- <a href=""> {{  $updated_date }}</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                 
                 
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    @foreach($global_popular_news_data as $item)
                    @if($loop->iteration > 5)
                        @break;
                    @endif
                    <div class="news-item">
                        <div class="left">
                            <img src="{{ asset('uploads/'.$item->post_photo) }}" alt="">
                        </div>
                        <div class="right">
                            <div class="category">
                                <span class="badge bg-success">{{ $item->rAllCategory->category_name }}</span>
                            </div>
                            <h2><a href="{{ route('news_detail',$item->id) }}">{{ $item->post_title }}</a></h2>
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
                                    @php
                                    $ts = strtotime($item->updated_at);
                                    $year = date('Y',$ts);
                                    $month = date('m',$ts);
                                    $day = date('d',$ts);
                                    $date = Bsdate::eng_to_nep($year,$month, $day);
                                    echo($date['year'].'-'.$date['nmonth'].'-'.$date['date']); 

                                   @endphp
                            
                                    {{-- @php
                                        $ts = strtotime($item->updated_at);
                                        $updated_date= date('d F Y',$ts);
        
                                @endphp
                               
                                        <a href=""> {{  $updated_date }}</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  
      
                </div>
            </div>
        </div>
    </div>
    {{-- online poll  --}}
    {{-- <div class="widget">
        <div class="poll-heading">
            <h2>Online Poll</h2>
        </div>
        <div class="poll">
            <div class="question">
                Do you think that Apple products will be able to survive in the next 20 years?
            </div>
            <div class="answer-option">
                <form action="" method="post">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poll"
                            id="poll_id_1">
                        <label class="form-check-label" for="poll_id_1">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poll"
                            id="poll_id_2">
                        <label class="form-check-label" for="poll_id_2">No</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poll"
                            id="poll_id_3">
                        <label class="form-check-label" for="poll_id_3">No Comment</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="poll-result.html" class="btn btn-primary old">Old Result</a>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="widget">
        @foreach($global_sidebar_bottom_ad as $row)
        <div class="ad-sidebar">
            @if($row->sidebar_ad_url == '')
           <img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt="">
            @else
            <a href="{{ $row->sidebar_ad_url }}" target="_blank"><img src="{{ asset('uploads/'.$row->sidebar_ad) }}" alt=""></a>
@endif
        </div>
        @endforeach
    </div>


   

</div>