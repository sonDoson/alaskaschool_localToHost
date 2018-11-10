<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="head-token" content="{{ csrf_token() }}">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resetCss.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/grid_layout/grid_layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/nav/nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/btn/btn_user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/container/' . str_replace('Data', '',$name_class) . '.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/container/WebUserErrors.css') }}">
    @if(isset($layout))
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/container/' . $layout ) }}">
    @endif
    @if(isset($function))
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_site/function/' . $function ) }}">
    @endif
    <!--AWESOME FONT-->
    <!--link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous"-->
    <link href="{{asset('css/font_awesome/fontawesome-free-5.3.1-web')}}/css/all.css" rel="stylesheet"> <!--load all styles -->
    <!--SCRIPT JQUERY-->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" ></script>

</head>
<body>
    @include('user.nav_and_footer.nav')
    <div id="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/userjs/nav_action.js') }}"></script>
</body>
</html>
