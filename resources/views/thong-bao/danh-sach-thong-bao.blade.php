@extends('layout')
@section('title')
    Danh sách thông báo
@endsection
@section('css')
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
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
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h2>Thông báo</h2>
            <a href="/danh-sach-thong-bao/create" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
        </div>
    </div>
</div>
<!-- end page title --> 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table  class="table dt-responsive nowrap">
                    <thead>
                        @if (count($thongbao )>0)
                            <tr style="background-color: #6c757d;; color:white">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Ngày thông báo</th>
                                <th>     </th>
                            </tr>
                            @foreach ($thongbao as $thong_bao )
                                    <tr>
                                        <th>{{$thong_bao-> id}}</th>
                                        <th>{{$thong_bao-> tieu_de_tb}}</th>
                                        <th>{{$thong_bao-> created_at}}</th> 
                                        
                                         <th style="width: 200px">
                                            <div>
                                                <button type="button" class ="btn" ><a href="danh-sach-thong-bao/{{$thong_bao-> id}}/edit" class="btn btn-info" ><i class="fa fa-edit"></i></a></button>
                                                <a type="button" href="{{ route('thong-bao.xoa', ['id' => $thong_bao-> id]) }}"  class="btn btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                                            </div>			
                                        </th>
                                    </tr>                              
                            @endforeach    
                        @else
                               <h3 style = "text-align: center; color:red"> <i>Không có dữ liệu để hiển thị.</i></h3> 
                        @endif
                    </thead>
                </table>
                {!! $thongbao->links() !!}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection