@extends('admin.layouts.app')
@section('title-content')
    Sửa Món Ăn
@endsection
@section('content')
    <div class="col-md-12">
        <form action="{{route('edit_products')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="products_id" value="{{$products['id']}}">
            <div class="col-md-8">
                <label>Tên Món Ăn<span style="color: red">(*)</span></label>
                <div class="form-group">
                    <input type="text" name="title_products" class="form-control" placeholder="Nhập tên món ăn ..." value="{{$products['name']}}">
                </div>
                @if ($errors->has('title_products'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('title_products') }}</p>
                @endif
            </div>

            <div class="col-md-5">
                <label>Giá :</label>
                <div class="form-group">
                    <input type="text" name="price_products" class="form-control" placeholder="Nhập giá món ăn ..." value="{{$products['price']}}">
                </div>
                @if ($errors->has('price_products'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('price_products') }}</p>
                @endif
            </div>

            {{--<div class="col-md-12" style="margin-top: 15px">--}}
                {{--<label>Mô tả về sản phẩm <span style="color: red">(*)</span></label>--}}
                {{--<textarea id="editor1" name="content_products" rows="7" class="form-control ckeditor">{{$products['content']}}</textarea>--}}
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
                <img id="image" src="/upload/{{$products['image']}}" style="width: 150px; margin-top: 10px">
                @if ($errors->has('fileToUpload'))
                    <p class="help-block text-left" style="color: red">{{ $errors->first('fileToUpload') }}</p>
                @endif
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Sửa Món Ăn</button>
            </div>
        </form>
    </div>

@endsection