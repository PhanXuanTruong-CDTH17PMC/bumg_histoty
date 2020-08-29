@extends('user.layout.user-layout')
@section('title')
    Phương tiện
@endsection 
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"><b> Thành Viên Gia Đinh</b></a>
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
                <table  class="table dt-responsive nowrap">
                    <thead>
                        @if (count($cudan )>0)
                        <tr style="background-color: #CC00FF; Color:white">
                                <th style="Color:white">ID</th>
                                <th style="Color:white">Họ tên</th>   
                                <th style="Color:white">SĐT</th>
                                <th style="Color:white">Email</th>
                                <th style="Color:white">CMND</th>
                                <th style="Color:white">Ngày Sinh</th>
                                <th style="Color:white">Quan hệ</th>                   
                        </tr>
                            @foreach ($cudan as $cu_dan )
                                    <tr>
                                        <th style="Color:black">{{$cu_dan->id}}</th>
                                        <th style="Color:black">{{$cu_dan-> ho_ten_cd}}</th>
                                        <th style="Color:black">{{$cu_dan-> CMND}}</th>
                                        <th style="Color:black">{{$cu_dan-> SDT}}</th>
                                        <th style="Color:black">{{$cu_dan-> email}}</th>
                                        <th style="Color:black">{{$cu_dan-> ng_sinh}}</th>
                                        <th style="Color:black">{{$cu_dan-> ten_quan_he}}</th>
                                    </tr>                              
                            @endforeach 
                        @else
                               <h3 style = "text-align: center; color:red"> <i>Không có dữ liệu để hiển thị.</i></h3>    
                        @endif
                    </thead>
                </table>
                {!! $cudan->links() !!}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>   
@endsection