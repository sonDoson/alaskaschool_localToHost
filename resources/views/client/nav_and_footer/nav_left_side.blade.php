<div style="width: 300px; height: 100%; border-right: 1px solid lightgrey;">
    <ul class="font-resize"style="margin-left: 30px;">
        <li><a href="/cat/1" >{{ $category[1][$lang[0]] }}</a>
        <ul style="padding-left:30px">
            @foreach($category_item[1] as $key => $value)
            <li><a href="{{ '/cat/' . $value[key($value)]['id_category'] . '/' . $value[key($value)]['id']}}" >{{ $value[key($value)][$lang[0]] }}</a></li>
            @endforeach
        </ul>
        </li>
        <br />
        <li><a href="/cat/2" >{{ $category[2][$lang[0]] }}</a></li>
        <ul style="padding-left:30px">
            @foreach($category_item[2] as $key => $value)
            <li><a href="{{ '/cat/' . $value[key($value)]['id_category'] . '/' . $value[key($value)]['id']}}" >{{ $value[key($value)][$lang[0]] }}</a></li>
            @endforeach
        </ul>
        <br />
        <li><a href="/cat/3" >{{ $category[3][$lang[0]] }}</a></li>
        <ul style="padding-left:30px">
            @foreach($category_item[3] as $key => $value)
            <li><a href="{{ '/cat/' . $value[key($value)]['id_category'] . '/' . $value[key($value)]['id']}}" >{{ $value[key($value)][$lang[0]] }}</a></li>
            @endforeach
        </ul>
        <br />
        <li><a href="/cat/4" >{{ $category[4][$lang[0]] }}</a></li>
        <ul style="padding-left:30px">
            @foreach($category_item[4] as $key => $value)
            <li><a href="{{ '/cat/' . $value[key($value)]['id_category'] . '/' . $value[key($value)]['id']}}" >{{ $value[key($value)][$lang[0]] }}</a></li>
            @endforeach
        </ul>
        <br />
        <li><a href="/cat/5" >{{ $category[5][$lang[0]] }}</a></li>
        <br />
        <li><a href="{{ '/contact' }}" >{{ $contact[$lang[0]] }}</a></li>
                    
    </ul>
</div>