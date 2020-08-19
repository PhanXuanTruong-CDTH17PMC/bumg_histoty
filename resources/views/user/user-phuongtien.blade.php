@extends('user.layout.user-layout')
@section('title')
    Phương tiện
<<<<<<< Updated upstream
@endsection
@section('css')

    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('js')

    
@endsection
@section('main-content')
<!-- start page title -->
=======
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
>>>>>>> Stashed changes
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
<<<<<<< Updated upstream
                        <tr style="background-color: #6c757d;; color:white">
                            <th>ID</th>
						    <th>Nhãn hiệu</th>      
						    <th>Màu sắc</th>   
                            <th>Biển số</th>
                            <th>Khu vực</th>
                            <th>Loại phương tiện</th>                   
                       </tr>
                       @if (count($phuongtien )>0)
                            @foreach ($phuongtien as $phuong_tien )
                                    <tr>
                                        <th>{{$phuong_tien-> phuongtien_id}}</th>
                                        <th>{{$phuong_tien-> nhan_hieu}}</th>
                                        <th>{{$phuong_tien-> mau_sac}}</th>
                                        <th>{{$phuong_tien-> bien_so}}</th>
                                        <th>{{$phuong_tien-> khu_vuc}}</th>
                                        <th>{{$phuong_tien-> tenphuongtien}}</th>
                                        
                                    </tr>                              
                            @endforeach    
                        @else
                        @endif
                   

                    </thead>
                    
=======
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
>>>>>>> Stashed changes
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
<<<<<<< Updated upstream


<!-- Css cho trang -->
=======
</div>   
>>>>>>> Stashed changes
@endsection