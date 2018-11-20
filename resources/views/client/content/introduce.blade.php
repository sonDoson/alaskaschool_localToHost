<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Alaskaschool</title>
    <link rel="shortcut icon" href="{{ asset('/uploads/logo/icon/logo_icon.png')}}" />
    <!-- Fonts -->
    <link href="{{asset('css/font_awesome/fontawesome-free-5.3.1-web')}}/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/resetCss.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/header/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/footer/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/content/introduce.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/items/items.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/function/introduce_slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/function/banner.css') }}" rel="stylesheet" />
    <!-- JaveScript -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</head>
<body>
    <header>
        <div id="mobile-nav" style="z-index: 10;width: 100%; height: 40px; background-color: #a6196f; position: fixed;" >
            <div id="mobile-container" style="width: 90%; height: 100%; display: table; margin: 0 auto;">
                <div style="display:inline-block" >
                <form method="GET" action="/search">
                  <input id="search-box" type="text" name="search" placeholder="Search...">
                </form>
                </div>
                <div style="display:inline-block;width: 40px; height: auto; float: right;">
                    <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i style="margin-left: 5px; margin-top: 7px; color: #fff; font-size: 0.9em" class="fas fa-bars"></i></span>
                </div>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                @for($i = 1; $i <= 5; $i++)
                    <a style="width: 250px;" id="{{ 'nav_' . $i }}" href="{{ '/cat/' . $i }}">{{ $category[$i][$lang[0]] }}</a>
                @endfor
                <a style="width: 250px;" id="nav_contact"  href="{{ '/contact' }}">{{ $contact[$lang[0]] }}</a>
            </div>
        </div>
        <div class="container-nav" id="cover-left">
        </div>
        <div class="container-nav menu-wrap">
            <a href="/">
                <div class="logo" style="background-image:url({{ asset('uploads/logo/logo02.png') }});">
                </div>
            </a>
            <div class="nav-wrap font-resize">
                <nav id="nav-top">
                    @for($i = 4; $i <= 5; $i++)
                        <a id="{{ 'nav_' . $i }}" href="{{ '/cat/' . $i }}">{{ $category[$i][$lang[0]] }}</a>
                    @endfor
                    <a id="nav_contact"  href="{{ '/contact' }}">{{ $contact[$lang[0]] }}</a>
                        
                    <form id="nav-search" method="GET" action="/search" style="display: inline-block;">
                        <input type="text" name="search" />
                    </form>
                </nav>
                <nav id="nav-bottom">
                    @for($i = 1; $i <= 3; $i++)
                    <a id="{{ 'nav_' . $i }}" href="{{ '/cat/' . $i }}"><h4>{{ $category[$i][$lang[0]] }}</h4></a>
                    @endfor
                </nav>
            </div>
        </div>
    </header>
    <section class="banner full">
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) <= 4)
            @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
            <article>
            <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
            </a>
            </article>
            @endfor
            @else
            @for($i=0; $i < 4; $i++)
            <article>
            <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
            </a>
            </article>
            @endfor
            @endif
            @endif
    </section>
    <!--div id="header-cover" style="background-image:url({{ asset('uploads/cover/cover_introduce.png') }})">
    </div-->
    <div class="content">
        <!--SECTION 0-->
        
        <div class="section" id="section-0">
            <div class="title">
                <h2 style="display: inline-block;">{{ $category[1][$lang[0]] }}</h2>
                <p style="display: inline-block"><a href="/cat/1">| xem tất cả</a></p><!--gioi thieu chung-->
            </div>
            <div id="introduce">
                <div id="intro-content" style="overflow: hidden">
                    
                    <div id="intro-content-video" style="overflow: hidden; background-color: #ffffff !important;">
                          <!-- Your embedded video player code -->
                          <div class="fb-video" data-href="{{ $link }}" data-show-text="false">
                          </div>
                    </div>
                    
                    <div class="font-resize" id="intro-content-text">
                        @if(!empty($section_0[key($section_0)][0]))
                        <a style="color: #000" href="{!! '/cat/' . $section_0[key($section_0)][0]['id_category'] . '/' . $section_0[key($section_0)][0]['id'] !!}">
                        @endif
                            @if(!empty($section_0[key($section_0)][0]))
                            <h2>{{ $section_0[key($section_0)][0][$lang[0]] }}</h2>
                            <br />
                            {!! $section_0[key($section_0)][0][$lang[1]] !!}
                            @endif
                        </a>
                    </div>
                </div>
                <div id="intro-extention" class="font-resize">
                    @if(!empty($section_0[key($section_0)]))
                    @for($i=1; $i < sizeof($section_0[key($section_0)]); $i++)
                        <a href="{!! '/cat/' . $section_0[key($section_0)][$i]['id_category'] . '/' . $section_0[key($section_0)][$i]['id'] !!}">
                            <li style="list-style-type: none;">{!! $section_0[key($section_0)][$i][$lang[0]] !!}</li>
                        </a>
                    @endfor
                    @endif
                </div>
            </div>
        </div>
        
        <!--SECTION 1-->
        
        <div class="section" id="section-1">
            <div class="title">
                <h2 style="display: inline-block;">{{ $category[4][$lang[0]] }}</h2>
                <p style="display: inline-block"><a href="/cat/4">| xem tất cả</a></p>
            </div>
            <div class="short-news">
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) > 4 && sizeof($section_1[key($section_1)]) < 7)
            @for($i=3; $i < sizeof($section_1[key($section_1)]); $i++)
                <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <div class="short-news-item">
                    <div class="short-news-item-timetag">
                        <div class="wrap-item-timetag">
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                        </div>
                    </div>
                    <div class="short-news-item-content font-resize">
                        <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                        <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                    </div>
                </div>
                </a>
            @endfor
            @endif
            @if(sizeof($section_1[key($section_1)]) >= 7)
            @for($i=3; $i < 7; $i++)
                <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <div class="short-news-item">
                    <div class="short-news-item-timetag">
                        <div class="wrap-item-timetag">
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                            <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                        </div>
                    </div>
                    <div class="short-news-item-content font-resize">
                        <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                        <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                    </div>
                </div>
                </a>
            @endfor
            @endif
            @endif
 
            </div>
            
            <div class="big-news">
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) <= 4)
            @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
                <a style="color: #000" href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <div class="big-news-item">
                    <div class="big-news-item-image" style="background-image:url({{ $section_1[key($section_1)][$i]['images'][0] }})"></div>
                    <div class="big-news-item-content font-resize">
                        <b>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</b>
                        <div  class="big-news-item-content-text" style="">
                            <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                        </div>
                        <br />
                        <p>{!! $section_1[key($section_1)][$i]['created_at']['string'] !!}</p>
                    </div>
                </div>
                </a>
            @endfor
            @else
            @for($i=0; $i < 4; $i++)
                <a style="color: #000" href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <div class="big-news-item">
                    <div class="big-news-item-image" style="background-image:url({{ $section_1[key($section_1)][$i]['images'][0] }})"></div>
                    <div class="big-news-item-content font-resize">
                        <p><b>Lorem Ipsum is simply</b><br />dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <br />
                        <p>{!! $section_1[key($section_1)][$i]['created_at']['string'] !!}</p>
                    </div>
                </div>
                </a>
            @endfor
            @endif
            @endif
            </div>
        </div>
        
        <!--SECTION 2-->
        
        <div id="back-section-2">
            <div class="smoke-slider smoke-slider-left">
            </div>
            <div class="smoke-slider smoke-slider-right">
            </div>
            <div class="btn-slider btn-slider-left">
            </div>
            <div class="btn-slider btn-slider-right">
            </div>
            <div class="wrap-section-2">
                <div class="title">
                    <h2 style="display: inline-block;">ALASKA ACADEMY HIGHLIGHT</h2>
                    <p style="display: inline-block"><a href="/hline">| xem tất cả</a></p>
                </div>
            </div>
            @if(!empty($section_2))
            <div class="wrap-section-2-slider">
            <div class="section-2-slider" style="width: {{ sizeof($section_2) * 240}}px !important;grid-template-columns: repeat({{ sizeof($section_2) }}, 1fr);" value="{{ sizeof($section_2) }}">
                
                @foreach($section_2 as $key => $value)
                <a href="{{ '/cat/' . $value['id_category'] . '/' . $value['id'] }}">
                <div class="section-2-slider-item" style="color: #000;">
                    <div class="section-2-slider-image" style="overflow: hidden;">
                        <img src="{{ $value['images'][0] }}" width="auto" height="100%" />
                    </div>
                    <div class="section-2-slider-text font-resize">
                        <div class="section-2-slider-text-top">
                            <b>{{ $value[$lang[0]] }}</b>
                                {!! $value[$lang[1]] !!}
                        </div>
                        <div class="section-2-slider-text-extend">
                            <p>{!! $value['created_at']['string'] !!}</p>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
            </div>
            @endif
        </div>
    </div>

    <footer>
        <div class="section" id="footer-grid">
            <div class="footer-left">
                <div id="footer-left-img">
                    <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="auto" height="100%" />
                </div>
                <div id="footer-left-form">
                    <form method="POST" action="/send_mail">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input name="email" type="text" placeholder=" * Email..." required /><br />
                        <input name="name" type="text" placeholder=" * Họ và tên..." required />
                        <input name="number" type="text" placeholder=" * Số điện thoại..." required />
                        <textarea name="content"></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
                <div id="footer-left-conect">
                    <div><p>Conect with us</p></div>
                    <div>
                        @foreach($contact['link'] as $key => $value)
                            @if($value['link'] !== '')
                            <a href="{{ $value['link'] }}" style="color: #ffffff"><i style="font-size: 45px; margin-right: 10px" class="{{ $value['icon'] }}"></i></a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/function/introduce_slider.js') }}"></script>
    <script>
        var str = document.URL;
        str_s = str.split("cat/");
        if(str_s[1] == null){
            str_s = str.split("/");
            $('#nav_' + str_s[3]).css('color', '#f99d1b');
        }   else    {
            $('#nav_' + str_s[1]).css('color', '#f99d1b');
        }
        //str = str[1].split("/");
        //$("#li_" + str[0]).css('background-color', 'grey');
        //$("#li_1_" + str[1]).css('background-color', 'grey');
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <script src="{{asset('js/banner/skel.min.js')}}"></script>
    <script src="{{asset('js/banner/main.js')}}"></script>
    <script src="{{asset('js/banner/util.js')}}"></script>
      <!-- Load Facebook SDK for JavaScript -->
    @include('client.content.facebook_video_function')
</body>
</html>
