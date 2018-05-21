@extends('user.layouts.app')
@section('content')
    <div class="clearfix"></div>
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            @foreach($slides as $slide)
            <img src="upload/{{$slide['image']}}" data-thumb="" alt="" />
            @endforeach
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="youtube">
        <div class="container">
            {{--<iframe width="925" height="315" src="https://www.youtube.com/embed/iD5zxjySOzw?rel=0&amp;autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>--}}
            <iframe src="http://www.youtube.com/embed/xzvScRnF6MU?autoplay=1" width="960" height="447" frameborder="0" allowfullscreen></iframe>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="cookTable">
        <div class="container" style="padding-left: 0px;padding-right: 0px;">
            @foreach($cookTables as $cookTable)
                <div class="col-sm-4 col-md-4 col-xs-12 lg_pr50 lg_pl0" style="padding: 25px; text-align: center;">
                <a href="">
                    <img src="upload/{{$cookTable['image']}}" class="fw main_img" style="width: 100%; height: 200px">
                </a>
                <h3 class="">
                    <a href="" class="" style="font-size: 20px;color: #6b492a;font-family: myria;">{{mb_strtoupper($cookTable['name'], 'UTF-8')}}</a></h3>
                <p>Giá : {{!empty($cookTable['price']) ? $cookTable['price'] : 'Liên hệ'}}</p>
            </div>
            @endforeach
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="col-sm-4 col-md-4 col-xs-12 lg_pr50 lg_pl0" style="padding: 25px;">
                <a href="">
                    <img src="http://hemquan.vn/images/source/thumb/x16.png.pagespeed.ic.yLq6VK-FqJ.webp" class="fw main_img" style="width: 100%">
                </a>
                <h3 class="">
                    <a href="" class="" style="font-size: 20px;color: #6b492a;font-family: myria;">KHOAI TÂY CHIÊN</a></h3>
                <p>Giá : Liên hệ</p>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 lg_pr50 lg_pl0" style="padding: 25px;">
                <a href="">
                    <img src="http://hemquan.vn/images/source/thumb/x16.png.pagespeed.ic.yLq6VK-FqJ.webp" class="fw main_img" style="width: 100%">
                </a>
                <h3 class="">
                    <a href="" class="" style="font-size: 20px;color: #6b492a;font-family: myria;">KHOAI TÂY CHIÊN</a></h3>
                <p>Giá : Liên hệ</p>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12 lg_pr50 lg_pl0" style="padding: 25px;">
                <a href="">
                    <img src="http://hemquan.vn/images/source/thumb/x16.png.pagespeed.ic.yLq6VK-FqJ.webp" class="fw main_img" style="width: 100%">
                </a>
                <h3 class="">
                    <a href="" class="" style="font-size: 20px;color: #6b492a;font-family: myria;">KHOAI TÂY CHIÊN</a></h3>
                <p>Giá : Liên hệ</p>
            </div>
        </div>
    </div>
@endsection