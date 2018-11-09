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
<body>

    <div class="login-wrap">
        <div class="logo-wrap">
            <img class="logo-image" src="{{ asset('uploads/logo/logocolor.png') }}" width="100%" height="auto" alt="Alaska school">
        </div>
        <form class="login-form" method="POST" action="">
            {!! csrf_field() !!}
            <input type="text" name="name" placeholder="Tên đăng nhập..." >
            <input type="password" name="password" placeholder="Mật khẩu..." >
            <button><h4>Đăng nhập <i class="fas fa-key" style="color:#f99d1c"></i></h4></button>
        </form>
    </div>

</body>
</html>