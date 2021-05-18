@include('layout-view.header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<section>
    <div class="container">
        <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><span itemprop="name" content="Trang chủ"><i class="icon-home" title="Trang chủ"></i></span></a>
                <meta itemprop="position" content="1">
            </li>
        
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/so-sanh"><span itemprop="name" content="So sánh sản phẩm">So sánh sản phẩm</span></a>
                <meta itemprop="position" content="2">
            </li>
        
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a class="actived" itemprop="item" href="https://hoanghamobile.com/so-sanh/iphone-11-128gb-chinh-hang-vn-a-ss.67"><span itemprop="name" content="So sánh sản phẩm So sánh Apple iPhone 11 - 128GB - Chính hãng VN/A"> So sánh Apple iPhone 11 - 128GB - Chính hãng VN/A</span></a>
                <meta itemprop="position" content="3">
            </li>
        </ol>
    </div>
</section>
<section>
    <div class="container">
        <div class="compare">
            <table class="table tab-content table-bordered table-striped table-compare">
                <tbody><tr class="specs-group">
                    <th colspan="3">Thông tin chung</th>
                </tr>
                <tr class="specs equaHeight" data-obj="h3">
                    <td class="text " style="width:17.5%;">Hình ảnh, giá</td>
                        <td class="item image" style="width:41.25%">
                            <p style="text-align:right;"><a href="#"  style="display: flex;justify-content: center;align-items: center; padding: 9px;"  class="remove" title="So sánh sản phẩm: "><i style="font-size: 14px;
                                font-weight: 900;" class='bx bx-minus'></i></a></p>
                            <div class="image">
                                <a href="#">
                                    <img src="{{asset('view-thame/img/'.$product_compare_add->img_banner)}}">
                                </a>
                            </div>
                            <h3  style="height: 52px;font-size: 15px;padding: 15px;text-align: center;F"><a href="#">{{$product_compare_add->name}}</a></h3>
                            <div class="price-note">
                                <p class="price">
                                    <strong>{{number_format($product_compare_add->price_sale)}} ₫ </strong>
								    <i>Giá Niêm Yết: <strike>{{number_format($product_compare_add->price)}} ₫</strike></i>
                                </p>
                            </div>
                        </td>
                        <td class="item" style="width:41.25%">
                            <div class="add-product">
                                <h3 style="height: 21px;">Bạn muốn so sánh thêm sản phẩm?</h3>
                                <div class="input">
                                    <input id="compare_search" name="compare_search" type="text" placeholder="Tìm kiếm sản phẩm" autocomplete="off">
                                </div>
                            </div>
                            <div class="add-product" style="display: none;" id="search_compare_product">
                                {{-- @if (count($table_product_compare) > 0) --}}
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Tên</th>
                                            <th>Giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($table_product_compare as $key=>$value) --}}
                                            <tr>
                                                {{-- <td><img style="width: 35%;" src="{{asset('view-thame/img/'. $value->img_banner)}}"></td>
                                                <td>{{$value->name}}</td>
                                                <td>{{number_format($value->price_sale)}} đ</td> --}}
                                            </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                {{-- @endif --}}
                                    <script type="text/javascript">
                                        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                                            $('#compare_search').on('keyup', function() {
                                                var value = $('#compare_search').val();
                                                if (value == '') {
                                                    $('#search_compare_product').html('');
                                                    $('$search_compare_product').hide();
                                                }else{
                                                    $.ajax({
                                                        method: 'get',
                                                        url: '{{ route('CompareSearch') }}',
                                                        data:JSON.stringify({
                                                            compare_search:value
                                                        }),
                                                        dataType:'json',
                                                        haeders: {
                                                            'Accept' : 'application/json',
                                                            'Content-Type' : 'application/json' 
                                                        },
                                                        success: function (data) {
                                                            // alert (data);
                                                            console.log(data);
                                                            // $('tbody').html(data);
                                                        }
                                                    })
                                                    // $('#search_compare_product').show();
                                                } 
                                            })

                                            // $.ajax({
                                            //     url: 'compare-search',
                                            //     type: 'get',
                                            //     data: {
                                            //         'compare_search': $value
                                            //     },
                                            //     success:function (data) {
                                            //         // alert (231312);
                                            //         $('tbody').html(data);
                                            //     }
                                            // })
                                            // $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                                        // });
                                    </script>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr class="specs">
                        <th class="text">Khuyến mại</th>
                            <td class="data">
                                <ul>
                                    @if (!is_null($sale_add_one))
                                        @foreach ($sale_add_one as $key=>$value)
                                            <ol class="ol-specs">
                                                <li>{{$value->sale}}</li>
                                            </ol>
                                        @endforeach
                                    @endif
                                </ul>
                            </td>
                        <td></td>
                    </tr>

                <tr class="specs">
                    <th class="text">Bộ sản phẩm tiêu chuẩn</th>
                        <td class="data">
                            
                        </td>
                                            <td></td>
                </tr>

                <tr class="specs">
                    <td class="text">Bảo hành</td>
                    <td class="data" style="padding: 15px;">
                        @if (!is_null($sale_add_one))
                            @foreach ($sale_add_one as $key=>$value)
                                <p>{{$value->bao_hanh}}</p>
                            @endforeach
                        @endif
                    </td>
                                            <td></td>
                </tr>

                        <tr class="specs-group">
                            <th class="text" colspan="3">Màn hình:</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Công nghệ màn hình</th>
                                    <td class="data">
                                        <span>{{$information_add_one->technogogy_screen}}</span>
                                    </td>
                                <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Độ phân giải</th>
                                    <td class="data">
                                        <ol class="ol-specs">
                                                <li>{{$information_add_one->resolution}}s</li>
                                        </ol>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Màn hình rộng</th>
                                    <td class="data">
                                        <span>{{$information_add_one->wide_screen}}"</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            
                        <tr class="specs-group">
                            <th class="text" colspan="3">Hệ điều hành &amp; CPU</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Chip xử lý (CPU)</th>
                                    <td class="data">
                                        <span>{{$information_add_one->chip}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Hệ điều hành</th>
                                    <td class="data">
                                        <span>{{$information_add_one->HDH}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            
                            
                        <tr class="specs-group">
                            <th class="text" colspan="3"> Bộ nhớ &amp; Lưu trữ</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">RAM</th>
                                    <td class="data">
                                        @if (!is_null($gb_ram_add_one))
                                            @foreach ($gb_ram_add_one as $key=>$value)
                                            <ol class="ol-specs">
                                                <li>{{$value->ram}}GB / RAM</li>
                                            </ol>
                                            @endforeach
                                        @endif
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Bộ nhớ trong (ROM)</th>
                                    <td class="data">
                                        @if (!is_null($gb_ram_add_one))
                                            <ol class="ol-specs">
                                                <li>{{$value->gb}}GB / ROM</li>
                                            </ol>
                                        @endif
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Bộ nhớ còn lại (khả dụng)</th>
                                    <td class="data">
                                        @if (!is_null($gb_ram_add_one))
                                            @foreach ($gb_ram_add_one as $key=>$value)
                                                <ol class="ol-specs">
                                                    <li>{{$value->gb - 5}}GB / ROM</li>
                                                </ol>
                                            @endforeach
                                        @endif
                                    </td>
                                <td></td>
                            </tr>
                            
                            
                        <tr class="specs-group">
                            <th class="text" colspan="3">Kết nối</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Băng tần 2G</th>
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
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Mạng di động</th>
                                    <td class="data">
                                        <span>Hỗ trợ {{$information_add_one->network}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            <tr class="specs">
                                <th class="text">Số khe sim</th>
                                    <td class="data">
                                        <span>{{$information_add_one->sim}}</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            
                           
                        <tr class="specs-group">
                            <th class="text" colspan="3">Thiết kế - trọng lượng</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Thiết kế</th>
                                    <td class="data">
                                        <span>Nguyên khối</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                           
                            <tr class="specs">
                                <th class="text">Trọng lượng</th>
                                    <td class="data">
                                        <span>{{$information_add_one->wieght}} g</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                        <tr class="specs-group">
                            <th class="text" colspan="3">Pin &amp; Sạc</th>
                        </tr>
                            <tr class="specs">
                                <th class="text">Dung lượng pin</th>
                                    <td class="data">
                                        <span>{{$information_add_one->pin}} mAh</span>
                                    </td>
                                                                    <td></td>
                            </tr>
                            
                                <th class="text">Chức năng khác</th>
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