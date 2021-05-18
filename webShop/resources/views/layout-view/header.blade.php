
<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="author" content="hoanghamobile.com">
    <meta property='og:site_name' content='hoanghamobile.com' />
	<meta name="google-site-verification" content="JOFGGI7j9vWfBf-xpElM5Tec0UJ1k_CfdNjpaHm5z10" />
    <meta name="msvalidate.01" content="5C8CDF0992489498A30F9E5F6668A4D5" />
    <meta name="geo.placename" content="Hanoi, Hoàn Kiếm, Hanoi, Vietnam" />
    <meta name="geo.position" content="21.017249242314964;105.84134504199028" />
    <meta name="geo.region" content="VN-Hanoi" />
    <meta name="ICBM" content="21.017249242314964, 105.84134504199028" />

    <title>Ho&#224;ng H&#224; Mobile</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://hoanghamobile.com/favicon.ico"/>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/Segoe UI/Segoe UI.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/Segoe UI/Segoe UI Italic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/Segoe UI/Segoe UI Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/Segoe UI/Segoe UI Bold Italic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/Segoe UI/Segoe UI Semilight.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/Segoe UI/Segoe UI Semilight Italic.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://hoanghamobile.com/Content/web/fonts/icon/fonts/hoangha.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" as="script"  href="https://hoanghamobile.com/js-css/web_v1.0.9.7.js">
    <link rel="preload" as="style" href="https://hoanghamobile.com/js-css/web_v1.0.9.7.css">
    <link href="https://hoanghamobile.com/js-css/web_v1.0.9.7.css" rel="stylesheet" type="text/css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        window.insider_object = {};
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

    
    
    <link rel="canonical" href="https://hoanghamobile.comhttps://hoanghamobile.com" />
    <meta name="description" content="Si&#234;u thị điện thoại di động gi&#225; rẻ nhất" />
    <meta name="keywords" content="" />

    <meta name="twitter:title" content="Ho&#224;ng H&#224; Mobile" />
    <meta name="twitter:description" content="Si&#234;u thị điện thoại di động gi&#225; rẻ nhất">
    <meta name="twitter:url" content="https://hoanghamobile.com">

    <meta property="og:title" content="Ho&#224;ng H&#224; Mobile" />
    <meta property="og:description" content="Si&#234;u thị điện thoại di động gi&#225; rẻ nhất" />
    <meta property="og:url" content="https://hoanghamobile.com" />
    <meta property="og:image" content="https://hoanghamobile.com/Content/web/img/logo-text.png" />




    <script async src="https://hoanghamobile.com//hoanghamobilevn.api.useinsider.com/ins.js?id=10005327"></script>
</head>

<body style="background: #efefef;">
    <header>
        <div class="top-navigation">
            <div class="container">
                <ul>
                    <li><a href="#">Bản mobile</a></li>
                    <li><a href="{{route('AboutUs')}}">Giới thiệu</a></li>
                    <li><a href="{{route('BaoHanh')}}">Trung t&#226;m bảo h&#224;nh</a></li>
                    <li><a href="{{route('SearchCart')}}">Tra cứu đơn h&#224;ng</a></li>
                    <li><a href="{{route('ViewContact')}}">Liên hệ</a></li>
                    @if (Auth::check())
                        <li><a href="{{route('logout')}}">Đăng Xuất</a></li>
                        @else
                            <li><a href="{{route('CreateUser')}}">Đăng ký</a></li>  
                            <li><a href="{{route('LoginUser')}}">Đăng nhập</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
        
    
    <!-- logo and search box -->
    <div class="heading">
        <div class="container">
            <div class="logo">
                <a href="/" title="C&#212;NG TY CỔ PHẦN X&#194;Y DỰNG V&#192; ĐẦU TƯ THƯƠNG MẠI HO&#192;NG H&#192;">
                    <img src="https://hoanghamobile.com/Content/web/img/logo-text.png" alt="C&#212;NG TY CỔ PHẦN X&#194;Y DỰNG V&#192; ĐẦU TƯ THƯƠNG MẠI HO&#192;NG H&#192;">
                </a>
            </div>

            <div class="search-box">
                <form method="post" action="{{route('SearchProduct')}}">
                    @csrf
                    <div class="border" style="display: flex;">
                        <input type="text" id="kwd" name="search_product" placeholder="Hôm nay bạn cần tìm gì?" />
                        <button style="position: inherit;" type="submit" class="search"><i class='bx bx-search-alt-2'></i></i></button>
                    </div>
                </form>
            </div>

            <div class="order-tools">
                <div class="item check-order">
                    <a id="btnCheckOrder" href="{{route('SearchCart')}}">
                        <span class="icon"><i class='bx bx-car' ></i></span>
                        <span class="text">Kiểm tra đơn hàng</span>
                    </a>
                </div>
                <div class="item cart">
                    <a href="{{route('ViewAddToCarts')}}"><i class='bx bx-cart-alt' ></i><label><span style="height: 23px;width: 17px;" id="cart-total">0</span></label></a>
                </div>
            </div>
        </div>
    </div>

    <!-- nav -->
<nav>
    <div class="container">
        <ul class="root" style="justify-content: space-around;">
            @foreach ($categories as $key=>$value)
                <li>
                    <a href="{{route('ListProduct',$value->id)}}" target="_self">
                        <span style="font-size: 13px;
                        padding: 12px;">{{$value->categories}}</span>
                    </a>
                </li>
            @endforeach
            <li>
                <a href="{{route('IndexPost')}}" target="_self">
                    <span style="font-size: 13px;
                    padding: 12px;">Tin tức</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
    <!-- nav -->

    </header>
