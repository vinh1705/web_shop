@include('layout-view.header')
<section>
    <div class="container">

        <div class="cart cart-checkout">
            <div class="header">
                <div class="back">
                    <a href="javascript:window.history.back();">
                        <i class="bx bx-arrow-back"></i>
                        <strong>Quay lại</strong>
                    </a>
                </div>
            </div>

            <div class="just-center">
                <div class="cart-icon">
                    <i class='bx bx-message-square-check'></i>
                    <label>THÔNG TIN ĐƠN HÀNG SỐ <span class="text-orange">{{$id_cart}}</span></label>
                </div>
            </div>

            <div class="order-infomation">
<h3>1. Thông tin người đặt hàng</h3>
<table class="table talbe-order">
    <tbody><tr>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label" style="width:110px;">Họ tên</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">{{$id_order->name}}</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label" style="width:75px;">Điện thoại</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">{{$id_order->phone}}</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label" style="width:75px;">Email</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">{{$id_order->email}}</td>
    </tr>
    <tr>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Phương thức</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content">Thanh toán khi nhận hàng</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Vận chuyển</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content" colspan="3">Miễn phí vận chuyển</td>
    </tr>
    <tr>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Địa chỉ</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="content" colspan="5">{{$id_order->address}}</td>
    </tr>
    <tr>
        <td style="font-size: 14px;padding: 1px;border: 0px;" class="label">Ghi chú đặt hàng</td>
        <td style="font-size: 14px;padding: 1px;border: 0px;" colspan="5">{{$id_order->note}}</td>
    </tr>
</tbody></table>
</div>

<div class="order-infomation">
<h3>2. Danh sách sản phẩm đặt hàng</h3>
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
                <td align="center" valign="middle" rowspan="2">{{$id_cart}}</td>
                <td><strong>{{$product_cart->name}}</strong></td>
                <td align="center">{{$gb_ram_cart->gb}}GB</td>
                <td align="center">{{$color_product_cart->color_product}}</td>
                <td align="center">1</td>
                <td align="center">{{number_format($gb_ram_cart->price)}} ₫</td>
                <td align="center">{{number_format($gb_ram_cart->price)}} ₫</td>
            </tr>
                    <tr class="text-darkgray">
                        <td colspan="6"><label class="bag">KM</label> <i>Giảm thêm 1.000.000đ khi thu cũ, đổi mới lên đời iPhone 12 Series</i></td>
                    </tr>
    <tr class="no-border">
        <td colspan="6" align="right">Tổng tiền:</td>
        <td>{{number_format($gb_ram_cart->price)}} ₫</td>
    </tr>
    <tr class="no-border">
        <td colspan="6" align="right">Giảm giá:</td>
        <td>-{{$product_cart->percent}}%</td>
    </tr>
    <tr class="no-border">
        <td colspan="6" align="right">Tổng tiền thanh toán:</td>
        <td><strong class="text-red">{{number_format($gb_ram_cart->price)}} ₫</strong></td>
    </tr>
</tbody></table>
</div>


<div class="order-infomation">
<h3>3. Lịch sử đơn hàng</h3>
<table class="table talbe-order table-border">
    <tbody><tr>
        <th>#</th>
        <th>Trạng thái</th>
        <th>Người gửi</th>
        <th>Ghi chú</th>
        <th>Thời gian</th>
    </tr>

        <tr>
            @if (!is_null($adm_rep_user_cart))
                {{-- @dd($adm_rep_user_cart) --}}
                <td>{{$adm_rep_user_cart->id}}</td>
                <td>Đã xác nhận thông tin đặt hàng</td>
                <td>{{$adm_rep_user_cart->name}}</td>
                <td>{!! $adm_rep_user_cart->comment !!}</td>
            
                <?php
                    $hours = Carbon\Carbon::parse($adm_rep_user_cart->created_at)->diffInHours(now(), false);
                    $minute = Carbon\Carbon::parse($adm_rep_user_cart->created_at)->diffInMinutes(now(), false);
                    $seconds = Carbon\Carbon::parse($adm_rep_user_cart->created_at)->diffInSeconds(now(), false);
                    $days = Carbon\Carbon::parse($adm_rep_user_cart->created_at)->diffInDays(now(), false);
                ?>
                @if ($minute < 1 && $seconds < 59)
                    <td>{{$seconds}} Giây trước</td>
                @endif

                @if ($minute >= 1 && $minute < 60)
                    <td>{{$minute}} phút trước</td>
                @endif

                @if ($hours > 1 && $hours < 24)
                    <td>{{$hours}} Giờ trước</td>
                @endif

                @if ($hours > 23)
                    <td>{{$days}} Ngày trước</td>
                @endif
            @endif
        </tr>
            <tr>
                <td>2</td>
                <td>Gửi yêu cầu đặt hàng</td>
                <td>{{$id_order->name}}</td>
                <td>{{$id_order->note}}</td>
                <?php
                    $hours = Carbon\Carbon::parse($id_order->created_at)->diffInHours(now(), false);
                    $minute = Carbon\Carbon::parse($id_order->created_at)->diffInMinutes(now(), false);
                    $seconds = Carbon\Carbon::parse($id_order->created_at)->diffInSeconds(now(), false);
                ?>
                @if ($minute < 1 && $seconds < 59)
                    <td>{{$seconds}} giây trước</td>
                @endif

                @if ($minute >= 1 && $minute < 60)
                    <td>{{$minute}} phút trước</td>
                @endif

                @if ($hours > 1)
                    <td>{{$hours}} giờ trước</td>
                @endif

                
                
            </tr>
        </tbody>
    </table>
</div>


       
        </div>
    </div>
</section>