@extends('layout')
@section('title')
    Thêm mới loại căn hộ
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box col-12">
                    <h2>Thêm loại căn hộ</h2>
            </div>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                    {!!Form::open(['action' => 'LoaiCanHoController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_loai_can_ho','',['class'=> 'form-control','placeholder'=>'Nhập tên loại căn hộ'])}}
                    </div> 
                    </div>
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('loai-can-ho.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}


                    
        </div>
    </div>
@endsection