@extends('admin.layouts.app')
@section('title-content')
    Sửa Slide
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
        <form action="{{route('edit_slide')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="hidden" name="news_id" value="{{$slide['id']}}">
            <div class="col-md-8">
                <label>Tên Slide</label>
                <div class="form-group">
                    <input type="text" name="title_slide" class="form-control" placeholder="Nhập tên slide ..." value="{{$slide['name']}}">
                </div>
            </div>

            <div class=" col-md-8" style="margin-top: 10px">
                <label>Hình ảnh<span style="color: red">(*)</span></label>
                <input type="file" name="fileToUpload">
                <img id="image" src="/upload/{{$slide['image']}}" style="width: 150px; margin-top: 10px">
            </div>

            <div class=" col-md-8" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary"> Sửa Slide</button>
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