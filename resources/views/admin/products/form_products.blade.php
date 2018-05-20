@extends('admin.layouts.app')
@section('title-content')
    Tạo Món Ăn
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
        <form action="{{route('save_products')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-8">
                <label>Tên Món Ăn <span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title_products" class="form-control" placeholder="Nhập tên món ăn ..." value="{{old('title_products')}}">
                </div>
                @if ($errors->has('title_products'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('title_products') }}</p>
                @endif
            </div>

            <div class="col-md-5">
                <label>Giá :</label>
                <div class="form-group">
                    <input type="text" name="price_products" class="form-control" placeholder="Nhập giá món ăn ..." value="{{old('price_products')}}">
                </div>
                @if ($errors->has('price_products'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('price_products') }}</p>
                @endif
            </div>

            {{--<div class="col-md-12" style="margin-top: 15px">--}}
                {{--<label>Mô tả về món ăn <span style="color: red">(*)</span></label>--}}
                {{--<textarea id="editor1" name="content_products" rows="7" class="form-control ckeditor">{{old('content_products')}}</textarea>--}}
                {{--<script src="/ckeditor/ckeditor.js"></script>--}}

                {{--<script type="text/javascript">--}}
                  {{--CKEDITOR.replace( 'editor1' );--}}
                {{--</script>--}}
                {{--@if ($errors->has('content_products'))--}}
                    {{--<p class="help-block text-left" style="color: red">{{ $errors->first('content_products') }}</p>--}}
                {{--@endif--}}
            {{--</div>--}}

            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh đại diện <span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Tạo Món Ăn</button>
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