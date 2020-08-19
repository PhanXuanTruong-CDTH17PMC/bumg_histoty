@extends('layout')
@section('title')
    Thêm mới dịch vụ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Thêm mới dịch vụ</h2>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => 'DichVuController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại dịch vụ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_dich_vu','',['class'=> 'form-control','placeholder'=>'Nhập tên loại dịch vụ'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Đơn vị')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control " id="canho" name="don_vi" required focus>
                            <option value="" disabled selected>Chọn đơn vị</option>        
                            <option >VNĐ/m3</option>  
                            <option >VNĐ/kWh</option>  
                            <option >VNĐ/Chiếc</option>  
                            <option>VNĐ/Hộ</option>  
                            <option>VNĐ/Người</option>  
                        </select>
                    </div> 
                    </div> 
                    <div class="form-group">
                    {{Form::label('title','Chi Phí')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('phi_dv','',['class'=> 'form-control','placeholder'=>'Nhập chi phí dịch vụ'])}}
                    </div> 
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('dich-vu.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
                    </div>         
            </div>
        </div>
    </div>
@endsection