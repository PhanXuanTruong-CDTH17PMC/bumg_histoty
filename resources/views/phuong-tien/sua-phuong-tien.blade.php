@extends('layout')
@section('title')
    Sửa phương tiện
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Sửa thông tin phương tiện</h2>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['PhuongTienController@update', $phuongtien->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                    {{Form::label('title','Nhãn hiệu phương tiện')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('nhan_hieu',$phuongtien->nhan_hieu,['class'=> 'form-control','placeholder'=>'Nhập nhãn hiệu'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Màu sắc')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('mau_sac',$phuongtien->mau_sac,['class'=> 'form-control','placeholder'=>'Nhập màu sắc'])}}
                    </div> 
                    </div>

                <div class="form-group">
                    {{Form::label('title','Biển số')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('bien_so',$phuongtien->bien_so ,['class'=> 'form-control','placeholder'=>'Nhập biển số'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Khu vực')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="khu_vuc" required focus>     
                        @foreach($khuvuc as $khu_vuc)
                            @if(($phuongtien->khu_vuc_id)==($khu_vuc->id))
                            <option name="loaiphuongtien" value="{{$khu_vuc->id}}">{{ $khu_vuc->ten_khu_vuc }}</option>
                            @endif
                        @endforeach
                        @foreach($khuvuc as $khu_vuc)
                            @if(($phuongtien->khu_vuc_id)!=($khu_vuc->id))
                            <option name="loaiphuongtien" value="{{$khu_vuc->id}}">{{ $khu_vuc->ten_khu_vuc }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Loại phương tiện')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="loai_phuong_tien" required focus>
                        @foreach($loaiphuongtien as $loai_phuong_tien)
                            @if(($phuongtien->loai_phuong_tien_id)==($loai_phuong_tien->id))
                            <option name="loaiphuongtien" value="{{$loai_phuong_tien->id}}">{{ $loai_phuong_tien->ten_loai_phuong_tien }}</option>
                            @endif
                        @endforeach
                        @foreach($loaiphuongtien as $loai_phuong_tien)
                            @if(($phuongtien->loai_phuong_tien_id)!=($loai_phuong_tien->id))
                            <option name="loaiphuongtien" value="{{$loai_phuong_tien->id}}">{{ $loai_phuong_tien->ten_loai_phuong_tien }}</option>
                            @endif
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    <div class="form-group">
                    {{Form::label('title','Căn hộ')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="canho" name="can_ho" required focus>
                        @foreach($canho as $can_ho)
                        @if(($phuongtien->can_ho_id)==($can_ho->id))
                            <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @endif
                        @endforeach
                        @foreach($canho as $can_ho)
                        @if(($phuongtien->can_ho_id)!=($can_ho->id))
                            <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @endif
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