@include('layout-view.header')

<section>
    <div class="container">

        <div class="cart cart-checkout">
            <div class="header">
                <div class="back">
                    <a href="/">
                        <i class='bx bx-left-arrow-alt' ></i>
                        <strong>Trở về trang chủ</strong>
                    </a>
                </div>
            </div>

        
        
            <div class="order-infomation">
                <div class="just-center">
                    <div class="in-ctn">
                        <div class="cart-icon">
                            <i class='bx bx-comment-check'></i>
                            <h6 style="font-weight: 600;">ĐẶT HÀNG THÀNH CÔNG</h6>
                            <h5 style="font-weight: 600;" class="text-green">MÃ ĐƠN HÀNG: <a href="#">{{$id_cart}}</a></h5>
                        </div>

                        <img src="https://hoanghamobile.com/Content/web/content-icon/order-ok.png">

                        <p>Vui lòng kiểm tra thông tin đơn hàng trong tin nhắn, email và trang cá nhân của bạn.</p>
                    </div>
                </div>
            </div>


            <form class="cart-form" action="/" method="get">
                <div class="row">
                    <div class="control-button just-center">
                        <button type="submit"><i class='bx bx-home-alt' ></i> QUAY VỀ TRANG CHỦ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@include('layout-view.footer')