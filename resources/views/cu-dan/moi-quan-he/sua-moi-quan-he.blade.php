@extends('layout')
@section('title')
    Sửa mối quan hệ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Sửa thông tin quan hệ</h2>
                
            </div>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                    {!!Form::open(['action' => ['MoiQuanHeController@update',$quanhe->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên mối quan hệ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_moi_quan_he',$quanhe->ten_quan_he,['class'=> 'form-control','placeholder'=>'Nhập tên mối quan hệ'])}}
                    </div> 
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('quan-he.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
        </div>
    </div>
@endsection