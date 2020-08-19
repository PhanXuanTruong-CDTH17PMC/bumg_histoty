@extends('user.layout.user-layout')
@section('title')
    Phương tiện
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
                    
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        


<!-- Css cho trang -->
@endsection