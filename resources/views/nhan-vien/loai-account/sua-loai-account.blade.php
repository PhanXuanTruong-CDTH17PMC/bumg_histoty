@extends('layout')
@section('title')
    Sửa thông tin loại tài khoản
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Sửa loại tài khoản</h2>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['LoaiAccountController@update',$loaiaccount->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại tài khoản')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_loai_account',$loaiaccount->ten_loai_account,['class'=> 'form-control','placeholder'=>'Nhập tên loại tài khoản'])}}
                    </div> 
                    </div>
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="/loai-account" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
