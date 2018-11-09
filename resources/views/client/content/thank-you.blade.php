<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Alaskaschool</title>
    <!-- Fonts -->
    <link href="{{asset('css/font_awesome/fontawesome-free-5.3.1-web')}}/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/resetCss.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/header/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/footer/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/content/Introduce.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 
    <!-- JaveScript -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</head>
<body>
    <header>
        <div id="cover-left">
        </div>
        <div class="menu-wrap">
            <a href="/">
                <div class="logo" style="background-image:url({{ asset('uploads/logo/logo02.png') }});">
                </div>
            </a>
            <div class="nav-wrap font-resize">
                <nav id="nav-top">
                    @for($i = 4; $i <= 5; $i++)
                        <a href="{{ '/cat/' . $i }}">{{ $category[$i][$lang[0]] }}</a>
                    @endfor
                    <a href="{{ '/contact' }}">{{ $contact[$lang[0]] }}</a>
                    
                    <form id="nav-search" method="GET" action="/search" style="display: inline-block;">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="text" name="search" />
                    </form>
                </nav>
                <nav id="nav-bottom">
                    @for($i = 1; $i <= 3; $i++)
                    <a href="{{ '/cat/' . $i }}"><h4>{{ $category[$i][$lang[0]] }}</h4></a>
                    @endfor
                </nav>
            </div>
        </div>
    </header>
    <div style="wdith: 100%; height: 50vh; padding-top: 20vh">
    <p style="font-size: 4em; font-family: 'Satisfy', cursive;text-align: center">Thank you! We will make contact with you soon!</p>
    </div>
    <footer style="">
        <div class="section" id="footer-grid" style="">
            <div class="footer-left">
                <div id="footer-left-img" style="">
                    <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="auto" height="100%" />
                </div>
                <div id="footer-left-form" style="">
                    <form method="POST" action="/send_mail" style="">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input name="email" type="text" placeholder=" * Email..." required /><br />
                        <input name="name" type="text" placeholder=" * Họ và tên..." required />
                        <input name="number" type="text" placeholder=" * Số điện thoại..." required />
                        <textarea name="content"></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
                <div id="footer-left-conect" style="">
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
    <script>
    setTimeout(function(){window.history.back();}, 10000);
    </script>
</body>
</html>