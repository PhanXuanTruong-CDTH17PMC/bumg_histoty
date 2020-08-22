@extends('user.layout.user-layout')
@section('title')
    Thông báo
@endsection
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"><b> Thông Báo</b> </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <span class="no-icon"><i class="nc-icon nc-circle-09"></i> Account: <b>{{$auth->name}}</b></span>
                    </a>
                </li>
                </ul>
            </div>
        </div>
</nav>
<div class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                       @if (count($thongbao )>0)
                            @foreach ($thongbao as $thong_bao )
                            <a href ="/thong-bao/{{$thong_bao->id}}"><div class ="form-group col-4" style = "background-color:#CC00FF; height: 70px; color    : white">
                            <u><b>Thông Báo: TB{{$thong_bao->id }}</b></u><br/>
                             {{$thong_bao->tieu_de_tb}}<br/>
                            <i> Ngày: {{date('H:i d-m-yyyy', strtotime($thong_bao->created_at))}}</i>
                            </div></a>
                                                           
                            @endforeach 
                        @else 
                            <h3 style = "text-align: center; color:red"> <i>Không có thông báo nào...</i></h3> 
                        @endif
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>    
@endsection