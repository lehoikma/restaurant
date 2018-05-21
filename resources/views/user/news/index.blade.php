@extends('user.layouts.app')
@section('content')
    <div class="clearfix"></div>
    <div class="cook_table" style="margin-top: 25px">
        <div class="container">
            <h1 class="title" style="margin-top: 0;padding-top: 0">TIN TỨC</h1>
            <div class="list">
                @foreach($news as $value)
                    <div style="height: 240px; padding-bottom: 20px" class="col-sm-4 col-md-4 col-xs-12 list_item lg_pr28 lg_pl0 item-custom">
                    <div class="row">
                        <div class="col-sm-12 list_content">
                            <p class="list_title">
                                <a href="" title="{{$value['title']}}">{{$value['title']}}</a>
                            </p>
                        </div>
                        <div class="col-sm-12 list_thumb">
                            <a href="">
                                <img style="width: 100%" src="upload/{{$value['image']}}"></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection