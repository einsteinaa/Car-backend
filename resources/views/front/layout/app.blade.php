<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>        
		
        <link rel="icon" type="image/png" href="uploads/favicon.png">

 @include('front.layout.styles')
        
 @include('front.layout.scripts')


        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6212352ed76fda0a"></script>        
        
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-84213520-6');
        </script>

    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li class="today-text">Today: January 20, 2022</li>
                            <li class="email-text">contact@arefindev.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="right">
                            {{-- <li class="menu"><a href="faq.html">FAQ</a></li> --}}
                            @if($global_pages_data->faq_status == 'Show')
                            <li class="menu"><a href="{{ route('faq') }}">{{ $global_pages_data->faq_title }}</a></li>
                       @endif
                            @if($global_pages_data->about_status == 'Show')
                                 <li class="menu"><a href="{{ route('about') }}">{{ $global_pages_data->about_title }}</a></li>
                            @endif
             
                            @if($global_pages_data->contact_status == 'Show')
                            <li class="menu"><a href="{{ route('contact') }}">{{ $global_pages_data->contact_title }}</a></li>
                       @endif
                            @if($global_pages_data->login_status == 'Show')
                            <li class="menu"><a href="{{ route('login') }}">{{ $global_pages_data->login_title }}</a></li>
                       @endif
                            
                            <li>
                                <div class="language-switch">
                                    <select name="">
                                        <option value="">English</option>
                                        <option value="">Hindi</option>
                                        <option value="">Arabic</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="heading-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="uploads/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        @if ($global_top_ad_data->top_ad_status == 'Show')
                        <div class="ad-section-1">
                            @if ($global_top_ad_data->top_ad_url == '')
                            <img src="{{ asset('uploads/'.$global_top_ad_data->top_ad) }}" alt="">

                               @else 
                            <a href="{{  $global_top_ad_data->top_ad_url }}" target="_black"><img src="{{ asset('uploads/'.$global_top_ad_data->top_ad) }}" alt=""></a>

                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    
@include('front.layout.nav')

        
   @yield('main_content')
        
        

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">About Us</h2>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Useful Links</h2>
                            <ul class="useful-links">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                @if ($global_pages_data->terms_status == 'Show')
                                <li><a href="{{ route('terms') }}">{{ $global_pages_data->terms_title }}</a></li>
                                @endif
                                @if ($global_pages_data->privacy_status == 'Show')
                                <li><a href="{{ route('privacy') }}">{{ $global_pages_data->privacy_title }}</a></li>
                                @endif
                              {{-- <li> {{ $global_pages_data->desclaimar_title }}</li> --}}
                                @if ($global_pages_data->desclaimar_status == 'Show')
                                <li><a href="{{ route('disclaimer') }}">{{ $global_pages_data->desclaimar_title }}</a></li>
                                @endif
                              
                                @if($global_pages_data->contact_status == 'Show')
                                <li><a href="{{ route('contact') }}">{{ $global_pages_data->contact_title }}</a></li>
                           @endif
                               
                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Contact</h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right">
                                    34 Antiger Lane,<br>
                                    PK Lane, USA, 12937
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="right">
                                    contact@arefindev.com
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="right">
                                    122-222-1212
                                </div>
                            </div>
                            <ul class="social">
                                @foreach($global_social_item_data as $item)
                                <li><a href="{{ $item->url }}" target="_blank"><i class="{{ $item->icon }}"></i></a></li>


                                @endforeach
                               
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="item">
                            <h2 class="heading">Newsletter</h2>
                            <p>
                                In order to get the latest news and other great items, please subscribe us here: 
                            </p>
                            <form action="{{ route('subscribe') }}" method="post" class="form_subscribe_ajax">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" autocomplete="false">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Subscribe Now">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            Copyright 2022, ArefinDev. All Rights Reserved.
        </div>
     
        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>
		
        @include('front.layout.scripts_footer')

        <script>
            (function($){
                $(".form_subscribe_ajax").on('submit',function(e){
                    e.preventDefault();
                    $('#loader').show();
                    var form = this;
                    $.ajax({
                        url:$(form).attr('action'),
                        method:$(form).attr('method'),
                        data:new FormData(form),
                        processData:false,
                        dataType:'json',
                        contentType:false,
                        beforeSend:function(){
                            $(form).find('span.error-text').text('')
                        },
                        success:function(data){
                            $('#loader').hide();
                            if(data.code == 0)
                            {
                                $.each(data.error_message, function(prefix,val){
                                    $(form).find('span.'+prefix+'_error').text(val[0])
                                });
                            }
                            else if(data.code == 1)
                            {
                                $(form)[0].reset();
                                iziToast.success({
                                    title:'',
                                    position:'topRight',
                                    message:data.success_message
                                })
                            }
               
                        }
                    })
                })
            })(jQuery);
        
        </script>
        <div id='loader'></div>


        @if($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position: 'topRight',
                    message: '{{ $error }}',
                })
            </script>
        @endforeach
    @endif

    @if (session()->get('error'))
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('error') }}',
            });
        </script>
    @endif

        @if (session()->get('success'))
        <script>
            iziToast.success({
                title: '',
                position: 'topRight',
                message: '{{ session()->get('success') }}',
            });
        </script>
    @endif
		
   </body>
</html>