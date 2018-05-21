@extends('user.layouts.app')
@section('content')
    <div class="clearfix"></div>
    <div class="cook_table" style="margin-top: 25px">
        <div class="container">
            <h1 class="title" style="margin-top: 0;padding-top: 0">MENU</h1>
            <div class="list">
                @foreach($cookTables as $cookTable)
                    <div class="col-sm-4 col-md-4 col-xs-12 lg_pr50 lg_pl0" style="padding: 25px; text-align: center;">
                        <a href="">
                            <img src="upload/{{$cookTable['image']}}" class="fw main_img" style="width: 100%; height: 200px">
                        </a>
                        <h3 class="">
                            <a href="" class="" style="font-size: 20px;color: #6b492a;font-family: myria;">
                                {{mb_strtoupper($cookTable['name'], 'UTF-8')}}
                            </a>
                        </h3>
                        <p>Giá : {{!empty($cookTable['price']) ? $cookTable['price'] : 'Liên hệ'}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection