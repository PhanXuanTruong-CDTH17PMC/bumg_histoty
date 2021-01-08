@extends('user.layout.user-layout')
@section('title')
    Hóa đơn
@endsection
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"><b> Hóa Đơn</b></a>
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
                    @if(count($hoadon)>0)
                    <tr style="background-color: #CC00FF">
                            <th style="color:white">ID</th>
						    <th style="color:white">Tổng tiền</th>   
						    <th style="color:white">Hạn Thanh Toán</th>       
						    <th style="color:white"> Tinh trạng</th>   
                       </tr>
                        @foreach($hoadon as $hoa_don)
                            <tr>
                                <th style="color:black"><a href="/user-hoa-don/{{$hoa_don->id}}">{{$hoa_don->id}}t</a></th>
                                <th style="color:black">{{number_format($hoa_don->tong_tien, 0, ',', '.')}}</th>
                                <th style="color:black">{{date('d-m-yy', strtotime($hoa_don->created_at))}}</th>
                                <th style="color:black">
                                    @if(($hoa_don->tinh_trang_tt)==0) 
                                        Chưa thanh toán
                                    @else
                                        Đã Thanh toán
                                    @endif    
                                </th>  </tr>
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