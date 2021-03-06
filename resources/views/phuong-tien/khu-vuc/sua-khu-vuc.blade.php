@extends('layout')
@section('title')
    Sửa khu vực
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Sửa thông tin khu vực</h2>
                
            </div>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                    {!!Form::open(['action' => ['KhuVucController@update',$khuvuc->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên Khu vực')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_khu_vuc',$khuvuc->ten_khu_vuc,['class'=> 'form-control','placeholder'=>'Nhập tên khu vực'])}}
                    </div> 
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('khu-vuc.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
        </div>
    </div>
@endsection