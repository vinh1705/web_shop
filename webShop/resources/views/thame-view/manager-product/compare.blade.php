@include('layout-view.header')

<section>
    <div class="container">
        <div class="compare">
            <table class="table tab-content table-bordered table-striped table-compare">
                <tbody><tr class="specs-group">
                    <th colspan="4">Thông tin chung</th>
                </tr>
                <tr class="specs equaHeight" data-obj="h3">


                    <td class="text " style="width:17.5%;">Hình ảnh, giá</td>
                        <td class="item image" style="width:27.5%">
                            <p style="text-align:right;">
                            <a href="{{route('CompareOne', ['id' => $id_product_compare, 'slug' => $slug_product_cpmpare])}}" style="display: flex;justify-content: center;align-items: center; padding: 9px;" class="remove" title="So sánh sản phẩm: {{$product_compare->name}}"><i style="    font-size: 14px;
                                font-weight: 900;" class='bx bx-minus'></i></a></p>
                            <div class="image">
                                <a href="#">
                                    <img src="{{asset('view-thame/img/'.$product_compare->img_banner)}}">
                                </a>
                            </div>
                            <h3 style="height: 52px;font-size: 15px;padding: 15px;text-align: center;"><a href="#">{{$product_compare->name}}</a></h3>
                            <div class="price-note">
                                <p class="price" style="font-size: 23px;">
                                    <strong>{{number_format($product_compare->price_sale)}} ₫</strong>
                                    <i>Giá Niêm Yết: <strike>{{number_format($product_compare->price)}} ₫</strike></i>
                                </p>
                                <p class="note"></p>
                            </div>
                        </td>



                        <td class="item image" style="width:27.5%">
                            <p style="text-align:right;"><a href="{{route('CompareOne', ['id' => $id_compare_product, 'slug' => $slug])}}" style="display: flex;justify-content: center;align-items: center; padding: 9px;" class="remove" title="{{$compare_product->name}}"><i style="    font-size: 14px;
                                font-weight: 900;" class='bx bx-minus'></i></a></p>
                            <div class="image">
                                <a href="/dien-thoai-di-dong/vivo-v20-se-chinh-hang">
                                    <img src="{{asset('view-thame/img/'.$compare_product->img_banner)}}">
                                </a>
                            </div>
                            <h3 style="height: 21px;"><a href="/dien-thoai-di-dong/vivo-v20-se-chinh-hang">{{$compare_product->name}}</a></h3>
                            <div class="price-note">
                                <p class="price">
                                    <strong>{{number_format($compare_product->price_sale)}} ₫</strong>
                                    <i>Giá Niêm Yết: <strike>{{number_format($product_compare->price)}} ₫</strike></i>
                                </p>
                                <p class="note"></p>
                            </div>
                        </td>
                        <td class="item" style="width:27.5%">
                            <div class="add-product">
                                <h3 style="height: 21px;">Bạn muốn so sánh thêm sản phẩm?</h3>
                                <div class="input">
                                    <input id="kwdCompare" type="text" placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                                </div>
                            </div>
                        </td>
                </tr>
                <tr class="specs">
                    <th class="text">Khuyến mại</th>
                        <td class="data">
                            @if (!is_null($sale_compare_product))
                                @foreach ($sale_compare_product as $key=>$value)
                                    <ol class="ol-specs">
                                        <li>{{$information_compare->resolution}}</li>
                                    </ol>
                                @endforeach
                            @endif
                        </td>
                        <td class="data">
                            @if (!is_null($sale_compare_product))
                                @foreach ($sale_product_compare as $key=>$value)
                                    <ul>
                                        {{$value->sale}}
                                    </ul>
                                @endforeach
                            @endif
                        </td>
                    <td>
                    </td>
                </tr>

                <tr class="specs">
                    <td class="text">Bảo hành</td>
                    <td class="data" style="padding: 15px;">
                    @if (!is_null($sale_compare_product))
                        @foreach ($sale_compare_product as $key=>$value)
                            <p>{{$value->bao_hanh}}</p>
                        @endforeach
                    @endif
                    </td>
                    <td class="data" style="padding: 15px;">
                        @if (!is_null($sale_product_compare))
                            @foreach ($sale_product_compare as $key=>$value)
                                <p>{{$value->bao_hanh}}</p>
                            @endforeach
                        @endif
                    </td>
                                            <td></td>
                </tr>

                        <tr class="specs-group">
                            <th class="text" colspan="4">Màn hình:</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Công nghệ màn hình</th>
                                    <td class="data">
                                        <span>{{$information_compare->technology_screen}}</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->technology_screen}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Độ phân giải</th>
                                    <td class="data">
                                        <ol class="ol-specs">
                                            <li>{{$information_compare->resolution}}</li>
                                        </ol>
                                    </td>
                                    <td class="data">
                                        <ol class="ol-specs">
                                            <li>{{$compare_information->resolution}}</li>
                                        </ol>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Màn hình rộng</th>
                                    <td class="data">
                                        <span>{{$information_compare->wide_screen}}"</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->wide_screen}}"</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                       
                        <tr class="specs-group">
                            <th class="text" colspan="4">Hệ điều hành &amp; CPU</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Chip xử lý (CPU)</th>
                                    <td class="data">
                                        <span>
                                            {{$information_compare->chip}}
                                        </span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->chip}}</span>
                                    </td>
                                <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Hệ điều hành</th>
                                    <td class="data">
                                        <span>{{$information_compare->HDH}}</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->HDH}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                        <tr class="specs-group">
                            <th class="text" colspan="4"> Bộ nhớ &amp; Lưu trữ</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">RAM</th>
                                    <td class="data">
                                        <span>{{$information_gb_ram_comnpare->ram}}GB</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->ram}}GB</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Bộ nhớ trong (ROM)</th>
                                    <td class="data">
                                        <span>{{$information_gb_ram_comnpare->gb}} GB</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->gb}} GB</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Bộ nhớ còn lại (khả dụng)</th>
                                    <td class="data">
                                        <span>Khoảng {{$information_gb_ram_comnpare->gb - 8}} GB</span>
                                    </td>
                                    <td class="data">
                                        <span>Khoảng {{$compare_information->gb - 8}} GB</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                        <tr class="specs-group">
                            <th class="text" colspan="4">Kết nối</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Băng tần 2G</th>
                                    <td class="data">
                                        <span></span>
                                    </td>
                                    <td class="data">
                                        <span></span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Băng tần 3G</th>
                                    <td class="data">
                                        <span></span>
                                    </td>
                                    <td class="data">
                                        <span></span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Mạng di động</th>
                                    <td class="data">
                                        <span>Hỗ trợ {{$information_compare->network}}G</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->network}} 4G</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Số khe sim</th>
                                    <td class="data">
                                        <span>{{$information_compare->sim}} Nano SIM</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->sim}} Nano SIM</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                        <tr class="specs-group">
                            <th class="text" colspan="4">trọng lượng</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Trọng lượng</th>
                                    <td class="data">
                                        <span>{{$information_compare->wieght}}</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->wieght}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Kích thước</th>
                                    <td class="data">
                                        <span>Dài 161.3 mm - Ngang 74.2 mm - Dày 7.38 mm</span>
                                    </td>
                                    <td class="data">
                                        <span>Dài 161 mm - Ngang 74.08 mm - Dày 7.83 mm</span>
                                    </td>
                                                                    <td></td>
                            </tr>

                        <tr class="specs-group">
                            <th class="text" colspan="4">Pin &amp; Sạc</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Dung lượng pin</th>
                                    <td class="data">
                                        <span>{{$information_compare->pin}} mAh</span>
                                    </td>
                                    <td class="data">
                                        <span>{{$compare_information->pin}} mAh</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Chức năng khác</th>
                                    <td class="data">
                                        <span></span>
                                    </td>
                                    <td class="data">
                                        <span></span>
                                    </td>
                                                                    <td></td>
                            </tr>
            </tbody></table>
        </div>
    </div>
</section>

@include('layout-view.footer')