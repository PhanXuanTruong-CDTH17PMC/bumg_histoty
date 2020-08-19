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
                                   <div class ="form-group"><a href ="/thong-bao/{{$thong_bao->id}}" style="Color:black"><input type = "text" style="height:40px;border:1px solid gray;border-radius:15px 0 0 15px;width:50%; pading:15px;"class ="font-controll" disabled value ="{{$thong_bao->tieu_de_tb}}"><button  class ="font-controll"><i class="nc-icon nc-stre-right"></i></button></a></div>
                                                           
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