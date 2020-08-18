@extends('layout')
@section('title')
    Thêm mới bộ phận
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
                    <h2 class="page-title">Thêm mới bộ phận</h2>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                    {!!Form::open(['action' => 'BoPhanController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên bộ phận')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_bo_phan','',['class'=> 'form-control','placeholder'=>'Nhập tên Bộ Phận'])}}
                    </div> 
                    </div>
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('bo-phan.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
        </div>
    </div>
    </div>
@endsection