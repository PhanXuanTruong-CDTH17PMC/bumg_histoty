@extends('layout')
@section('title')
    Sửa cư dân
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-12">
                    <h2>Sửa thông tin cư dân</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                
                {!!Form::open(['action' => ['CuDanController@update',$cudan->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                        {{Form::label('title','Họ tên cư dân')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_cu_dan',$cudan->ho_ten_cd,['class'=> 'form-control','placeholder'=>'Nhập tên cư dân'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','CMND')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('cmnd',$cudan->CMND,['class'=> 'form-control','placeholder'=>'Nhập số CMND'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Số điện thoại')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('SDT',$cudan->SDT,['class'=> 'form-control','placeholder'=>'Nhập số điện thoại liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Email')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('email',$cudan->email,['class'=> 'form-control','placeholder'=>'Nhập email liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Ngày sinh')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Date('ngaysinh',$cudan->ng_sinh,['class'=> 'form-control'])}}
                    </div> 
                     <div class="form-group">
                        {{Form::label('title','Căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="can_ho" required focus>   
                        @foreach($canho as $can_ho)
                        @if (($cudan->can_ho_id)==($can_ho->id))
                            <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @else <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div> 
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Quan hệ với chủ hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="quanhe" name="quanhe" required focus>     
                        @foreach($quanhe as $quan_he)
                        @if(($cudan->quan_he_id)==($quan_he->id))
                        <option name="quanhe" value="{{$quan_he->id}}">{{ $quan_he->ten_quan_he }}</option>
                        @else <option name="quanhe" value="{{$quan_he->id}}">{{ $quan_he->ten_quan_he }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div> 
                    </div>
                   


                    
                   
                    
                    
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="/cu-dan" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection