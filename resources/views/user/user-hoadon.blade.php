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
                            <th>ID</th>
						    <th>Tổng tiền</th>      
						    <th> Tinh trạng</th>   
                            <th></th>                    
                       </tr>
                    @if(count($hoadon)>0)
                        @foreach($hoadon as $hoa_don)
                            <tr>
                                <th>{{$hoa_don->id}}</th>
                                <th>{{$hoa_don->tong_tien}}</th>
                                <th>
                                    @if(($hoa_don->tinh_trang_tt)==0) 
                                        Chưa thanh toán
                                        @else
                                        Đã Thanh toán
                                    @endif    
                                </th>
                                <th><a href="/user-hoa-don/{{$hoa_don->id}}">Xem chi tiết</a></th>
                            </tr>
                        @endforeach
                    @endif

                    </thead>
                    
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        


<!-- Css cho trang -->
@endsection