@extends('layout')
@section('title')
    Danh sách loại tài khoản
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
            <h2>Loại tài khoản</h2  >
            <a href="/loai-account/create" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
        </div>
    </div>
</div>
<!-- end page title --> 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table dt-responsive nowrap">
                    <thead>
                        @if (count($loaiaccount )>0)
                            <tr style="background-color: #6c757d;; color:white">
                                <th>ID</th>
                                <th>Tên loại tài khoản</th>
                                <th></th>
                            </tr>
                            @foreach ($loaiaccount as $loai_account )
                                    <tr>
                                        <th>{{$loai_account-> id}}</th>
                                        <th>{{$loai_account-> ten_loai_account}}</th>
										<th style="width: 200px">
                                            <div>
                                                @if((Auth::guard('nhanvien')->user()->loai_account_id)==1)
                                                    <a type="button" href="/loai-account/{{$loai_account->id}}/edit" class="btn btn-info" ><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('loai-account.xoa', ['id' => $loai_account->id]) }}"  class="btn btn-danger delete-confirm"><i class="fa fa-trash"></i></a>
                                                @else                                                
                                                    <a type="button" href="/loai-account/{{$loai_account->id}}/edit" class="btn btn-info disabled" ><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('loai-account.xoa', ['id' => $loai_account->id]) }}"  class="btn btn-danger delete-confirm disabled"><i class="fa fa-trash"></i></a>
                                                @endif
                                            </div>						
										</th>
                                    </tr>                              
                            @endforeach  
                        @else
                               <h3 style = "text-align: center; color:red"> <i>Không có dữ liệu để hiển thị.</i></h3>   
                        @endif
                    </thead>
                </table>
                {!! $loaiaccount->links() !!}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection