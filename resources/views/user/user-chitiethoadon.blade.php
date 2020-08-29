@extends('user.layout.user-layout')
@section('title')
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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
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
                <div class="row">
                        <div style]= "margin:15px">Tổng tiền: <input type="text" style="border:1px solid gray;height:35px;border-radius:10px" disabled value=" {{number_format($hoadon->tong_tien, 0, ',', '.')}}"></div>
                        <div class ="col-1"> </div>
                        @if($hoadon->tinh_trang_tt == 1)
                           <a class ="btn btn-primary" disabled>Đã Thanh Toán </a>
                        @else
                             <a href="{{ route('user-hoa-don.pay', ['id' => $hoadon->id]) }}"  class ="btn btn-danger">Chưa Thanh Toán</a>
                        @endif
                 </div>
             </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>   
@endsection