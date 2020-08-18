@extends('user.layout.user-layout')
@section('title')
    Thông báo
@endsection
@section('main-content')
<!-- start page title -->
        
<div class="row">
 @if($thongbao)
<div class="row main">
  <div class="column left">
    <h2>Thông báo</h2></br>
    @if (count($thongbao)>0)
        @foreach ($thongbao as $thong_bao )
        <h4 ><a href="/thong-bao/{{$thong_bao->id}}">{{$thong_bao->tieu_de_tb}}</a></h4>       

            {{Form::hidden('_method','DELETE')}}                         
        @endforeach     
    @endif
  </div>
  <div class="column right">
    <h2 style="text-align:center">{{$thongbao2->tieu_de_tb}}</h2>
    </br>
        <div class="container" >{!!(substr($thongbao2->noi_dung_tb,0, )) !!}</div>
    </br>
  </div>
</div>
@else
<div style="color:red"><h2>Hiện chưa có thông báo nào</h2></div>
@endif
<!-- Css cho trang -->

@endsection