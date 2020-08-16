@extends('layout')
@section('title')
    Thêm mới hóa đơn
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Thêm mới hóa đơn</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
            {!!Form::open(['action' => 'HoaDonController@store','method'=> 'POST']) !!}
                    <div class="form-group">
                    {{Form::label('title','Căn hộ')}}<span class="text-danger">*</span>
                    <div class="form-group">
                        <select class="form-control " id="canho" name="can_ho" required focus>
                        <option value="" disabled selected>Chọn căn hộ</option>        
                        @foreach($canho as $can_ho)
                        <option name="canho" value="{{$can_ho->id}}">{{ $can_ho->name }}</option>
                        @endforeach
                        </select>
                    </div> 
                    </div>
                    <div class="form-group">
                        {{Form::label('title','Dịch vụ')}}<span class="text-danger">*</span>
                    </div>    
                    <div class="form-group">
                    
                    @if(count($dichvu)>0)
                    
                        @foreach($dichvu as $dich_vu)
                            <div class="form-row">
                            <div class="form-group"style="width:50px">
                                {{Form::Text("dichvu[$dich_vu->id][id]",$dich_vu->id,["class"=> "form-control"])}}
                            </div>
                            <div class="form-group">
                                {{Form::Text("dich_vu[$dich_vu->id][id]",$dich_vu->ten_dich_vu,["class"=> "form-control",])}}
                            </div>
                            <div class="form-group">
                                {{Form::Text("so_luong[$dich_vu->id][soluong]",$dich_vu->so_luong,["class"=> "form-control","placeholder"=>"Nhập số lượng"])}}
                            </div>
                            
                            </div>
                        @endforeach
                    @endif
                    </div>
                    <!-- <div class ="col" id = "ser">
                    </div>     
                        <div class="form-group">
                        <button type ="button" class='btn btn-purple waves-effect waves-light'id ="btnAddService" name='add_service'>Chọn dịch vụ</button>
                    </div>         -->
                    <div class="form-group">
                        {{Form::radio('tinh_trang_tt','1',['class'=> 'form-control', 'name'=>'tinh_trang_tt'])}} 
                        {{Form::label('title',' Đã thanh toán')}}
                        {{Form::radio('tinh_trang_tt','0',['class'=> 'form-control', 'value'=>'tinh_trang_tt'])}} 
                        {{Form::label('title',' Chưa thanh toán')}}
                    </div> 
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="/hoa-don" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}   
            </div>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){
  $("#btnAddService").click(function(){
    var rowTemplate = '<div class="row"><div class="form-group"><select class="form-control"  id="dichvu" name="dich_vu[][id]" required focus><option value="" disabled selected>Chọn dịch vụ</option>@foreach($dichvu as $dich_vu)<option name="dichvu[1][id]" value="{{$dich_vu->id}}">{{ $dich_vu->ten_dich_vu }}</option>@endforeach</select></div><div class="form-group">{{Form::Text("so_luong[][soluong]",'',["class"=> "form-control","placeholder"=>"Nhập số lượng"])}}</div></div>'
    $("#ser").append(rowTemplate);
  });
});
</script>
@endsection