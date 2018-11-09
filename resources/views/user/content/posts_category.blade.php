@extends('User.layout.master_user_layout')
@section('content')

@if ($errors->any())
    <div id="errors">
        <ul>
            @foreach($errors->all(':message') as $value)
                <li>{{ $value }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!---->
<h2 id="title" >Danh Mục</h2>

<div class="wrap-body">
    <div>
    <div class="wrap-inline-block">
    <div class="box form">
        <h3 class="box_title" >Thêm Danh Mục</h3>
        <form method="POST" action="">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input class="input-style" type="text" name="name[]" placeholder="Tên tiếng Anh" required! /><br />
            <input class="input-style" type="text" name="name[]" placeholder="Tên tiếng Việt" required! /><br />
            <button class="btn btn-add btn-submit">Thêm <i class="fas fa-plus"></i></button>
        </form>
    </div>
    </div>
    </div>

    <div>
    <div class="wrap-inline-block">
    <div class="box" style="min-width:500px">
        <h3 class="box_title" >Danh Sách</h3>
        @foreach($data_content as $key => $value)
            <div class="list-element">
                <div class="wrap-ele">
                    <div class="ele-id"><h3>{{ $key }}</h3>
                    </div>
                    <div class="ele-infor">
                        <div class="ele-top">
                            <div class="ele-top-name" style="font-size: 80%;">
                                <div><h4>{{ $value['name_en'] }}</h4>
                                </div>
                                <div><h4>{{ $value['name_vn'] }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="ele-bottom">
                            
                            <a class="btn-anchor" href="google.com">Bài viết: 155 </a>
                            <p class="time">{{ $value['created_at'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="btn-list-wrap">
                    <button class="btn-list edit openPop" value="{{ $key }}"><i class="fas fa-pen"></i></button>
                    <button class="btn-list delete" value="{{ $key }}"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    </div>
</div>

<div class="popup_wrap">

</div>

<script src="{{ asset('js/userjs/popup.js') }}" ></script>
<script src="{{ asset('js/userjs/delete.js') }}" ></script>
<script>
    $().ready(function(){
        setTimeout(function() 
        {
            if($('#errors').is(':hover') === true){
                $('#errors').mouseleave(function(){
                    $('#errors').fadeOut(300);
                });
            }   else    {
                $('#errors').fadeOut(300);
            }
        }, 3000);
    });
</script>

@stop