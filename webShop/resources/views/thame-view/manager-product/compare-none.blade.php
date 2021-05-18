@include('layout-view.header')

<section>
    <div class="container">
        <div class="compare">

            <table class="table tab-content table-bordered table-striped table-compare">
                <tbody><tr class="specs-group">
                    <th colspan="2">Thông tin chung</th>
                </tr>
                <tr class="specs equaHeight" data-obj="h3">
                    <td class="text " style="width:17.5%;">Hình ảnh, giá</td>
                                            <td class="item" style="width:82.5%">
                            <div class="add-product">
                                <h3 style="height: 19px;">Bạn muốn so sánh thêm sản phẩm?</h3>
                                <div class="input">
                                    <input id="kwdCompare" type="text" placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                                </div>
                            </div>
                        </td>
                </tr>
                <tr class="specs">
                    <th class="text">Khuyến mại</th>
                                            <td></td>
                </tr>

                <tr class="specs">
                    <th class="text">Bộ sản phẩm tiêu chuẩn</th>
                                            <td></td>
                </tr>

                <tr class="specs">
                    <td class="text">Bảo hành</td>
                                            <td></td>
                </tr>

            </tbody></table>
        </div>
    </div>
</section>

@include('layout-view.footer')