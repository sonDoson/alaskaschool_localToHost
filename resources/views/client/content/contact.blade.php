@extends('client.layout.contact_layout')
@section('content')
    <div style="display: grid; grid-template-columns: auto 300px;grid-column-gap: 20px;">
    <div class="font-resize" style="width: 100%;display: grid; grid-template-rows: auto 250px; grid-row-gap: 20px">
        <div>
        {!! $contact[$lang[1]] !!}
        </div>
        <div style="bottom: 0;display:block;width: 600px; height: 100%; margin: 0 auto;">
        <iframe {!! $contact['map'] !!} width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    </div>
@stop