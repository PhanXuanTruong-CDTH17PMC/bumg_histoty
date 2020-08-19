@extends('layout')
@section('title')
    Chi tiết phản ánh
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
<<<<<<< HEAD
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">

</div>
<div class="row card-body">
@if(count($chitietphananh)==1)
    @foreach($chitietphananh as $chitiet)
    <div class="col-12 card card-body">
        <h2>{{$chitiet->tieu_de_pa}}</h2>
        </br>
        <h4><p>
        {{$chitiet->noi_dung_pa}}
        </p></h4></br>
        <p>Tạo vào {{$chitiet->created_at}}</p>
    </div>
    @endforeach
@endif
</div>
=======

@endsection
@section('main-content')
<div class="container">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
              <form>
                <fieldset>
                <legend>Chi Tiết Phản Ánh</legend>
                @if(count($chitietphananh)==1)
                            @foreach($chitietphananh as $chitiet)   
                        <div class="form-group ">Tiêu đề: <input type="text" style="border:1px solid gray;height:35px;border-radius:10px" class = 'form-control' disabled value="{{$chitiet->tieu_de_pa}}"></div>
                        <div class="form-group">Ngày: <input type="text" style="border:1px solid gray;height:35px;border-radius:10px"class = 'form-control'disabled value="{{ date('h:i d/m/yy', strtotime($chitiet->created_at)) }}"></div>
                        <div class="form-group">Nội dung: <input type="textArea" style="border:1px solid gray;height:100px;border-radius:10px" class = 'form-control' disabled value="{{$chitiet->noi_dung_pa}}"></div>
                    @endforeach
                @endif
                </fieldset>
            </form>
             </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>   
>>>>>>> phan_truong
@endsection