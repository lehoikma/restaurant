@extends('user.layouts.app')
@section('content')
    <div class="clearfix"></div>
    <div class="cook_table" style="margin-top: 25px">
        <div class="container">
            <h1 class="title" style="margin-top: 0;padding-top: 0">GIỚI THIỆU</h1>
            <div class="list">
                <div class="container" style="padding-left: 0px">
                    {!! $introduces['content'] !!}
                </div>
            </div>
        </div>
    </div>
@endsection