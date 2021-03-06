@extends('layout')
@section('title')
    Thêm mới tin tức
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div >
                
                    <h2>Sửa tin tức</h2>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {!!Form::open(['action' => ['TinTucController@update',$tintuc->id],'method'=> 'PUT','enctype'=> 'multipart/form-data']) !!}
                <div class="form-group">
                        {{Form::label('title','Tiêu đề')}}<span class="text-danger"> 
                        *</span>
                        <div class="form-group">
                            {{Form::Text('tieu_de',$tintuc->tieu_de,['class'=> 'form-control', 'placeholder'=>'Nhập tiêu đề'])}}
                        </div> 
                        </div>
                    <div class="form-group">
                        {{Form::label('title','Nội dung')}}<span class="text-danger"> 
                        *</span>
                        <div class="form-group">
                            {{Form::Textarea('noi_dung_tt',$tintuc->noi_dung_tt,['class'=> 'form-control', 'placeholder'=>'Nhập nội dung','id'=>'editor1'])}}
                        </div> 
                        </div>
                        <div class="form-group">
                            {{Form::label('title','Ảnh minh họa')}}<span class="text-danger"> *</span>
                        <div class="form-group">
                            <input type="file" class= 'form-control' name='anh_dai_dien'/>
                            <label> <b>Lưu ý:<u></u> </b><small srylr="color:red">Chỉ chọn file có phần mở rộng: png, img, jpg</small></label>
                        </div> 
                        @if(session('success'))
                        <p style="color:red"> {{ session('success') }} </p>
                        @endif
                    </div>
                    {{Form::submit('Lưu',['class'=>'btn btn-success waves-effect waves-light'])}}
                    <a href="{{route('tin-tuc.danh-sach') }}"type = "button" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    {!!Form::close() !!}
            </div>
        </div>
    </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
		CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
		</script>
@endsection