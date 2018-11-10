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
    <link href="{{ asset('css/client/content/Introduce.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/function/introduce_slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/function/banner.css') }}" rel="stylesheet" />
    <!-- JaveScript -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</head>
<body>
    @include('client.nav_and_footer.nav')
    <div id="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/function/introduce_slider.js') }}"></script>
    <script src="{{asset('js/banner/skel.min.js')}}"></script>
    <script src="{{asset('js/banner/main.js')}}"></script>
    <script src="{{asset('js/banner/util.js')}}"></script>
</body>
</html>