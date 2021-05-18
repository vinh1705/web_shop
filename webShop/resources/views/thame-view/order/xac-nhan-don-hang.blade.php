@include('layout-view.header')
<section>
    <div class="container">

        <div class="cart cart-checkout">
            <div class="header">
                <div class="back">
                    <a href="{{route('Information',['id' => $id_categories, 'slug' => $slug, 'id_pr' => $id_pr])}}">
                        <i class="bx bx-arrow-back"></i>
                        <strong>Quay lại</strong>
                    </a>
                </div>
            </div>

            <div class="just-center">
                <div class="cart-icon">
                    <i class='bx bx-message-square-check'></i>
                    <label>Vui lòng kiểm tra lại thông tin đặt hàng dưới đây</label>
                </div>
            </div>
            
           
            <div class="order-infomation">
                <h6 style="font-weight: 700;">1. Thông tin người đặt hàng</h6>
                <table class="table talbe-order">
                    <tbody><tr>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label" style="width:110px;">Họ tên</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">{{$name_user}}</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label" style="width:75px;">Điện thoại</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">{{$phone_user}}</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label" style="width:75px;">Email</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">{{$email_user}}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Phương thức</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">Thanh toán khi nhận hàng</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Vận chuyển</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content" colspan="3">Miễn phí vận chuyển</td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Địa chỉ</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content" colspan="5">{{$address}}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Ghi chú đặt hàng</td>
                        <td style="font-size: 14px;padding: 1px;border: 0px;" colspan="5">{{$note_user}}</td>
                    </tr>
                </tbody></table>
            </div>

<div class="order-infomation">
    <h5 style="font-weight: 600;">2. Danh sách sản phẩm đặt hàng</h5>
    <table class="table table-border talbe-order table-product">
        <tbody><tr>
            <th>#</th>
            <th>Tên sản phẩm</th>
            <th>Phiên bản</th>
            <th>Màu sắc</th>
            <th>SL</th>
            <th>Giá tiền</th>
            <th>Tổng (SLxG)</th>
        </tr>

                <tr>
                    <td style="font-size: 14px;padding: 1px;" align="center" valign="middle" rowspan="3" >1</td>
                    <td style="font-size: 14px;padding: 1px;"><strong>{{$product_cart->name}}</strong></td>
                    <td style="font-size: 14px;padding: 1px;" align="center">64GB</td>
                    <td style="font-size: 14px;padding: 1px;" align="center">Black</td>
                    <td style="font-size: 14px;padding: 1px;" align="center">1</td>
                    <td style="font-size: 14px;padding: 1px;" align="center">{{number_format($product_cart->price_sale)}} ₫</td>
                    <td style="font-size: 14px;padding: 1px;" align="center">{{number_format($product_cart->price_sale)}} ₫</td>
                </tr>
                        <tr class="text-darkgray">
                            <td style="font-size: 14px;padding: 1px;" colspan="4"><label class="bag">KM</label> <i> Sản phẩm đang thuộc chương trình Flash sale. mua chỉ với giá 15,950,000</i></td>
                            <td style="font-size: 14px;padding: 1px;" align="center">-00 ₫</td>
                            <td style="font-size: 14px;padding: 1px;" align="center">-00 ₫</td>
                        </tr>
                        <tr class="text-darkgray">
                            <td style="font-size: 14px;padding: 1px;" colspan="6"><label class="bag">KM</label> <i>Giảm thêm 1.000.000đ khi thu cũ, đổi mới lên đời iPhone 12 Series</i></td>
                        </tr>
        <tr class="no-border">
            <td colspan="6" align="right">Tổng tiền:</td>
            <td>{{number_format($product_cart->price)}} ₫</td>
        </tr>
        <tr class="no-border">
            <td colspan="6" align="right">Giảm giá:</td>
            <td>{{number_format($product_cart->percent)}}%</td>
        </tr>
        <tr class="no-border">
            <td colspan="6" align="right">Tổng tiền thanh toán:</td>
            <td><strong class="text-red">{{number_format($product_cart->price_sale)}} ₫</strong></td>
        </tr>
    </tbody></table>
</div>
<form class="cart-form" action="{{route('CartSuccess', ['id_cart' => $id_cart])}}" method="get">
    @csrf
    <input name="__RequestVerificationToken" type="hidden" value="Kv7SdZ7Zg0iLpG8NlVa5mMcofQO0uVr65yPEU98Q6cw6evVjJEpaNKuK-gy7skA5FKZKzPvW3dccts0cnSyNziGEQLI1">
        <div class="row">   
            <div class="control-button just-center">
                <button type="submit">XÁC NHẬN ĐẶT HÀNG</button>
            </div>
        </div>
    </form>
</div>
</div>
</section>
@include('layout-view.footer')


