<html>
<head>
    <title>Nhà Hàng Gà Chọi</title>
    <meta http-equiv="Content-language" content="vi">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    {{--Slide--}}
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider/nivo-slider.css" type="text/css" media="screen" />
</head>

<body>
<a href="tel:024 66811169" title="Gọi 024 66811169" id="floating-phone" style="
    display: none;
    position: fixed;
    right: 10px;
    bottom: 50px;
    height: 50px;
    width: 50px;
    background: #f06292 url(http://callnowbutton.com/phone/callbutton01.png) center / 30px no-repeat;
    z-index: 99;
    color: #FFF;
    font-size: 35px;
    line-height: 55px;
    text-align: center;
    border-radius: 10px;
    -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.5);
    -moz-box-shadow: 0 2px 5px rgba(0,0,0,.5);
    box-shadow: 0 2px 5px rgba(0,0,0,.5);">
    <i class="uk-icon-phone"></i>
</a>

<div class="top_main">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 top_logo">
                <a href="http://hemquan.vn/" class="logo" title="quangcao4k.com">
                    <img src="http://hemquan.vn/images/uploads/logo/xlogo2_228f1.png.pagespeed.ic.1dWTpgJyN6.webp">
                </a>
            </div>
            <div class="_top_cart" style="float: right;padding-top: 15px;">
                <p style="
                       font-family: myria;
                       color: #ff0000;
                       font-size: 28px;
                       /*font-weight: bold;*/
                       "><span class="glyphicon glyphicon-earphone" style="
                            font-size: 18px;
                            margin-right: 7px;
                            "></span>Đặt bàn ngay:</p>
                <p style="
                       float: right;
                       color: #330206;
                       font-size: 23px;
                       font-family: bebas;
                       "><a href="tel:0925953333" style="
                       float: right;
                       color: #330206;
                       font-size: 23px;
                       font-family: bebas;
                        font-weight: bold;
                       ">092 595 3333</a></p>
            </div>
        </div>
    </div>
</div>
<nav role="navigation" class="navbar navbar-default" style="    margin-bottom: 0px;">
    <div class="container top_nav">
        <div class="row">
            <div class="navbar-header">
                <button data-target="#myNavbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="myNavbar" class="navbar-collapse noPadding collapse" style="height: 1px;">
                <div class="menustyle _lg_fr">
                    <ul class="nav navbar-nav  sm" data-smartmenus-id="1526812798300609" style="font-size: 22px !important;font-family: monospace;font-weight: bold;">
                        <li class="menu-active">
                            <a class="" title="Trang chủ" href="{{route('user_top')}}">Trang chủ</a></li>
                        <li class="menu-active">
                            <a title="Giới thiệu" href="/gioi-thieu.html">Giới thiệu</a></li>
                        <li class="menu-active">
                            <a title="Menu" href="{{route('menu')}}" class="has-submenu">Menu</a>
                        </li>
                        <li class="menu-active">
                            <a title="Blog" href="{{route('news')}}">Blog</a>
                        </li>
                        <li class="menu-active">
                            <a title="Liên hệ" href="#contact">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
@yield('content')
<div class="footer" style="background: #8fcc6d; width: 100%; float: left; margin-top: 30px;">
    <div class="container" style="padding-top: 5px; padding-bottom: 0px;">
        <div class="blog1" style="width: 85%; float: left; padding: 20px;">
            <img width="275" height="150" src="http://hemquan.vn/images/img/xlogofooter1_2292a.png.pagespeed.ic.YvQZ4uYwrz.webp">
            <p style="color: #fff; padding-top: 0px; padding-right: 20px; float: right;">Đơn vị chủ quản: Tập Đoàn Thành Đô<br>
                Tòa nhà Plaschem, 562 Nguyễn Văn Cừ, Long Biên, Hà Nội<br>
                Tel: 0243.652.7766 hoặc DĐ: 0913.311.678<br>
                Người chịu trách nhiệm nội dung: Vũ Thanh Khiết<br>
            </p>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
            controlNav: false
        });

    });

    $(function() {
        var href = window.location.href;
        $('li.menu-active a').each(function(e,i) {
            if (href.indexOf($(this).attr('href')) >= 0) {
                $('li.menu-active').removeClass('active');
                $(this).parent().addClass('active');
            }
        });

    });
</script>

</body>
</html>