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

<h2 id="title" >Danh Sách</h2>

<div class="box list" >
    <form class="form" method="POST" action="">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input class="input-style" name="input" type="text" placeholder="search.." />
        <select class="input-style select" name="category" >
            <option value="0">Lọc Danh Mục</option>
            @foreach($form_option as $key => $value)
                <option value="{{ $key }}">{{ $value['name_vn'] }}</option>
            @endforeach()
        </select>
    </form>
    <table class="table">
    <tbody class="header">
        <tr>
            <th style="width: 80px;"></th>
            <th class="th-size" id="th_name_en" ><div class="btn-table" >name en<div style="display: inline-block;" id="th_name_en_arrow"></div></div></th>
            <th class="th-size" id="th_name_vn" ><div class="btn-table">name vn<div style="display: inline-block;" id="th_name_vn_arrow"></div></div></th>
            <th class="th-size" ><div class="btn-table">category<div style="display: inline-block;" id="th_category_arrow"></div></div></th>
            <th id="th_created_at"><div class="btn-table">time date<div style="display: inline-block;" id="th_created_at_arrow"></div></div></th>
            <th class="th-btn" ></th>
        </tr>
    </tbody>
    <tbody id="tr_wrap">
        @foreach($data_content as $key => $value)
        <tr class="something">
            <td class="table-id">&nbsp;&nbsp;{{ $value['id'] }}</td>
            <td class="table-name">&nbsp;{{ $value['name_en'] }}</td>
            <td class="table-name">&nbsp;{{ $value['name_vn'] }}</td>
            <td class="table-name">&nbsp;{{ $value['category'] }}</td>
            <td class="table-time">{{ $value['time'] }}</td>
            <td class="table-btn">
                <div class="btn-list-wrap">
                    <a href="/user/posts/edit?table_posts=posts_posts&id={{ $value['id'] }}" ><button class="btn-list edit"><i class="fas fa-pen"></i></button></a>
                    <a class="btn-delete-href" href="/user/delete?table_posts=posts_posts&id_posts={{ $value['id'] }}" onClick="return false;" ><button class="btn-list delete"><i class="fas fa-trash-alt"></i></button></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    <!--button class="btn" id="load_more" style="margin-top:10px;" >Tải Thêm&nbsp;<i class="fas fa-caret-down"></i></button-->
    
    <div class="page-mode" value="{{ $total_posts_n_holder_page }}">
        <div class="page-mode-btn-wrap" style="text-align: center;">
        <button style="display:none;" id="btn-backward"><i class="fas fa-backward"></i></button>
        <button style="display:inline-block;" id="btn-forward"><i class="fas fa-forward"></i></button>
        </div>
    </div>
</div>

<script src="{{ asset('js\userjs\table_function.js') }}" ></script>
<script src="{{ asset('js\userjs\table.js') }}" ></script>
<script src="{{ asset('js\userjs\table_function_page_mode.js') }}" ></script>
<script>
    var db_table = "posts_posts";
</script>
<script>
    $().ready(function(){
        $('.btn-list-wrap').on('dblclick', '.btn-delete-href', function(){
            var href = $(this).attr('href');
            window.location.href = href;
        });
    });
</script>
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