@include('layout-view.header')
<section>
    <div class="container">
        <div class="check-order-index">
            <div class="check-order-form">
                <h1>Kiểm tra đơn hàng của bạn</h1>
                <form onsubmit="return validFormCheckOrder(this);">
                    <input name="__RequestVerificationToken" type="hidden" value="JHG5GtJ66yT_Z88mnNZ5b13Y1CG_v45XhCjampCTAjpfzOUJ-D_waSym2y-qNXL-WEtdYZZWvZWh-LFwkLcIWiWYq7A1">
                    <div class="input">
                        <input type="text" id="OrderID" name="OrderID" title="Mã đơn hàng" placeholder="Vui lòng nhập mã đơn hàng *" data-required="1">
                    </div>
                    <div class="button">
                        <button type="submit">TRA CỨU</button>
                    </div>
                </form>
            </div>


            <div class="you-know">
                 <div class="icon">
                    <img src="https://hoanghamobile.com/Content/web/content-icon/icon-youknow.png">
                </div>
                <div class="ctn">
                    <div class="text">
                        <strong>ĐĂNG NHẬP SẼ GIÚP BẠN QUẢN LÝ ĐƠN HÀNG CỦA MÌNH VÀ TRẢI NGHIỆM WEBSITE TỐT HƠN</strong>
                        <a rel="modal" href="/Account/Login">ĐĂNG NHẬP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout-view.footer')