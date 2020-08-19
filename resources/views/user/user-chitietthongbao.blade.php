@extends('user.layout.user-layout')
@section('title')
    Thông báo
@endsection
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"> <i class="nc-icon nc-email-859"></i> <b>Nội Dung Thông Báo</b> </a>
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
    <div class="col-2>
        <div class="card">
            <div class="card-body">
            <form>
                <legend>Thông Báo: TB{{$thongbao->id }}</legend>
                  <div class ="form-group">Tiêu đề: <input type = "text" style="border:1px solid gray;border-radius:10px;width:100%"class ="font-controll" disabled value ="{{$thongbao->tieu_de_tb}}"></div>  
                  <div class ="form-group">Ngày: <input type = "text" style="border:1px solid gray;border-radius:10px;width:100%"class ="font-controll" disabled value ="{{$thongbao->created_at}}"></div>     
                  <div class ="form-group">Nội dung:
                  
                <fieldset style="border:1px solid gray;border-radius:10px;width:100%; pading:15px;"class ="font-controll">
                  <div class="container" ><br/>{!!(substr($thongbao->noi_dung_tb,0, )) !!}</div>
                </fieldset>
                <div>
            </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>    
@endsection