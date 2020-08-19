@extends('user.layout.user-layout')
@section('title')
<<<<<<< HEAD
    Thông báo
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
    Chi tiết hóa đơn
@endsection
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"><b> Chi Tiết Hóa Đơn</b></a>
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
                        <span class="no-icon"><i class="nc-icon nc-circle-09"></i>  Account: <b>{{$auth->name}}</b></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="content">
<div class="container-fluid">
>>>>>>> phan_truong
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
<<<<<<< HEAD
                        <tr style="background-color: #6c757d;; color:white">
							<th>Tên dịch vụ</th>   
                            <th>Phí dịch vụ</th>   
							<th>Số lượng</th>    
                            <th>Đơn vị</th>
							<th>Thành tiền</th>                     
                       </tr>
                       @if(count($cthoadon)>0)   
                            @foreach($cthoadon as $cthoa_don)
                                <tr>
                                    <th>{{$cthoa_don->ten_dv}}</th>
                                    <th>{{$cthoa_don->phi_dv}}</th>
                                    <th>{{$cthoa_don->so_luong}}</th>
                                    <th>{{$cthoa_don->don_vi}}</th>
                                    <th>{{$cthoa_don->thanh_tien}}</th>
                                </tr>
                            @endforeach
                        @endif
                        
                    </thead>
                    
                </table>
                </br>
                <div>Tổng tiền: <input type="text" style="border:1px solid gray;height:35px;border-radius:10px" value="   {{$hoadon->tong_tien}}"></div>
                </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>     


<!-- Css cho trang -->

=======
                       @if(count($cthoadon)>0)  
                            <tr style="background-color: #CC00FF">
                                <th style=" Color:white">Tên dịch vụ</th>   
                                <th style=" Color:white">Phí dịch vụ</th>   
                                <th style=" Color:white">Số lượng</th>    
                                <th style=" Color:white">Thành tiền</th>                     
                        </tr> 
                            @foreach($cthoadon as $cthoa_don)
                                <tr>
                                    <th style=" Color:black">{{$cthoa_don->ten_dv}}</th>
                                    <th style=" Color:black">{{number_format($cthoa_don->phi_dv, 0, ',', '.')}}</</th>
                                    <th style=" Color:black">{{$cthoa_don->so_luong}}</th>
                                    <th style=" Color:black">{{number_format($cthoa_don->thanh_tien, 0, ',', '.')}}</th>
                                </tr>
                            @endforeach
                        @else 
                            <h3 style = "text-align: center; color:red"> <i>Không có dữ liệu để hiển thị.</i></h3> 
                        @endif
                    </thead>
                </table>
                </br>
                <div>Tổng tiền: <input type="text" style="border:1px solid gray;height:35px;border-radius:10px" disabled value="   {{$hoadon->tong_tien}}"></div>
             </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>   
>>>>>>> phan_truong
@endsection