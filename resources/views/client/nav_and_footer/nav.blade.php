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
</script>