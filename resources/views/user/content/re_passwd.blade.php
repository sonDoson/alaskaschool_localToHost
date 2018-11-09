<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Alaskaschool</title>
    <!-- Fonts -->
    <link href="{{asset('css/font_awesome/fontawesome-free-5.3.1-web')}}/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/resetCss.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/user/Login.css') }}" rel="stylesheet" />
    <!-- JaveScript -->

</head>
<body
    @if ($errors->any())
        <div id="errors">
            <ul>
                @foreach($errors->all(':message') as $value)
                    <li>{{ $value }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="login-wrap" style="position: relative;">
        <div class="logo-wrap">
            <img class="logo-image" src="{{ asset('uploads/logo/logocolor.png') }}" width="100%" height="auto" alt="Alaska school">
        </div>
        <form class="login-form" method="POST" action="">
            {!! csrf_field() !!}
            <input type="text" name="email" placeholder="Email..." />
            <button><h4>Gửi <i class="fas fa-coffee" style="color:#f99d1c"></i></h4></button>
        </form>       
    </div>

</body>
</html>