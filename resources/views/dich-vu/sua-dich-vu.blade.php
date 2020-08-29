@extends('layout')
@section('title')
    Thêm mới dịch vụ
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                    <h2>Chi tiết dịch vụ</h2>
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
                            @if($dichvu->don_vi=="VNĐ/m3")          
                            <option selected>VNĐ/m3</option> 
                            <option >VNĐ/kWh</option>  
                            <option >VNĐ/Chiếc</option>  
                            <option>VNĐ/Hộ</option>  
                            <option>VNĐ/Người</option> 
                            @elseif($dichvu->don_vi=="VNĐ/kWh")  
                            <option selected>VNĐ/kWh</option>         
                            <option>VNĐ/m3</option>  
                            <option >VNĐ/Chiếc</option>  
                            <option>VNĐ/Hộ</option>  
                            <option>VNĐ/Người</option> 
                            @elseif($dichvu->don_vi=="VNĐ/Chiếc")     
                            <option selected>VNĐ/Chiếc</option>       
                            <option>VNĐ/m3</option> 
                            <option >VNĐ/kWh</option>  
                            <option>VNĐ/Hộ</option>  
                            <option>VNĐ/Người</option> 
                            @elseif($dichvu->don_vi=="VNĐ/Hộ") 
                            <option selected>VNĐ/Hộ</option>     
                            <option>VNĐ/Chiếc</option> 
                            <option>VNĐ/Người</option> 
                            @elseif($dichvu->don_vi=="VNĐ/Người")
                            <option selected>VNĐ/Người</option>      
                            <option>VNĐ/Chiếc</option>   
                            <option>VNĐ/Hộ</option>  
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
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('dich-vu.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
                    </div>         
            </div>
        </div>
    </div>
@endsection