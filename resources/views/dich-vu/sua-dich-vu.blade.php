@extends('layout')
@section('title')
    Sửa dịch vụ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                    <h4 class="page-title">Sửa dịch vụ</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['DichVuController@update', $dichvu->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Tên loại dịch vụ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_dich_vu',$dichvu->ten_dich_vu,['class'=> 'form-control','placeholder'=>'Nhập tên loại dịch vụ'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Đơn vị')}}<span class="text-danger"> *</span>
                    <div class="form-group">
                        <select class="form-control " id="canho" name="don_vi" value = "" required focus>    
                            @if(($dichvu->don_vi)=='Chiếc/Tháng')
                            <option> Chiếc/Tháng</option> 
                            <option> m3/Tháng</option>  
                            <option> kWh/Tháng</option>    
                            <option> Hộ/Tháng</option>  
                            <option> Người/Tháng</option>   
                            @elseif (($dichvu->don_vi)=='m3/Tháng') 
                            <option> m3/Tháng</option>  
                            <option> Chiếc/Tháng</option>
                            <option> kWh/Tháng</option>    
                            <option> Hộ/Tháng</option>  
                            <option> Người/Tháng</option> 
                            @elseif (($dichvu->don_vi)=='kWh/Tháng') 
                            <option> kWh/Tháng</option>
                            <option> m3/Tháng</option>  
                            <option> Chiếc/Tháng</option>    
                            <option> Hộ/Tháng</option>  
                            <option> Người/Tháng</option>
                            @elseif (($dichvu->don_vi)=='Hộ/Tháng') 
                            <option> Hộ/Tháng</option>
                            <option> kWh/Tháng</option>
                            <option> m3/Tháng</option>  
                            <option> Chiếc/Tháng</option>      
                            <option> Người/Tháng</option>
                            @elseif (($dichvu->don_vi)=='Người/Tháng') 
                            <option> Người/Tháng</option>
                            <option> Hộ/Tháng</option>
                            <option> kWh/Tháng</option>
                            <option> m3/Tháng</option>  
                            <option> Chiếc/Tháng</option>      
                        @endif  
                        </select>
                    </div> 
                     </div> 
                    <div class="form-group">
                    {{Form::label('title','Chi Phí')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('phi_dv',$dichvu->phi_dv,['class'=> 'form-control','placeholder'=>'Nhập chi phí dịch vụ'])}}
                    </div> 
                    <div class="form-group">
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('dich-vu.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
                    </div>         
            </div>
        </div>
    </div>
@endsection