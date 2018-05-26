@extends('user.layouts.app')
@section('content')
    <div class="clearfix"></div>
    <div class="cook_table" style="margin-top: 25px">
        <div class="container">
            <h1 class="title" style="margin-top: 0;padding-top: 0">TIN TỨC</h1>
            <h3>{{$news['title']}}</h3>
            <div class="news_detail">
                {!! $news['content'] !!}
            </div>
            <h1 class="title" style="margin-top: 0;padding-top: 0"></h1>
            <h3 style="font-family: bebas">Bài Viết Liên Quan</h3>
            <div class="item-follow col-xs-12 row " style="padding-left: 0px">
                @foreach($follow as $value)
                    <div style="height: 240px; padding-bottom: 20px" class="col-sm-4 col-md-4 col-xs-12 list_item lg_pr28 lg_pl0 item-custom">
                        <div class="row">
                            <div class="col-sm-12 list_content">
                                <p class="list_title">
                                    <a href="" >{{$value['title']}}</a>
                                </p>
                            </div>
                            <div class="col-sm-12 list_thumb">
                                <a href="{{route('news_detail', [
                                'name' => str_slug($value['title']),
                                'id' => $value['id']
                                ])}}">
                                    <img style="width: 100%" src="/upload/{{$value['image']}}"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection