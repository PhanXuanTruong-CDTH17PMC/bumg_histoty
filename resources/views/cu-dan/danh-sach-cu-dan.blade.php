@extends('layout')
@section('title')
    Danh sách cư dân
@endsection
@section('css')
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
@endsection
@section('js')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <!-- Sweet Alert2 js-->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    
    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>

    <!-- Sweet Alert2 QuanTriVien init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h2>Cư dân</h2>
            <a href="/cu-dan/create" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
            <a href="quan-he   " style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Quản lý mối quan hệ</a><br>
        </div>
    </div>
</div>
<!-- end page title --> 
<form action = "{{ route('cu-dan.search') }}" method = 'POST'>
<div class="row">
    <div class="col-2">
        <div class="form-group">
            <div class="form-group">
                <select class="form-control"  id = "canho_search"name="canho_search"  focus>
                    <option value="" disabled selected>Chọn căn hộ</option>        
                    @foreach($canho as $can_ho)
                    <option name="search_ch" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                    @endforeach
                </select>
            </div> 
        </div>
    </div>
    <div class="col-2">     
        <div class="form group">
            <div class="form group">
                <button type = 'submit' style="margin-bottom:10px;" class="btn btn-primary ">Tìm Kiếm</button>
                <a href="/hoa-don/" style="margin-bottom:10px;" class="btn btn-info">Quay lại</a>
                {{ csrf_field() }}
            </div>
        </div>
    </div>
 </div>
 </form>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
                        @if (count($cudan )>0)
                            <tr style="background-color: #6c757d;; color:white"> 
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>CMND</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Ngày sinh</th>
                                <th>Căn hộ</th>
                                <th>Quan hệ</th>
                                <th>     </th>
                            </tr>
                            @foreach ($cudan as $cu_dan )
                                    <tr>
                                        <th>{{$cu_dan-> cu_dan_id}}</th>
                                        <th>{{$cu_dan-> ho_ten_cd}}</th>
                                        <th>{{$cu_dan-> CMND}}</th>
                                        <th>{{$cu_dan-> SDT}}</th>
                                        <th>{{$cu_dan-> email}}</th>
                                        <th>{{$cu_dan-> ng_sinh}}</th>
                                        <th>{{$cu_dan-> can_ho_id}}</th>
                                        <th>{{$cu_dan-> quanhe}}</th>
                                        <th style="width: 200px">
                                            <div>
                                                <button type="button" class="btn "><a href="/cu-dan/{{$cu_dan->cu_dan_id}}/edit" class="btn btn-info" ><i class="fa fa-edit"></i></a></button>
                                                <a type="button"<a href="{{ route('cu-dan.xoa', ['id' => $cu_dan->cu_dan_id]) }}"  class="btn btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </th>   
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
@endsection