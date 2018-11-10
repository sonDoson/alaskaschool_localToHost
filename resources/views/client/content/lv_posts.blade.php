@extends('client.layout.vl_posts_layout')
@section('content')
    <div style="display: grid; grid-template-columns: auto 300px;grid-column-gap: 20px;">
    <div class="font-resize">
        <h1>{!! $section_0[$lang[0]] !!}</h1>
        <br />
        {!! $section_0[$lang[1]] !!}</p>
    </div>
    </div>
@stop