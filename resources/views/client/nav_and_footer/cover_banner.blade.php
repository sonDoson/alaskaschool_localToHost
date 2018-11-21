<div class="cover-baner">
    <div class="banner-01" style="overflow: hidden">
        <section class="banner cover_01" style="" >
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) <= 4)
            @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
            <article>
            <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
            </a>
            </article>
            @endfor
            @else
            @for($i=0; $i < 4; $i++)
            <article>
            <a href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
                <img src="{{ $section_1[key($section_1)][$i]['images'][0] }}" alt="" width="100%" height="auto" />
            </a>
            </article>
            @endfor
            @endif
            @endif
        </section>
    </div>
    <div class="new_elements_first">
        <div class="short-news-top">
            @if(!empty($section_1[key($section_1)]))
            @if(sizeof($section_1[key($section_1)]) <= 4)
            @for($i=0; $i < sizeof($section_1[key($section_1)]); $i++)
            <a style="color: #000" href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
            <div class="short-news-item">
                <div class="short-news-item-timetag">
                    <div class="wrap-item-timetag">
                        <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                        <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                    </div>
                </div>
                <div class="short-news-item-content-wrap">
                <div class="short-news-item-content font-resize">
                    <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                    <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                </div>
                </div>
            </div>
            </a>
            @endfor
            @else
            @for($i=0; $i < 4; $i++)
            <a style="color: #000" href="{!! '/cat/' . $section_1[key($section_1)][$i]['id_category']. '/' . $section_1[key($section_1)][$i]['id'] !!}">
            <div class="short-news-item">
                <div class="short-news-item-timetag">
                    <div class="wrap-item-timetag">
                        <p>{!! $section_1[key($section_1)][$i]['created_at'][0] !!}</p>
                        <p>{!! $section_1[key($section_1)][$i]['created_at'][1] !!}</p>
                    </div>
                </div>
                <div class="short-news-item-content-wrap">
                <div class="short-news-item-content font-resize">
                    <h4>{!! $section_1[key($section_1)][$i][$lang[0]] !!}</h4>
                    <p>{!! $section_1[key($section_1)][$i][$lang[1]] !!}</p>
                </div>
                </div>
            </div>
            </a>
            @endfor
            @endif
            @endif
        </div>
    </div>
</div>

