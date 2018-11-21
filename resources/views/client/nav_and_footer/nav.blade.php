<header>
    <div id="mobile-nav" style="z-index: 10;width: 100%; height: 40px; background-color: #a6196f; position: fixed;" >
        <div id="mobile-container" style="width: 90%; height: 100%; display: table; margin: 0 auto;">
            <div style="display:inline-block" >
            <form method="GET" action="/search">
              <input id="search-box" type="text" name="search" placeholder="Search...">
            </form>
            </div>
            <a href="/"><div class="logo-mobile" style="height: 40px;position:absolute;
                top:0;left: 50%; margin-left: -90px; background-position: center;background-repeat: no-repeat;
                background-size: 180px auto;
                background-image:url({{ asset('uploads/logo/logo_longtext.png') }});"></div>
            </a>
            <div style="display:inline-block;width: 40px; height: auto; float: right;">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i style="margin-left: 5px; margin-top: 7px; color: #fff; font-size: 0.9em" class="fas fa-bars"></i></span>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            @for($i = 1; $i <= 5; $i++)
                <a style="width: 250px;" class="{{ 'nav_' . $i }}" href="{{ '/cat/' . $i }}">{{ $category[$i][$lang[0]] }}</a>
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
                    <a class="{{ 'nav_' . $i }}" href="{{ '/cat/' . $i }}">{{ $category[$i][$lang[0]] }}</a>
                @endfor
                <a class="nav_contact"  href="{{ '/contact' }}">{{ $contact[$lang[0]] }}</a>
                    
                <form id="nav-search" method="GET" action="/search" style="display: inline-block;">
                    <input type="text" name="search" />
                </form>
            </nav>
            <nav id="nav-bottom">
                @for($i = 1; $i <= 3; $i++)
                <a class="{{ 'nav_' . $i }}" href="{{ '/cat/' . $i }}"><h4>{{ $category[$i][$lang[0]] }}</h4></a>
                @endfor
            </nav>
        </div>
    </div>
</header>
<script>
    var str = document.URL;
    str_s = str.split("cat/");
    if(str_s[1] == null){
        str_s = str.split("/");
        $('.nav_' + str_s[3]).css('color', '#f99d1b');
    }   else    {
        str_s_child = str_s[1].split("/");
        $('.nav_' + str_s_child[0]).css('color', '#f99d1b');
    }

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>