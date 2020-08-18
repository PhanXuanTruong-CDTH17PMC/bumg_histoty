@extends('user.layout.user-layout')
@section('title')
    Phản ánh
@endsection
@section('main-content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"><b>Phản Ánh Cư Dân</b></a>
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
                        <span class="no-icon">Account: <b>{{$auth->name}}</b></span>
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
                 {!!Form::open(['action' => ['UserPhanAnhController@store'],'method'=> 'POST']) !!} 
                <div class="form-group">
                    {{Form::label('title','Tiêu đề')}}<span class="text-danger">*</span>
                    <div class="form-group">
                        {{Form::Text('tieu_de_pa','',['class'=> 'form-control','placeholder'=>'Nhập tiêu đề'])}}
                    </div> 
                </div>
                <div class="form-group">
                    {{Form::label('title','Nội dung')}}<span class="text-danger">*</span>
                    <div class="form-group">
                        {{Form::Textarea('noi_dung_pa','',['class'=> 'form-control','placeholder'=>'Nhập nội dung'])}}
                    </div> 
                </div>
                {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                {{Form::button('Hủy',['class'=>'btn btn-purple waves-effect waves-light'])}}
                {!!Form::close() !!}
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>        
</div>   
@endsection