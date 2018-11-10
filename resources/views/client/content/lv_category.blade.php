@extends('client.layout.master_client_layout')
@section('content')
    <div class="big-news" style="margin-top:0;grid-template-columns: 300px 300px 300px;grid-row-gap: 30px;">
        @if(!empty($section_0[key($section_0)]))
        @foreach($section_0[key($section_0)] as $key => $value)
            <a style="color: #000" href="{!! '/cat/' . $value['id_category']. '/' . $value['id'] !!}">
            <div class="big-news-item">
                <div class="big-news-item-image" style="background-image:url({{ $value['images'][0] }})"></div>
                <div class="big-news-item-content font-resize">
                    <b>{!! $value[$lang[0]] !!}</b>
                    <div  class="big-news-item-content-text" style="">
                        <p>{!! $value[$lang[1]] !!}</p>
                    </div>
                </div>
            </div>
            </a>
        @endforeach
        @endif
    </div>
@stop