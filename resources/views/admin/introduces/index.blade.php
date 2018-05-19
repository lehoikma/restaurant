@extends('admin.layouts.app')
@section('title-content')
    Tạo, Sửa Giới Thiệu Nhà Hàng
@endsection
@section('content')
    <div class="col-md-12 flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->
    <div class="col-md-12">
        <form action="{{route('save_introduces')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="id" value="{{$introduces['id']}}" type="hidden">

            <div class="col-md-12" style="margin-top: 15px">
                <label>Mô tả về nhà hàng:  <span style="color: red">(*)</span></label>
                <textarea id="editor1" name="content" rows="7" class="form-control ckeditor">{{!empty(old('content')) ? old('content') : $introduces['content']}}</textarea>
                <script src="/ckeditor/ckeditor.js"></script>

                <script type="text/javascript">
                  CKEDITOR.replace( 'editor1' );
                </script>
                @if ($errors->has('content'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('content') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary">Tạo, Sửa</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
      $(function () {
        $(".alert" ).fadeOut(5000);
      });
    </script>
@endsection