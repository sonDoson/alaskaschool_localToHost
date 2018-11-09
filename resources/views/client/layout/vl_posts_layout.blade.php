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
    <link href="{{ asset('css/client/footer/footer.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/header/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/header/banner_01.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/content/Introduce.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/function/images_slider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/client/header/banner-01-css.css') }}" rel="stylesheet" />
    <!-- JaveScript -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

</head>
<body>
    @include('client.nav_and_footer.nav')
    @include('client.nav_and_footer.cover_banner')
    <div id="container" style="min-height: 500px;margin-top: 30px; display: grid; grid-template-columns: 300px auto; grid-column-gap: 20px">
        @include('client.nav_and_footer.nav_left_side')
        @yield('content')
    </div>
    <div>
        @include('client.content.images_slider')
    </div>
    <div class="content">
        @include('client.content.new_elements')
    </div>
    <div style="margin-top: 30px;">
        @include('client.nav_and_footer.footer')
    </div>
    @include('client.content.facebook_video_function')
    <script src="{{ asset('js/function/image_slider.js') }}"></script>
    <script src="{{asset('js/banner/skel.min.js')}}"></script>
    <script src="{{asset('js/banner/main.js')}}"></script>
    <script src="{{asset('js/banner/util.js')}}"></script>
</body>
</html>