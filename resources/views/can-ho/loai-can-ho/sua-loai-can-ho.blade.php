@extends('layout')
@section('title')
    Sửa loại căn hộ
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div>
                    <h2>Sửa loại căn hộ</h2>
            </div>
        </div>
    </div>
     @include('messages.messages')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                    {!!Form::open(['action' => ['LoaiCanHoController@update',$loaicanho->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_loai_can_ho',$loaicanho->ten_loai_can_ho,['class'=> 'form-control','placeholder'=>'Nhập tên loại căn hộ'])}}
                    </div> 
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="/loai-can-ho" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}          
        </div>
    </div>
</div>
</div>
</div>
@endsection