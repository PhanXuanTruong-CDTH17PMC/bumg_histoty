@extends('user.layout.user-layout')
@section('title')
    Phương tiện
@endsection 
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"><b> Phương Tiện</b></a>
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
                       @if (count($phuongtien )>0)
                        <tr style="background-color: #CC00FF; Color:white">
                                <th style="Color:white">ID</th>
                                <th style="Color:white">Nhãn hiệu</th>      
                                <th style="Color:white">Màu sắc</th>   
                                <th style="Color:white">Biển số</th>
                                <th style="Color:white">Khu vực</th>
                                <th style="Color:white">Loại phương tiện</th>                   
                        </tr>
                            @foreach ($phuongtien as $phuong_tien )
                                    <tr>
                                        <th style="Color:black">{{$phuong_tien-> phuongtien_id}}</th>
                                        <th style="Color:black">{{$phuong_tien-> nhan_hieu}}</th>
                                        <th style="Color:black">{{$phuong_tien-> mau_sac}}</th>
                                        <th style="Color:black">{{$phuong_tien-> bien_so}}</th>
                                        <th style="Color:black">{{$phuong_tien-> khu_vuc}}</th>
                                        <th style="Color:black">{{$phuong_tien-> tenphuongtien}}</th>
                                    </tr>                              
                            @endforeach 
                        @else 
                            <h3 style = "text-align: center; color:red"> <i>Không có dữ liệu để hiển thị.</i></h3> 
                        @endif
                    </thead>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>   
@endsection