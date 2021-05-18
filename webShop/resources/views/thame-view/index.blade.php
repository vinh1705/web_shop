@include('layout-view.header')
<section>
    <div class="container">
        <div class="quick-sales">
                <div class="item">
                    <a href="https://hoanghamobile.comhttps://hoanghamobile.com/dien-thoai-di-dong/iphone/iphone-12-series?utm_medium=Banner_Sanphamhot&amp;utm_content=1604_12series&amp;utm_campaign=12series" target="_blank">
                        <img src="https://hoanghamobile.com/Uploads/2021/04/28/san-pham-hot-ip.png" title="iPhone 12" alt="iPhone 12" />
                    </a>
                </div>
                <div class="item">
                    <a href="https://hoanghamobile.comhttps://hoanghamobile.com/dien-thoai-di-dong/oppo-reno-5-chinh-hang" target="_blank">
                        <img src="https://hoanghamobile.com/Uploads/2021/04/12/san-pham-hot-8290.png" title="OPPO RENO5 " alt="OPPO RENO5 " />
                    </a>
                </div>
                <div class="item">
                    <a href="https://hoanghamobile.comhttps://hoanghamobile.com/dien-thoai-di-dong/samsung/samsung-galaxy-a-series?utm_medium=Banner_Chuyenmuc&amp;utm_content=1904_Aseries&amp;utm_campaign=Aseries" target="_blank">
                        <img src="https://hoanghamobile.com/Uploads/2021/05/05/san-pham-hot-a32.png" title="Samsung ưu đ&#227;i lớn" alt="Samsung ưu đ&#227;i lớn" />
                    </a>
                </div>
                <div class="item">
                    <a href="https://hoanghamobile.comhttps://hoanghamobile.com/dien-thoai-di-dong/xiaomi-redmi-9-4gb-64gb-chinh-hang-dgw-637494134855844831?utm_medium=Banner_Chuyenmuc&amp;utm_content=1604_Redmi9&amp;utm_campaign=Redmi9" target="_blank">
                        <img src="https://hoanghamobile.com/Uploads/2021/04/28/san-pham-hot-redmi-9.png" title="Redmi 9" alt="Redmi 9" />
                    </a>
                </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="flash-sales">
            <div class="header">
                <h3><a href="#">Điện thoại</a></h3>
                <div class="timer" id="timer" data-start="May 07, 2021 15:05:23" data-end="May 08, 2021 00:00:00"></div>
            </div>
            <div class="content">
                <div class="owl-carousel equaHeight lr-slider" data-obj=".item a.title">
                    @foreach ($phone as $key=>$value)
                    <div class="item">
                        <div class="img">
                            <a href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' => $value->id])}}" title="{{$value->name}}">
                                <img src="{{asset('view-thame/img/'.$value->img_banner)}}">
                            </a>
                        </div>
                        <div class="info">
                            <a style="text-decoration: none;height: 70px;margin: 10px 0px;" class="title" href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' =>$value->id])}}">
                                <p style="font-size: 14.5px;font-weight: bold;color: #000;">{{$value->name}}</p>
                            </a>
                            <span class="price" style="font-size: 10.5px;margin-bottom: 16px;">
                                <strong href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' =>$value->id])}}">{{number_format($value->price_sale)}}</strong>
                                <strike href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' =>$value->id])}}">{{number_format($value->price)}}</strike>
                            </span>
                            
                        </div>
                        <div class="note" style="display: flex;">
                            <span style="height: 24px;" class="bag">KM</span> <label title="Giảm thêm 1.000.000đ khi thu cũ, đổi mới lên đời iPhone 12 Series">Giảm thêm 1.000.000đ khi thu cũ, đổ...</label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>




<section>
    <div class="container">
        <div class="ads">
                <a href="https://hoanghamobile.comhttps://hoanghamobile.com/dien-thoai-di-dong/iphone/iphone-12-series/iphone-12-mini?utm_medium=Banner_Chuyenmuc&amp;utm_content=1604_iphone12Mini&amp;utm_campaign=iphone12Mini" target="_top"><img src="https://hoanghamobile.com/Uploads/2021/04/16/banner-iphone-12-mini-1200-140.gif" style="width: 100%;"></a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="box-product-home box-home">
            <div class="header">
                <h4><a href="https://hoanghamobile.com/dien-thoai-di-dong">TABLE</a></h4>
            </div>
    <div class="col-content lts-product">
    @foreach ($table as $key=>$value)
        <div class="item">
            <div class="img">
                <a href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' => $value->id])}}" title="{{$value->name}}">
                    <img src="{{asset('view-thame/img/'.$value->img_banner)}}" alt="{{$value->name}}" title="{{$value->name}}">
                </a>
            </div>
            <span class="sales">
                <i class="icon-flash2"></i> Giảm {{number_format($value->price - $value->price_sale)}} ₫
            </span>
            <div class="info">
                <a href="#" class="title" title="{{$value->name}}"> <p style="font-size: 14.5px;font-weight: bold;color: #000;">{{$value->name}}</p></a>
                <span class="price">
                    <strong>{{number_format($value->price_sale)}} ₫</strong>
                    <strike>{{number_format($value->price)}} ₫</strike>
                </span>
            </div>
            <div class="note">
                <span class="bag">KM</span> <label title="">Gi&#225; ưu đ&#227;i trực tuyến (Li&#234;n hệ 1900...</label>
            </div>
        </div>
    @endforeach
</section>

<section>
    <div class="container">
        <div class="ads">
                <a href="https://hoanghamobile.comhttps://hoanghamobile.com/dien-thoai-di-dong/realme-c25-chinh-hang?utm_medium=Banner_Chuyenmuc&amp;utm_content=2404_Banner_Chuyenmuc&amp;utm_campaign=C25" target="_top"><img src="https://hoanghamobile.com/Uploads/2021/04/24/realme-c20.jpg" style="width: 100%;"></a>
        </div>
    </div>
</section>


    <section>
        <div class="container">
            <div class="flash-sales box-home">
                <div class="header">
                        <h4><a href="https://hoanghamobile.com/dong-ho">ĐỒNG HỒ</a></h4>
                </div>
                <div class="content">
                    <div class="owl-carousel lr-slider equaHeight" data-obj=".info a.title">

    
                        @foreach ($clock as $key=>$value)
                            <div class="item">
                                <div class="img">
                                    <a href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' => $value->id])}}" title="{{$value->name}}">
                                        <img src="{{asset('view-thame/img/'.$value->img_banner)}}" alt="{{$value->name}}" title="{{$value->name}}">
                                    </a>
                                </div>
                                <div class="info">
                                    <a href="{{route('Information',['id' => $value->id_categories, 'slug' => $value->slug, 'id_pr' => $value->id])}}" class="title"> 
                                        <p style="font-size: 14.5px;font-weight: bold;color: #000;">{{$value->name}}</p>
                                    </a>
                                    <span class="price">
                                        <strong>{{number_format($value->price_sale)}} ₫</strong>
                                        <strike>{{number_format($value->price)}} ₫</strike>
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="box-icon box-home">
                <div class="header">
                    <h4><a href="https://hoanghamobile.comhttps://hoanghamobile.com/phu-kien">Phụ Kiện</a></h4>
                </div>

                <div class="content">
                    <ul>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/the-nho-usb">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/the-nho-usb.png" /></span>
                                <label>Thẻ nhớ - USB</label>
                            </a>
                        </li>
                        <li  style="width: 119px;">
                            <a href="https://hoanghamobile.com/tai-nghe">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/tai-nghe.png" /></span>
                                <label>Tai nghe</label>
                            </a>
                        </li style="width: 119px;">
                        <li>
                            <a href="https://hoanghamobile.com/sac-du-phong">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/sac-du-phong.png" /></span>
                                <label>Sạc dự ph&#242;ng</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/do-choi-cong-nghe/quat-de-ban">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/quat.png" /></span>
                                <label>Quạt để b&#224;n</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/loa">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/loa.png" /></span>
                                <label>Loa</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/cu-sac-day-cap">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/cu-cap-sac.png" /></span>
                                <label>Củ sạc - D&#226;y c&#225;p</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/camera-an-ninh">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/camera.png" /></span>
                                <label>Camera an ninh</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/phu-kien/bo-phat-wifi">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/bo-phat-wjfi.png" /></span>
                                <label>Bộ ph&#225;t wifi</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/phu-kien/phu-kien-apple">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/apple.png" /></span>
                                <label>Apple</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/op-lung-dien-thoai">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/01/23/bao-da-op-lung.png" /></span>
                                <label>Bao da - ốp lưng</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/do-gia-dung/may-loc-khong-khi">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/03/01/icon-web-cs6ok.png" /></span>
                                <label>M&#225;y lọc kh&#244;ng kh&#237;</label>
                            </a>
                        </li>
                        <li style="width: 119px;">
                            <a href="https://hoanghamobile.com/do-gia-dung/robot-hut-bui">
                                <span><img src="https://hoanghamobile.com/i/cat/Uploads/2021/03/01/icon-web-cs6j.png" /></span>
                                <label>Robot h&#250;t bụi</label>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




<!-- news -->
<section>
    <div class="container">
        <div class="news-home box-home">
            <div class="header">
                <h4><a href="https://hoanghamobile.com/tin-tuc">TIN CÔNG NGHỆ MỚI</a></h4>
            </div>

            <div class="col-content">
                {{-- @dd($post) --}}
                @foreach ($post as $key=>$value)
                    <div class="item">
                        <div class="img">
                            <a href="{{route('Post', $value->id)}}">
                                <img src="{{asset('view-thame/img/'.$value->img_banner)}}">
                            </a>
                        </div>
                        <p>
                            <a style="font-size: 13px;" href="{{route('Post', $value->id)}}">{{$value->title}}</a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="corevalue">
                <div class="item">
                    <span class="icon">
                        <i class="bx bx-donate-heart"></i>
                    </span>
                    <div class="text">
                        <span>Sản phẩm</span>
                        <strong>CH&#205;NH H&#195;NG</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class="bx bx-cart"></i>
                    </span>
                    <div class="text">
                        <span>Miễn ph&#237; vận chuyển</span>
                        <strong>TO&#192;N QUỐC</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class="bx bxs-microphone"></i>
                    </span>
                    <div class="text">
                        <span>Hotline hỗ trợ</span>
                        <strong>1900.2091</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class="bx bxs-user-account"></i>
                    </span>
                    <div class="text">
                        <span>Thủ tục đổi trả</span>
                        <strong>DỄ D&#192;NG</strong>
                    </div>
                </div>
        </div>
    </div>
</section>



<section>
    <div class="container">
        <div class="subscript">
            <div class="icon-text">
                <img src="https://hoanghamobile.com/Content/web/img/sub-logo.png" />
                <div class="text">
                    <h4>Đăng ký nhận tin</h4>
                    <p>Đăng ký để nhận những chương trình khuyến mại hot nhất của Hoàng Hà Mobile</p>
                </div>
            </div>
            <div class="form">
                <form onsubmit="return submitSubscription(this);">
                    <input name="__RequestVerificationToken" type="hidden" value="xKfxyArmmrWkwK1yLZRechukIGw1X0TdWWl67wMh9M7g3VvPSXbXh4nc-yJBQUul9ZTlvvB-Tdairo4Dx74DC4Q27S81" />
                    <div class="input">
                        <input type="email" id="email" name="email" placeholder="Nhập E-mail của bạn" />
                    </div>
                    <button type="submit"><i class="icon-fly"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<iframe src="https://asia.creativecdn.com/tags?id=pr_n4X0y6ApZyJaHX1dNxQd_home" width="1" height="1" scrolling="no" frameBorder="0" style="display: none;"></iframe>

@include('layout-view.footer')

<style>
    .company {
        display: flex;
        justify-content: space-around;
        margin: 16px;
        font-size: 13px;
    }
    .company-link {
        background: #fff;
        padding: 10px;
        border-radius: 30px;
    }
</style>
