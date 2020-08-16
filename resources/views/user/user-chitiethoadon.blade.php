@extends('user.layout.user-layout')
@section('title')
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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
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

@endsection