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