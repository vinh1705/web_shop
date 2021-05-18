@include('layout-view.header')
<section>
    <div class="container">
        <div class="cart">
            <div class="header">
                <div class="back">
                    <a href="{{route('Views')}}">
                        <i class='bx bx-arrow-back' ></i>
                        <strong>Quay lại</strong>
                    </a>
                </div>
            </div>
            <div class="cart-layout">
                <div class="cart-info" id="cartInfo">
                    <div class="cart-icon">
                        <i class='bx bx-message-check'></i>
                        <label>Giỏ hàng</label>
                    </div>
                        <div class="cart-items">
                            <div class="item " data-sku="IPH12M512B">
                                <div class="img">
                                    <img src="{{asset('view-thame/img/'.$product_cart->img_banner)}}" alt="{{$product_cart->name}}">
                                    <p class="title">{{$product_cart->name}}</p>
                                    <p class="price">
                                        <strong>{{number_format($product_cart->price_sale)}}</strong>
                                        <strike>{{number_format($product_cart->price)}}</strike>
                                    </p>
                                    <div class="number">
                                        <label>Số lượng</label>
                                        <div class="control">
                                            <button onclick="cartMinutes('IPH12M512B');">-</button>
                                            <input type="text" onchange="cartChange('IPH12M512B');" value="1">
                                            <button onclick="cartPlus('IPH12M512B');" data-sku="IPH12M512B">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="info">       
                                    <div class="edit">
                                        <a href="javascript:cartDelete('IPH12M512B');" class="red"><i class="icon-minutes"></i></a>
                                    </div>
                                    <div class="promote">
                                        <div class="offer-items" id="of_IPH12M512B">
                                            <div class="offer">
                                                <div class="stt">
                                                    <label>KM1</label>
                                                </div>
                                                <div class="offer-border">
                                                    <div class="content">
                                                        <label class="radio-ctn"> 
                                                            <span>Giảm thêm 1.000.000đ khi thu cũ, đổi mới lên đời iPhone 12 Series</span>
                                                            <input checked="" class="cart-promote" type="radio" name="IPH12M512B_promote_g_0_13" value="13">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="options">
                                        <div class="option">
                                            <strong>Phiên bản</strong>
                                            <label>
                                                <i class="icon-checked"></i>
                                                <span>512GB</span>
                                            </label>
                                        </div>
                                        <div class="option">
                                            <strong>Màu sắc</strong>
                                            <label>
                                                <i class="icon-checked"></i>
                                                <span>Black</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart-total">
                            <p>Tổng giá trị: <strong class="price">{{number_format($product_cart->price)}}</strong> </p>
                            <p>Giảm: <strong class="price">
                                <?php
                                    $price = $product_cart->price;
                                    $percent = $product_cart->percent;
                                    $echo_percent = 100 - $percent;
                                    echo $percent = $price % $echo_percent;
                                ?>%</strong>
                            </p>
                            <p>Tổng thanh toán: <strong class="price text-red">{{number_format($product_cart->price_sale)}} ₫</strong></p>
                            <p><i>Ba mươi bảy triệu bốn trăm chín mươi nghìn đồng chẵn.</i></p>
                            <button class="next">Tiếp tục</button>
                        </div>
                    </div>
                <div class="cart-form">
                    <form action="{{route('XacNhanDonHang', ['id_categories' => $id_categories, 'id' => $product_cart->id, 'slug' => $product_cart->slug])}}" method="post">
                        @csrf
                        <input name="__RequestVerificationToken" type="hidden" value="hMy2FGr1d8nCXT4hyHLb_nfEdZbS_CsUJYDvWnGTD9lkGumkAO1zgAt2co_nptVOZD4du-Rkgqqyo7k6aOZpEQ4s5IM1">
                        <h3>Thông tin đặt hàng</h3>
                        <p class="text-gray"><i>Bạn cần nhập đầy đủ các trường thông tin có dấu *</i></p>
                        @include('thame.errors.error')
                        <div class="row">
                            <div class="col">
                                <div class="control">
                                    <input name="name" value="{{old('name')}}" type="text" placeholder="Họ và tên *" data-required="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="control">
                                    <input name="Phone" value="{{old('Phone')}}" type="tel" placeholder="Số điện thoại *" data-required="1">
                                </div>
                            </div>
                        </div>
                 
                        <div class="row">
                           <div class="col">
                               <div class="control">
                                    <select id="SystemCityID" name="SystemCityID" value="" placeholder="Tỉnh/Thành phố *" data-required="1">
                                        <option value="">Tỉnh/Thành phố *</option>
                                            @foreach ($cityVN as $key=>$value)
                                                <option value="{{$value->matp}}">{{$value->name}}</option>
                                            @endforeach
                                    </select> 
                                </div>
                           </div>
                            <div class="col">
                               <div class="control">
                                    <select id="SystemDistrictID" name="SystemDistrictID" value="" placeholder="Quận/Huyện *" data-required="1">
                                        <option value="">Quận/Huyện</option>
                                        @foreach ($District as $key=>$value)
                                            <option value="{{$value->maqh}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                           </div>
                        </div>

                           <div class="row">
                            <div class="col">
                                <div class="control">
                                    <input name="Address" value="{{old('Address')}}" type="text" placeholder="Địa chỉ nhận hàng *" data-required="1">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="control">
                                    <input name="Email" value="{{old('Email')}}" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="control">
                                    <textarea name="Note" value="{{old('Note')}}" placeholder="Ghi chú" spellcheck="false" data-minlength="15" style="height: 70px; overflow-y: hidden;"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-center">
                                <div class="control">
                                    <input name="Counpon" type="text" placeholder="Mã giảm giá (Nếu có)">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="control-button">
                                <button type="submit">XÁC NHẬN VÀ ĐẶT HÀNG</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<iframe src="https://asia.creativecdn.com/tags?id=pr_n4X0y6ApZyJaHX1dNxQd_basketstatus_776" width="1" height="1" scrolling="no" frameborder="0" style="display: none;"></iframe>



    <footer>
        <div class="container">
            
                <div id="navSocial">
                    <div class="social">
                        <ul>
                                <li><a href="https://www.facebook.com/hoanghamobilecom" title="Facebook Hoàng Hà Mobile" target="_blank" class="blue"><span><i class="icon-facebook"></i></span></a></li>
                                <li><a href="https://www.youtube.com/channel/UCJm_GdFJzT8h1odq1oMu_7Q?sub_confirmation=1" title="Youtube Hoàng Hà Mobile Channel" target="_blank" class="red"><span><i class="icon-youtube"></i></span></a></li>
                                <li><a href="https://www.instagram.com/hoanghamobile/?hl=vi" title="Hoàng Hà Mobile Instagram" target="_blank" class="rainbow"><span><i class="icon-instagram"></i></span></a></li>
                                <li><a href="https://www.tiktok.com/@hoanghaangels?" title="Tiktok" target="_blank" class="black"><span><i class="icon-tiktok"></i></span></a></li>
                        </ul>
                    </div>
                </div>

            <div id="backtoTop" style="display: none;">
                <a id="top" href="#">
                    <i class="icon-left"></i>
                </a>
            </div>
        </div>
    </footer>
    <div id="popup-modal"></div>
    <div id="sticker-modal"></div>
    <div class="search-bg"></div>
    
    <script type="application/ld+json">
    {"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/hoanghamobile.com\/","name":"Ho&#224;ng H&#224; Mobile","potentialAction":{"@type":"SearchAction","target":"https:\/\/hoanghamobile.com\/tim-kiem?kwd={search_term_string}","query-input":"required name=search_term_string"}}
</script>

<!-- analytics -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-1415779-10', 'auto');
    ga('require', 'GTM-KXZQBMD');
    ga('require', 'GTM-WPLRWHK');
    ga('send', 'pageview');

</script>
<!-- analytics -->


<!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5QM3X2');</script>
<!-- End Google Tag Manager -->

<!-- subiz -->
<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqqrmpwwuqeianonpxt")</script>
<!-- subiz -->


<!-- accesstrade-->
<script src="//static.accesstrade.vn/js/trackingtag/tracking.min.js "></script>
<script type="text/javascript">
    AT.init({ "campaign_id": 626, "is_reoccur": 1, "is_lastclick": 1 });
    AT.track();
</script>
<!-- accesstrade-->



        <script src="/js-css/web_v1.0.9.7.js"></script>
     
    <script type="text/javascript">
        $(document).ready(function () {
            init_cityChange(0);
        });
    </script>

        <script type="text/javascript">
            $(document).ready(function () {
                showPopup(48);
            });
        </script>
    

<iframe id="insider-worker" src="https://hoanghamobilevn.api.useinsider.com/worker-new.html" style="display: none;"></iframe><style id="ins-free-style" innerhtml=""></style><script async="" src="https://storage.googleapis.com/public-gcs.subiz-cdn.com/widget-v4/public/178ed564962.app.js"></script><script type="text/javascript" id="">function setCookie(b,c,a){document.cookie=b+"\x3d"+escape(c)+"; path\x3d/"+(null===a?"":"; expires\x3d"+a.toGMTString())}var exp=new Date;exp.setTime(exp.getTime()+2592E6);google_tag_manager["GTM-5QM3X2"].macro(2)&&setCookie("mo_aff_network",google_tag_manager["GTM-5QM3X2"].macro(3),exp);</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1025721017449292");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1025721017449292&amp;ev=PageView&amp;noscript=1"></noscript>



<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","136825790377655");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=136825790377655&amp;ev=PageView&amp;noscript=1"></noscript>


<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","125499974779822");fbq("track","PageView");</script>
<noscript>
 <img height="1" width="1" src="https://www.facebook.com/tr?id=125499974779822&amp;ev=PageView
&amp;noscript=1">
</noscript>
<div id="subiz"><div class="desktop"><div class="widget-container widget-container--right widget-container--hide"><div class="widget-header widget-header--collapsed"><div class="widget-header--inner widget-header--inner--collapsed"><div class="widget-header--wrap-button-back widget-header--has-convo-unred"><div class="widget-header--button-back" data-tooltip="Quay lại"></div><span class="widget-header--total-unread-convo">5</span></div><div class="group-avatar group-avatar--secondary"><div class="d-inline-block pos-relative" data-tooltip="Hoàng Hà Mobile" data-tooltip-position="bottom"><img class="avatar group-avatar--agent-left" src="https://file-subiz.com/fiqszojlmrbldxkhlrxn-logo_hh.jpg"></div><div class="d-inline-block pos-relative" data-tooltip="QTV Phạm Duy Anh" data-tooltip-position="bottom"><img class="avatar group-avatar--agent-middle" src="https://file-subiz.com/fiqwcdonhijhkerqbcge-logo_hoang_ha.jpg"></div><div class="d-inline-block pos-relative" data-tooltip="QTV Đỗ Mỹ Linh" data-tooltip-position="bottom"><img class="avatar group-avatar--agent-right" src="https://file-subiz.com/fiqszojhxkmqtybaemqk-logo_hh.jpg"></div></div><div class="widget-header--title-container"><div class="widget-header--title">Hoàng Hà Mobile</div><div class="widget-header--description">Bạn vui lòng để lại thông tin hoặc liên hệ hotline 19002091 để được hỗ trợ ạ!</div></div><div class="widget-header--button widget-header--button-close" data-tooltip="Đóng" data-tooltip-position="bottom"><span class="widget-header--button-close-icon"></span></div></div><div class="widget-header--inner widget-header--inner--expanded widget-header--inner--hidden"><div class="widget-header-expand-container"><div class="widget-header--top-wrapper"><div class="widget-header--title">Hoàng Hà Mobile</div><div class="widget-header--button widget-header--button-close" data-tooltip="Đóng" data-tooltip-position="bottom"><span class="widget-header--button-close-icon"></span></div></div><div class="widget_header__body widget_header__body__social"><img class="social__account_logo" src="https://file-subiz.com/fiqqxrhmzbdptbcmlfsr-logo_vuong.png"><div><div class="social__introduction">Bạn vui lòng để lại thông tin hoặc liên hệ hotline 19002091 để được hỗ trợ ạ!</div><div class="social__links"></div></div></div></div></div><div class="widget-header--inner widget-header--inner--expanded widget-header--inner--hidden"><div class="widget-header-expand-container"><div class="widget-header--top-wrapper"><div class="widget-header--title">Hoàng Hà Mobile</div><div class="widget-header--button widget-header--button-close" data-tooltip="Đóng" data-tooltip-position="bottom"><span class="widget-header--button-close-icon"></span></div></div><div class="widget_header__body"><div class="widget-header--avatar-wrapper"><div class="group-avatar group-avatar--primary"><div class="d-inline-block pos-relative" data-tooltip="Hoàng Hà Mobile" data-tooltip-position="bottom"><img class="avatar group-avatar--agent-left" src="https://file-subiz.com/fiqszojlmrbldxkhlrxn-logo_hh.jpg"></div><div class="d-inline-block pos-relative" data-tooltip="QTV Phạm Duy Anh" data-tooltip-position="bottom"><img class="avatar group-avatar--agent-middle" src="https://file-subiz.com/fiqwcdonhijhkerqbcge-logo_hoang_ha.jpg"></div><div class="d-inline-block pos-relative" data-tooltip="QTV Đỗ Mỹ Linh" data-tooltip-position="bottom"><img class="avatar group-avatar--agent-right" src="https://file-subiz.com/fiqszojhxkmqtybaemqk-logo_hh.jpg"></div></div></div><div class="widget-header--title-container"><div class="widget-header--description">Bạn vui lòng để lại thông tin hoặc liên hệ hotline 19002091 để được hỗ trợ ạ!</div></div></div></div></div></div><div class="widget-body"><div class="widget-body--content flex-grow-1 pl-3 pr-3 d-flex flex-column"><div class="flex-grow-1"><div class="form mt-3 pl-3 pr-3 pt-3 pb-3 d-flex flex-column"><div>Chúng mình đang ở đây và sẵn sàng hỗ trợ bạn!</div><div class="pt-2"><div><div class="label">Họ và tên<span class="ml-1 red">*</span></div><input class="form-control " type="text"></div><div><div class="label">Số điện thoại</div><input class="form-control " type="text"></div><div><div class="label">Địa chỉ email</div><input class="form-control " type="text"></div><div><div class="label">Tin nhắn<span class="ml-1 red">*</span></div><textarea class="form-control" row="4"></textarea></div></div></div></div><div class="poweredby"><a href="https://subiz.com.vn/?utm_source=id-acqqrmpwwuqeianonpxt&amp;utm_medium=widget&amp;utm_campaign=widget_referral" class="poweredby--text" target="_blank"><img class="poweredby--subiz-logo" src="https://storage.googleapis.com/public-gcs.subiz-cdn.com/widget-v4/public/assets/img/subiz-mono.877e9f5.svg" alt="true"> Subiz</a></div></div><div class="message-input message-input--preform"><button class="btn--start-convo">Bắt đầu hội thoại &nbsp; </button></div></div></div></div></div>
@include('layout-view.footer')
</body>