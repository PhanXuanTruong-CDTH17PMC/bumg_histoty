@extends('layout')
@section('title')
    Danh sách hóa đơn
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
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Hóa đơn</h4>
            <a href="/hoa-don/create" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a>
        </div>
    </div>
</div>
<!-- end page title --> 
<form action = "{{ route('hoa-don.search') }}" method = 'POST'>
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
        <div class="form-group">
            <div class="form-group">
                <select class="form-control"  name="tinh_trang_searrch"  focus>
                    <option value="" disabled selected>Chọn tình trạng</option>  
                    <option name="searrch_tt" value="1">Chưa thanh toán</option>
                    <option name="searrch_tt" value="2">Đã thanh toán</option>
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
                        @if(count($hoadon) > 0) 
                            <tr style="background-color: #6c757d;; color:white">
                                <th>ID</th>
                                <th> Căn Hộ</th>
                                <th>Tổng tiền</th>   
                                <th>Hạn Thanh tán</th>    
                                <th> Tinh trạng</th>    
                                <th>     </th>                       
                        </tr>  
                        @foreach($hoadon as $hoa_don)
                            <tr>
                                <th>{{$hoa_don->id}}</th>
                                <th><a href="/hoa-don/{{$hoa_don->id}}">{{$hoa_don->canhoname}}</a></th>
                                <th>{{$hoa_don->tong_tien}}</th>
                                <th>{{$hoa_don->created_at}}</th>
                                @if($hoa_don->tinh_trang_tt == 1) 
                                    <th> Đã thanh toán</th>
                                @else
                                    <th> Chưa thanh toán</th>
                                @endif
                                <th style="width: 200px">
                                    <div>
                                        {!!Form::open(['action'=> ['HoaDonController@update',$hoa_don->id],'method' =>'PUT','class'=>'pull-right'])!!}
                                        {{Form::hidden('_method','PUT')}}
                                        {{Form::submit('Update',['class'=>'btn btn-info'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                        @else
                               <h1 style = "text-align: center; color:red"> <i>There is no data.</i></h1> 
                        @endif
                    </thead>
                    
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection