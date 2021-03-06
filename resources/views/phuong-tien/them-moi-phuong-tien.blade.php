@extends('layout')
@section('title')
    Thêm mới phương tiện
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Thêm mới phương tiện</h2>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => 'PhuongTienController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('title','Nhãn hiệu phương tiện')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('nhan_hieu','',['class'=> 'form-control','placeholder'=>'Nhập nhãn hiệu'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Màu sắc')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('mau_sac','',['class'=> 'form-control','placeholder'=>'Nhập màu sắc'])}}
                    </div> 
                    </div>

                <div class="form-group">
                    {{Form::label('title','Biển số')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('bien_so','',['class'=> 'form-control','placeholder'=>'Nhập biển số'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Khu vực')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="khu_vuc" required focus>
                        <option value="" disabled selected>Chọn khu vực</option>        
                        @foreach($khuvuc as $khu_vuc)
                        <option name="loaiphuongtien" value="{{$khu_vuc->id}}">{{ $khu_vuc->ten_khu_vuc }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Loại phương tiện')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="loai_phuong_tien" required focus>
                        <option value="" disabled selected>Chọn loại phương tiện</option>        
                        @foreach($loaiphuongtien as $loai_phuong_tien)
                        <option name="loaiphuongtien" value="{{$loai_phuong_tien->id}}">{{ $loai_phuong_tien->ten_loai_phuong_tien }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="can_ho" required focus>
                        <option value="" disabled selected>Chọn căn hộ</option>        
                        @foreach($canho as $can_ho)
                        <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('phuong-tien.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection