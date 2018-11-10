<nav>
    <div id="nav_header" style="width: 140px; height: 170px; margin: 0 auto;">
        <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="100%" height="auto" style="margin-top: 30px;" />
    </div>
    <div id="nav_u">
        <ul>
            <li><a href="{{ asset('/user/setting') }}">setting</a></li>
            <li><a href="{{ asset('/logout') }}">logout</a></li>
        </ul>
    </div>
    <div id="menu">
        <ul>
        @foreach($data_nav as $key_nav => $value_nav)
            @php
                $key = explode("-",$key_nav);
            @endphp
            <li class="list_lv0" id="{{ 'li_' . strtolower($key[1]) }}">
                <a class="anchor_lv0" >{{ $key[2] }}</a>
                <ul class="menu_lv1" id="{{ 'ul_' . $key[0] }}" >
                    @foreach($value_nav as $value_child_nav)
                        <li class="list_lv1" id="{{ 'li_1_' . strtolower($value_child_nav['value']) }}"><a class="anchor_lv1" href="{{ asset($value_child_nav['url']) }}" >
                            {{ $value_child_nav['value_child'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
    </div>
</nav>

<script>

</script>