@extends('user.layout.master_user_layout')
@section('content')

<div id="div-welcome" >
    <h1>Welcome back, Alaska's admin!</h1>
</div>

<!--javascript-->

<script>
    $().ready(function(){
        $('#div-welcome').css('opacity','1');
    });
</script>
@stop
