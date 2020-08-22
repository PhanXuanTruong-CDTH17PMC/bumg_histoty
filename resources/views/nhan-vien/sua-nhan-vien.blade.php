@extends('layout')
@section('title')
    Sửa nhân viên
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                
                    <h2>Sửa thông tin nhân viên</h2>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['NhanVienController@update',$nhanvien->id],'method'=> 'PUT']) !!}
                    <div class="form-group">
                        {{Form::label('title','Tên Nhân Viên')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('ten_nhan_vien',$nhanvien->ho_ten_nv,['class'=> 'form-control','placeholder'=>'Nhập tên nhân viên'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','CMND')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('CMND',$nhanvien->CMND,['class'=> 'form-control','placeholder'=>'Nhập số CMND'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Số điện thoại')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('SDT',$nhanvien->SDT,['class'=> 'form-control','placeholder'=>'Nhập số điện thoại liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Email')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('email',$nhanvien->email,['class'=> 'form-control','placeholder'=>'Nhập email liên lạc'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Ngày sinh')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Date('ngaysinh',$nhanvien->ngay_sinh,['class'=> 'form-control'])}}
                    </div> 
                     <div class="form-group">
                        {{Form::label('title','Tên đăng nhập')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('username',$nhanvien->username,['class'=> 'form-control','placeholder'=>'Nhập tên đăng nhập'])}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('title','Mật khẩu')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        {{Form::Text('matkhau',$nhanvien->password,['class'=> 'form-control','placeholder'=>'Nhập mật khẩu'])}}
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Loại tài khoản')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="loaitaikhoan" name="loaitaikhoan" required focus>    
                            @foreach($loaitaikhoan as $loai_tk)
                                @if(($nhanvien->loai_account_id)==($loai_tk->id))
                                    <option name="loaitk" value="{{$loai_tk->id}}">{{ $loai_tk->ten_loai_account }}</option>
                                @endif                            
                            @endforeach 
                            @foreach($loaitaikhoan as $loai_tk)
                                @if(($nhanvien->loai_account_id)!=($loai_tk->id))
                                    <option name="loaitk" value="{{$loai_tk->id}}">{{ $loai_tk->ten_loai_account }}</option>
                                @endif                            
                            @endforeach
                        </select>
                    </div> 
                    </div>
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Bộ phận')}}<span class="text-danger"> 
                    *</span>
                    <div class="form-group">
                        <select class="form-control" id="bophan" name="bophan" required focus>        
                            @foreach($bophan as $bo_phan)
                                @if(($nhanvien->bo_phan_id)==($bo_phan->id))
                                    <option name="tenbophan" value="{{$bo_phan->id}}">{{ $bo_phan->ten_bo_phan }}</option>
                                @endif
                            @endforeach
                            @foreach($bophan as $bo_phan)
                                @if(($nhanvien->bo_phan_id)!=($bo_phan->id))
                                    <option name="tenbophan" value="{{$bo_phan->id}}">{{ $bo_phan->ten_bo_phan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div> 
                    </div>
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('nhan-vien.danh-sach-nhan-vien') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
@endsection