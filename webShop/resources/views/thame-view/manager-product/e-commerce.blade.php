@include('layout-view.header')

<section>
    <div class="container">
        <div class="product-details">
            <div class="top-product" style="margin: 20px;">
                <h5><strong style="padding: 15px;">
                    {{$product_information->name}}
                </strong></h5>
            </div>
            
            <div class="product-details-container">
                <div class="product-image">

                    <div class="love-this-button">
                            <a title="Thêm vào sản phẩm yêu thích" href="javascript:wishProduct(67, false)">
                                <i class='bx bx-heart' ></i>
                            </a>
                    </div>

                    <div id="imagePreview" data-jssor-slider="1" style="width: 380px; height: 370px; visibility: visible;">
                        <!-- Loading Screen -->
                        
                    
                        <div style="background-image: url('{{(asset('viewthame/img/'.$product_information->img_banner))}}'); background-repeat: no-repeat;background-size: 100%;display: block; position: absolute; top: 0px; left: 0px; width: 370px; height: 370px;"><div style="display: block; position: absolute; top: 0px; left: 0px; width: 370px; height: 370px;"><div data-u="slides" class="viewer" style="margin: 0px; padding: 0px; transform-style: flat; z-index: 0; position: absolute; pointer-events: none; top: 0px; left: 0px;"><div style="width: 370px; height: 370px; top: 0px; left: 0px; display: block; position: absolute; z-index: 0;"></div></div><div data-u="slides" class="viewer" style="margin: 0px; padding: 0px; transform-style: flat; z-index: 0; position: absolute; overflow: hidden; top: 0px; left: 0px;">
                            {{-- Lặp --}}
                                <div style="width: 370px; height: 370px; top: 0px; left: -370px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;">
                                    <div data-u="bg" style="width: 370px; height: 370px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"><img data-u="image" src="{{asset('view-thame/img/'. $product_information->img_banner)}}" title="Apple iPhone 11 - 128GB - Chính hãng VN/A Yellow" alt="Apple iPhone 11 - 128GB - Chính hãng VN/A Yellow" border="0" style="width: 370px; height: 370px; top: 0px; left: 0px; display: block; position: absolute; max-width: 10000px; z-index: 1;" data-events="auto" data-display="block"></div><a data-fancybox="gallery" rel="group" href="{{asset('view-thame/img/'.$product_information->img_banner)}}" style="width: 370px; height: 370px; top: 0px; left: 0px; display: block; position: absolute; z-index: 1;" data-events="auto" data-display="block"></a>
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1; display: none;">
                                        <img class="i" src="{{asset('view-thame/img/'. $product_information->img_banner)}}" data-events="auto" data-display="inline" style="z-index: 1;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                        <!-- Thumbnail Navigator -->
                        <div style="display: block; position: absolute; bottom: 8px; left: 30px; width: 320px; height: 80px;"><div data-u="thumbnavigator" class="jssort11" data-autocenter="1" data-scale-bottom="0.75" data-jssor-thumb="1" data-jssor-slider="1" style="width: 320px; height: 80px; visibility: visible; left: 0px; top: 0px;"><div style="display: block; position: absolute; top: 0px; left: -30px; width: 370px; height: 80px;"><div class="bg-shadow" style="top: 0px; left: 0px; width: 370px; height: 80px; position: absolute; box-shadow: rgba(0, 0, 0, 0.16) 0px 4px 6px; border-radius: 8px;"></div></div><div style="display: block; position: absolute; top: 7.5px; left: 0px; width: 320px; height: 65px;"><div style="display: block; position: absolute; top: 0px; left: 0px; width: 320px; height: 65px;"><div data-u="slides" style="cursor: pointer; position: absolute; overflow: hidden; width: 320px; height: 65px; left: 0px; top: 0px; margin: 0px; padding: 0px; transform-style: flat; z-index: 0; pointer-events: none;"><div style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; z-index: 0;"></div></div><div data-u="slides" style="cursor: pointer; position: absolute; overflow: hidden; width: 320px; height: 65px; left: 0px; top: 0px; margin: 0px; padding: 0px; transform-style: flat; z-index: 0;">
                                
                            <div style="width: 65px; height: 65px; top: 0px; left: -75px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                        <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                    </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: -75px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: -75px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: -22.5px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: 52.5px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: 127.5px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p pav" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: 202.5px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: 277.5px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: 352.5px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: -75px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div><div style="width: 65px; height: 65px; top: 0px; left: -75px; position: absolute; z-index: 1; overflow: hidden; transform-style: flat;"><div data-u="bg" style="width: 65px; height: 65px; top: 0px; left: 0px; display: block; position: absolute; overflow: hidden; background-color: rgba(0, 0, 0, 0); background-image: none;"></div><div data-u="prototype" class="p" data-jssor-button="1" style="left: 0px; top: 0px; z-index: 1;" data-events="auto" data-display="block">
                                    <div data-u="thumb" data-events="auto" data-display="block" style="z-index: 1;" class="tp">
                                                <img class="i" src="https://hoanghamobile.com/i/preview/Uploads/2020/11/06/apple-ipad-pro-12-9-2020.png" data-events="auto" data-display="block" style="z-index: 2;">
                                            </div>
                                </div></div></div></div></div><div style="display: block; position: absolute; top: 0px; left: -30px; width: 30px; height: 80px;"><span class="slider-t-l" style="top: 0px; left: 0px;">
                                <i class='bx bxs-right-arrow' ></i>
                            </span></div><div style="display: block; position: absolute; top: 0px; right: -20px; width: 30px; height: 80px;"><span class="slider-t-r" style="top: 0px; left: 0px;">
                                <i class='bx bxs-right-arrow' ></i>
                            </span></div></div></div>
                        


                        <!-- Arrow Navigator -->
                        <div style="display: block; position: absolute; top: 160px; left: 0px; width: 50px; height: 50px;"><span data-u="arrowleft" class="slider-l" data-autocenter="2" data-jssor-button="1" data-nofreeze="1" style="top: 0px; left: 0px;">
                            <i class='bx bxs-left-arrow' style="background: #fff;"></i>
                        </span></div>
                        <div style="display: block; position: absolute; top: 160px; right: 10px; width: 50px; height: 50px;"><span data-u="arrowright" class="slider-r" data-autocenter="2" data-jssor-button="1" data-nofreeze="1" style="top: 0px; left: 0px;">
                            <i class='bx bxs-right-arrow' style="background: #fff;"></i>
                        </span></div>

                    </div>
                </div>

                    <div class="product-center">
                        <p class="price current-product-price">
                            <strong>{{number_format($product_information->price_sale)}} ₫ </strong>
                            <i>Giá Niêm Yết: <strike>{{number_format($product_information->price)}} ₫</strike></i>
                        </p>
                        <p class="freeship" style="padding: 7px;">
                            <i class='bx bxs-plane'></i><span style="font-size: 13px;">Miễn phí vận chuyển toàn quốc</span>
                        </p>

                            <div class="product-option version">
                            <strong class="label">Lựa chọn phiên bản</strong>
                            <div class="options" id="versionOption">
                                @foreach ($gb_ram as $key=>$value)
                                    <div style="font-size: 12px;text-decoration: none;padding: 5px 9px;" data-name="Black" data-pricenote="" data-buyonline="true" data-bestprice="{{number_format($value->price)}}" data-lastprice="6,690,000 ₫" data-idx="0" data-hex="#000000" data-title="Đen" data-id="1" data-sku="SA32128B" class="item ins-init-condition-tracking">
                                        <a href="#" style="text-decoration: none;">
                                            <span><label style="margin: 0;">{{$value->gb}}GB</></label></span>
                                            <strong>{{number_format($value->price)}} ₫</strong>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    
                            <div class="product-option color" style="font-size: 12.4px;">
                                <strong style="border: 1px solid #9c9c9c;font-weight: 600;font-size: 13px;" class="label">Lựa chọn màu và xem địa chỉ còn hàng</strong>
                                <div class="options" id="colorOptions">
                                    @foreach ($color_product as $key=>$value)
                                        <div style="padding: 3px 6px;" data-name="{{$value->color_product}}" data-pricenote="" data-buyonline="true" data-bestprice="{{number_format($value->price)}} ₫" data-lastprice="{{number_format($value->price)}} ₫" data-idx="0" data-hex="#000000" data-title="{{$value->color_product}}" data-id="1" data-sku="IPH12P512B" class="item selected ins-init-condition-tracking">
                                            <label><strong name="color_product" value="{{$value->color_product}}">{{$value->color_product}}</strong></label>
                                            <strong name="color_price" value="{{number_format($value->price)}}">{{number_format($value->price)}} ₫</strong>
                                            <div class="colorGuide" style="background:#fffc17">
                                                <label><strong>{{$value->color_product}}</strong></label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    

                        <div class="product-promotion">
                            <strong class="label">KHUYẾN MÃI</strong>
                            <ul>
                                @foreach ($sale_product as $key=>$value)
                                    <li><span class="bag">KM {{$key}}</span></li>
                                    <li style="font-size: 13.8px;">
                                        {{$value->sale}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @include('thame.errors.error')
                        <div class="product-action" style="align-items: center;display: flex;">
                            <a style="text-decoration: none;" title="Mua ngay" href="{{route('Cart', ['id_categories' => $id_categories, 'id' => $product_information->id, 'slug' => $product_information->slug])}}" class="btn-red btnbuy"><strong>MUA NGAY</strong><span> Trả tiền khi nhận hàng (COD)</span></a>'
                            {{-- <a class="btn-red btnbuy" href="{{route('Cart', ['id_categories' => $id_categories, 'id' => $product_information->id, 'slug' => $product_information->slug])}}">fsafasf</a> --}}
                            <a style="height: 42px;" title="Thêm vào giỏ hàng" href="{{route('AddToCarts', ['id_categories' => $id_categories, 'id' => $product_information->id, 'slug' => $product_information->slug])}}" class="add-cart btn-orange btnbuy btn-icon sp-goal-85-196-3-1615287685689"><i class='bx bx-cart' ></i></a>
                        </div>

                        
                    </div>
                    <div class="product-shop">
                        <div class="warranty">
                            <h4>THÔNG TIN BẢO HÀNH</h4>
                            @foreach ($sale_product as $key=>$value)
                                <p><i class='bx bx-check-shield' ></i><span>{{$value->bao_hanh}}.</span></p>
                            @endforeach
                        </div>
                    
                        <div class="check-stock" id="marketFilter">
                            <div class="city">
                                <p>Chọn màu và xem địa chỉ còn hàng</p>
                                <span href="javascript:;" class="button"><i class='bx bx-map' ></i><label>Bà Rịa - Vũng Tàu</label></span>
                                <div class="list">
                                    <ul>
                                            <li data-id="0" id="city_0"><a href="javascript:marketFilters(0);">Xem tất cả</a></li>
                                             <li data-id="1" id="city_1" class="instock" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128Y&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(1);">Hà Nội</a></li>
                                            <li data-id="50" id="city_50" class="outstock" data-sku="[&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(50);">TP HCM</a></li>
                                            <li data-id="49" id="city_49" class="outstock selected" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128B&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(49);">Bà Rịa - Vũng Tàu</a></li>
                                            <li data-id="15" id="city_15" class="outstock" data-sku="[&quot;IPN11128P&quot;]"><a href="javascript:marketFilters(15);">Bắc Giang</a></li>
                                            <li data-id="18" id="city_18" class="outstock" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;,&quot;IPN11128G&quot;]"><a href="javascript:marketFilters(18);">Bắc Ninh</a></li>
                                            <li data-id="35" id="city_35" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;]"><a href="javascript:marketFilters(35);">Bình Định</a></li>
                                            <li data-id="47" id="city_47" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128G&quot;]"><a href="javascript:marketFilters(47);">Bình Dương</a></li>
                                            <li data-id="45" id="city_45" class="instock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;,&quot;IPN11128Y&quot;]"><a href="javascript:marketFilters(45);">Bình Phước</a></li>
                                            <li data-id="39" id="city_39" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;]"><a href="javascript:marketFilters(39);">Bình Thuận</a></li>
                                            <li data-id="32" id="city_32" class="outstock" data-sku="[&quot;IPN11128G&quot;]"><a href="javascript:marketFilters(32);">Đà Nẵng</a></li>
                                            <li data-id="48" id="city_48" class="outstock" data-sku="[&quot;IPN11128B&quot;]"><a href="javascript:marketFilters(48);">Đồng Nai</a></li>
                                            <li data-id="19" id="city_19" class="outstock" data-sku="[&quot;IPN11128P&quot;]"><a href="javascript:marketFilters(19);">Hải Dương</a></li>
                                            <li data-id="37" id="city_37" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(37);">Khánh Hòa</a></li>
                                            <li data-id="44" id="city_44" class="outstock" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128R&quot;]"><a href="javascript:marketFilters(44);">Lâm Đồng</a></li>
                                            <li data-id="6" id="city_6" class="outstock" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(6);">Lào Cai</a></li>
                                            <li data-id="51" id="city_51" class="instock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;,&quot;IPN11128Y&quot;]"><a href="javascript:marketFilters(51);">Long An</a></li>
                                            <li data-id="38" id="city_38" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(38);">Ninh Thuận</a></li>
                                            <li data-id="16" id="city_16" class="outstock" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(16);">Phú Thọ</a></li>
                                            <li data-id="29" id="city_29" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(29);">Quảng Bình</a></li>
                                            <li data-id="34" id="city_34" class="outstock" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(34);">Quảng Ngãi</a></li>
                                            <li data-id="14" id="city_14" class="instock" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;,&quot;IPN11128Y&quot;]"><a href="javascript:marketFilters(14);">Quảng Ninh</a></li>
                                            <li data-id="46" id="city_46" class="outstock" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;]"><a href="javascript:marketFilters(46);">Tây Ninh</a></li>
                                            <li data-id="12" id="city_12" class="outstock" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(12);">Thái Nguyên</a></li>
                                            <li data-id="17" id="city_17" class="outstock" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><a href="javascript:marketFilters(17);">Vĩnh Phúc</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            

                            <div class="store">
                                <ul>
                                            <li class="outstock city_1 hide" data-sku="[&quot;IPN11128G&quot;]"><span>382 Nguyễn Văn Cừ, Hà Nội <a title="382 Nguyễn Văn Cừ - HN" href="/382-nguyen-van-cu-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="instock city_1 hide" data-sku="[&quot;IPN11128Y&quot;]"><span>102 Phố Xốm, Phú Lãm, Hà Đông, Hà Nội <a title="102 Phố Xốm - Hà Đông - HN" href="/102-pho-xom-phu-lam-ha-dong-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_1 hide" data-sku="[&quot;IPN11128P&quot;]"><span>Số 91, Tổ 04, TT. Đông Anh, H. Đông Anh, Hà Nội <a title="Số 91, Tổ 04, TT. Đông Anh - HN" href="/so-91-to-04-tt-dong-anh-h-dong-anh-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_1 hide" data-sku="[&quot;IPN11128G&quot;]"><span>12 Điện Biên Phủ, Hà Nội <a title="12 Điện Biên Phủ - HN" href="/12-dien-bien-phu-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_1 hide" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;]"><span>Số 20 Khu 7, Thị trấn Trạm Trôi, Huyện Hoài Đức, Hà Nội <a title="Chi nhánh Trạm Trôi - HN" href="/so-20-khu-7-thi-tran-tram-troi-huyen-hoai-duc-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_1 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128R&quot;]"><span>176 Chùa Thông, P. Sơn Lộc, TX Sơn Tây, Hà Nội <a title="176 Chùa Thông, P. Sơn Lộc, TX Sơn Tây, Hà Nội" href="/176-chua-thong-p-son-loc-tx-son-tay-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_1 hide" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128W&quot;]"><span>101 Kim Mã - Phường Kim Mã - Quận Ba ĐÌnh - Hà Nội <a title="101 Kim Mã - Phường Kim Mã - Quận Ba ĐÌnh - Hà Nội" href="/101-kim-ma-phuong-kim-ma-quan-ba-dinh-ha-noi">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_50 hide" data-sku="[&quot;IPN11128W&quot;]"><span>436 Quang Trung, Phường 10, Quận Gò Vấp, TP.HCM <a title="436 Quang Trung, Gò Vấp, TP.HCM" href="/436-quang-trung-phuong-10-quan-go-vap-tp-hcm">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_6 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><span>Lô 10, Ngã 6 Phố Lý Công Uẩn, TP. Lào Cai <a title="Lô 10, Ngã 6 Phố Lý Công Uẩn, TP. Lào Cai" href="/lo-10-nga-6-pho-ly-cong-uan-tp-lao-cai">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_12 hide" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;]"><span>135A Cách Mạng Tháng 8, TP. Thái Nguyên <a title="135A Cách Mạng Tháng 8, TP. Thái Nguyên" href="/135a-duong-cach-mang-t8-tp-thai-nguyen">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_14 hide" data-sku="[&quot;IPN11128P&quot;]"><span>297 Quang Trung, TP. Uông Bí, Quảng Ninh <a title="297 Quang Trung, TP. Uông Bí, Quảng Ninh" href="/297-quang-trung-tp-uong-bi-quang-ninh">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_14 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><span>758 Trần Phú , phường Cẩm Thạch, TP. Cẩm Phả, Quảng Ninh <a title="758 Trần Phú, TP. Cẩm Phả, Quảng Ninh" href="/758-tran-phu-phuong-cam-thach-tp-cam-pha-quang-ninh">Bản đồ đường đi</a></span></li>
                                            <li class="instock city_14 hide" data-sku="[&quot;IPN11128W&quot;,&quot;IPN11128Y&quot;]"><span>Tòa nhà MobiFone, đường 25/4, Hồng Gai, TP. Hạ Long, Quảng Ninh <a title="Tòa nhà MobiFone, đường 25/4, TP. Hạ Long" href="/toa-nha-mobifone-duong-25-4-hong-gai-tp-ha-long-quang-ninh">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_15 hide" data-sku="[&quot;IPN11128P&quot;]"><span>Số 2 Nguyễn Văn Cừ, TP Bắc Giang <a title="Số 2 Nguyễn Văn Cừ, TP Bắc Giang" href="/so-2-nguyen-van-cu-tp-bac-giang">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_16 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><span>1502 Đại lộ Hùng Vương, K6, phường Gia Cẩm, TP. Việt Trì, Phú Thọ <a title="1502 ĐL Hùng Vương, TP. Việt Trì, Phú Thọ" href="/1502-dl-hung-vuong-k6-phuong-gia-cam-tp-viet-tri-phu-tho">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_17 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><span>Số 20 Mê Linh, Phường Liên Bảo, TP Vĩnh Yên, Tỉnh Vĩnh Phúc  <a title="Chi nhánh Vĩnh Phúc" href="/so-20-me-linh-phuong-lien-bao-tp-vinh-yen-tinh-vinh-phuc">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_18 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><span>40 Trần Phú - Đông Ngàn - Từ Sơn - Bắc Ninh <a title="40 Trần Phú - Từ Sơn - Bắc Ninh" href="/40-tran-phu-dong-ngan-tu-son-bac-ninh">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_18 hide" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128W&quot;]"><span>207 Nguyễn Văn Cừ, P. Võ Cường, TP. Bắc Ninh <a title="207 Nguyễn Văn Cừ, TP. Bắc Ninh" href="/207-duong-nguyen-van-cu-p-vo-cuong-tp-bac-ninh">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_19 hide" data-sku="[&quot;IPN11128P&quot;]"><span>382 Trường Chinh (Số 5 cũ), TP Hải Dương <a title="382 Trường Chinh (Số 5 cũ), TP Hải Dương" href="/382-truong-chinh-so-5-cu-tp-hai-duong">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_29 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128W&quot;]"><span>23 Lý Thường Kiệt, TP. Đồng Hới, Quảng Bình <a title="23 Lý Thường Kiệt, TP. Đồng Hới" href="/23-ly-thuong-kiet-tp-dong-hoi-quang-binh">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_32 hide" data-sku="[&quot;IPN11128G&quot;]"><span>580 - 582 Điện BIên Phủ, Thanh Khê Đông, Thanh Khê, Đà Nẵng <a title="Chi nhánh Thanh Khê, Đà Nẵng" href="/580-582-dien-bien-phu-thanh-khe-dong-thanh-khe-da-nang">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_34 hide" data-sku="[&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;]"><span>222 Quang Trung, P.Lê Hồng Phong, TP Quảng Ngãi,  Quảng Ngãi <a title="222 Quang Trung,  TP Quảng Ngãi" href="/222-quang-trung-p-le-hong-phong-tp-quang-ngai-quang-ngai">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_35 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;]"><span>190-192 Tăng Bạt Hổ - P. Lê Hồng Phong - TP. Quy Nhơn <a title="190-192 Tăng Bạt Hổ, TP. Quy Nhơn" href="/190-192-tang-bat-ho-p-le-hong-phong-tp-quy-nhon">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_37 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128W&quot;]"><span>69 Quang Trung, Lộc Thọ, TP. Nha Trang, T. Khánh Hoà <a title="69 Quang Trung, TP. Nha Trang" href="/69-quang-trung-loc-tho-tp-nha-trang-t-khanh-hoa">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_38 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128W&quot;]"><span>Số 44 Đường 16 tháng 4, P.Tấn Tài, TP.Phan Rang-Tháp Chàm, Ninh Thuận <a title="Số 44 Đường 16 tháng 4, P.Tấn Tài, TP.Phan Rang-Tháp Chàm, Ninh Thuận" href="/so-44-duong-16-thang-4-p-tan-tai-tp-phan-rang-thap-cham-ninh-thuan">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_39 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;]"><span>168 Trần Hưng Đạo, Phú Thủy, Phan Thiết, Bình Thuận (Shop cũ 198 Tôn Đức Thắng) <a title="168 Trần Hưng Đạo, TP Phan Thiết, Bình Thuận" href="/198-ton-duc-thang-phu-thuy-phan-thiet-binh-thuan">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_44 hide" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128R&quot;]"><span>6A Lê Hồng Phong, Phường 4, Đà Lạt, Lâm Đồng <a title="6A Lê Hồng Phong, TP Đà Lạt" href="/6a-le-hong-phong-phuong-4-da-lat">Bản đồ đường đi</a></span></li>
                                            <li class="instock city_45 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;,&quot;IPN11128Y&quot;]"><span>1057 Phú Riêng Đỏ, P.Tân Bình, TP Đồng Xoài, Bình Phước <a title="1057 Phú Riêng Đỏ, TP Đồng Xoài, Bình Phước" href="/1057-phu-rieng-do-p-tan-binh-tp-dong-xoai-binh-phuoc">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_46 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;]"><span>935 Cách Mạng Tháng 8, TP. Tây Ninh <a title="935 Cách Mạng Tháng 8, TP. Tây Ninh" href="/935-cach-mang-thang-8-tp-tay-ninh">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_47 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;]"><span>491 Đại lộ Bình Dương, Phú Cường, TP. Thủ Dầu Một, Bình Dương <a title="491 Đại lộ Bình Dương, TP Thủ Dầu Một" href="/491-dai-lo-binh-duong-phu-cuong-thu-dau-mot-binh-duong">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_47 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;]"><span>57C-57D Nguyễn Văn Tiết, KP. Bình Hòa, P.Lái Thiêu, TP Thuận An, Bình Dương <a title="57C-57D Nguyễn Văn Tiết, TP Thuận An, Bình Dương" href="/57c-57d-nguyen-van-tiet-kp-binh-hoa-p-lai-thieu-tp-thuan-an-binh-duong">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_47 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;]"><span>160 Nguyễn An Ninh, Dĩ An, Bình Dương <a title="Chi nhánh Dĩ An, Bình Dương" href="/160-nguyen-an-ninh-di-an-binh-duong">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_48 hide" data-sku="[&quot;IPN11128B&quot;]"><span>246-256 Lê Duẩn, TT. Long Thành, Đồng Nai  <a title="Chi nhánh Long Thành" href="/246-256-le-duan-tt-long-thanh-dong-nai">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_49" data-sku="[&quot;IPN11128G&quot;,&quot;IPN11128P&quot;]"><span>605 Trương Công Định, Phường 7, TP. Vũng Tàu <a title="605 Trương Công Định, TP. Vũng Tàu" href="/605-truong-cong-dinh-phuong-7-tp-vung-tau">Bản đồ đường đi</a></span></li>
                                            <li class="outstock city_49" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128W&quot;]"><span>Số 158 Nguyễn Thanh Đằng, Phường Phước Hiệp, TP. Bà Rịa, Tỉnh Bà Rịa - Vũng Tàu <a title="Số 158 Nguyễn Thanh Đằng, TP. Bà Rịa" href="/so-158-nguyen-thanh-dang-phuong-phuoc-hiep-tp-ba-ria-tinh-ba-ria-vung-tau">Bản đồ đường đi</a></span></li>
                                            <li class="instock city_51 hide" data-sku="[&quot;IPN11128B&quot;,&quot;IPN11128G&quot;,&quot;IPN11128P&quot;,&quot;IPN11128R&quot;,&quot;IPN11128W&quot;,&quot;IPN11128Y&quot;]"><span>189 Hùng Vương, P3, TP. Tân An, Long An <a title="189 Hùng Vương, TP. Tân An" href="/189-hung-vuong-p3-tp-tan-an">Bản đồ đường đi</a></span></li>
                                </ul>
                                <p class="out-stock hide" style="display: block;"><strong>{{$product_information->name}} <span class="colorName"> - Yellow</span></strong> chưa có sẵn tại khu vực này. Quý khách vui lòng chọn khu vực khác hoặc gọi đến số Hotline để biết thêm chi tiết.</p>
                                <p class="out-noonline hide" style="display: none;"><strong>{{$product_information->name}}<span class="colorName"> - Yellow</span></strong> tạm thời dừng nhận đơn online. Quý khách vui lòng liên hệ , đến các cửa hàng đang có sẵn hàng để mua trực tiếp.</p>
                            </div>
                        </div>
                            <div class="out-date">
                                <p class="title"><strong><a href="/kho-san-pham-cu/apple-iphone-11-128gb-chinh-hang-vn-a-p11005">{{$product_information->name}} - 153-155 Nguyễn Văn Linh, Đà Nẵng  - TBH</a></strong></p>
                                <div class="note">
                                    <p><i>Giá chỉ từ:</i> <strong class="text-red">{{number_format($product_information->price_sale)}} ₫</strong></p>
                                    <p><i>Tiết kiệm:</i> <strong class="text-red">{{$product_information->percent}}%</strong></p>
                                    <p><i>Bảo hành tới</i>: <strong>22/04/2022</strong></p>
                                </div>
                            </div>
                    </div>


            </div>
        </div>
        
    </div>
</section>
{{-- Phần 2 --}}

<section>
	<div class="container">
		<div class="full-width-content">
			<div class="product-combo">
				<div class="header">
					<h3 style="font-weight: 600;text-decoration: none;">Gợi ý sản phẩm cùng {{$product_information->name}}</h3>
				</div>

				<div class="lts-product lts-product-bgwhite lts-product-combo equaHeight" data-obj="a.title">
                    @foreach ($categories_product_offer as $key=>$value)
                        <div class="item source">
                            <div class="img">
                                <a href="{{route('Information', ['id' => $value->id_categories, 'slug' =>$value->slug, 'id_pr' => $value->id])}}" title="{{$value->name}}">
                                    <img src="{{asset('view-thame/img/'.$value->img_banner)}}" alt="{{$value->name}}" title="{{$value->name}}">
                                </a>
                            </div>
                            <div class="info">
                                <a style="text-decoration: none;" href="{{route('Information', ['id' => $value->id_categories, 'slug' =>$value->slug, 'id_pr' => $value->id])}}" title="{{$value->name}}" class="title" title="{{$value->name}}" style="height: 68px;">{{$value->name}}</a>
                                <span class="price current-product-price">
                                    <strong>{{number_format($value->price_sale)}}</strong> 
                                    <strike>{{number_format($value->price)}}₫</strike>
                                </span>
                            </div>
                            <div class="button">
								<a style="text-decoration: none;" class="add-cart" data-colorid="0" href="{{route('AddToCarts', ['id_categories' => $value->id_categories, 'id' => $value->id, 'slug' => $value->slug] )}}" data-sku="TAIR2CH"><span>Thêm vào giỏ hàng</span></a>
							</div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</section>




{{-- Phần 3 (Thông tin) --}}


<div class="container">
    <div class="product-layout product-layout-grid">
        <div class="product-left">
            <div class="product-text" id="productContent" data-height="686" style="height: auto; overflow: auto;">
                {!!$product_information->post!!}
            </div>
        </div>

			<div class="product-right">
				<div class="product-specs">
					<h3 style="font-size: 18px;font-weight: 600;">Thông số kỹ thuật {{$product_information->name}}</h3>
					<div class="product-spect-img">
						<img src="{{asset('view-thame/img/'.$product_information->img_banner)}}">
						<a style="text-decoration: none;" data-padding="0px" data-width="600px" class="ajax-modal product-specs-button" href="/Ajax/fullspecs/781"><i class='bx bxs-chevron-down'></i><strong>Cấu hình chi tiết</strong></a>
					</div>

					<div class="specs-special">
							<ol>
								<li>
									<strong>Công nghệ màn hình:</strong>
									<span>{{$information_product->technology_screen}}</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Độ phân giải:</strong>
									<span>{{$information_product->resolution}}</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Màn hình rộng:</strong>
									<span>{{$information_product->wide_screen}}</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Hệ điều hành:</strong>
									<span>{{$information_product->HDH}}</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Chip xử lý (CPU):</strong>
									<span>{{$information_product->chip}}</span>
								</li>
							</ol>
							<ol>
                                @if (!is_null($gb_ram_infomation->gb))
                                    <li>
                                        <strong>Bộ nhớ trong (ROM):</strong>
                                        <span>{{$gb_ram_infomation->gb}}GB</span>
                                    </li>
                                @endif
							</ol>
							<ol>
                                @if (!is_null($gb_ram_infomation->ram))
                                    <li>
                                        <strong>RAM:</strong>
                                        <span>{{$gb_ram_infomation->ram}}</span>
                                    </li>
                                @endif
							</ol>
							<ol>
								<li>
									<strong>Mạng di động:</strong>
									<span>{{$information_product->network}}</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Số khe sim:</strong>
									<span>{{$information_product->sim}}</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Trọng lượng:</strong>
									<span>{{$information_product->weight}}g</span>
								</li>
							</ol>
							<ol>
								<li>
									<strong>Dung lượng pin:</strong>
									<span>{{$information_product->pin}}mAh</span>
								</li>
							</ol>
					</div>
				</div>
			</div>
		</div>
	</div>




{{-- Phần 4 --}}


<section>
	<div class="container">
		<div class="full-width-content">
			<div class="product-quick-compare">
				<div class="header">
					<h3>So sánh sản phẩm tương tự</h3>
					<div class="search-box">
						<div class="border">
							<input id="kwdCompare" type="text" placeholder="Nhập tên sản phẩm cần so sánh" autocomplete="off">
							<button style="position: relative;top: 1px;" type="button" class="search"><i class='bx bx-search-alt-2' ></i></button>
						</div>
					</div>
				</div>
				<div class="lts-product lts-product-bgwhite equaHeight" data-obj="a.title">
                    @foreach ($categories_product_offer as $key=>$value)
                        <div class="item">
                            <div class="img">
                                <a href="#" title="{{$value->name}}">
                                    <img src="{{asset('view-thame/img/'.$value->img_banner)}}" alt="{{$value->name}}" title="{{$value->name}}">
                                </a>
                            </div>
                                <span class="sales">
                                    <i class="icon-flash2"></i> Giảm {{$value->percent}} %
                                </span>

                            <div class="info">
                                <a style="text-decoration: none;" href="#" class="title" title="{{$value->name}}" style="height: 93px; font-size: 14px;">{{$value->name}}</a>
                                <span class="price" style="font-size: 13.5px;">
                                    <strong>{{number_format($value->price_sale)}} ₫</strong>
                                    <strike>{{number_format($value->price)}} ₫</strike>
                                </span>
                            </div>
                            <div class="info-compare">
                                <a style="text-decoration: none;" href="{{route('Compare',['id_compare_product' => $product_information, 'id_product_compare' => $value->id, 'slug' => $product_information->slug, 'slug_product_compare' => $value->slug])}}" title="So sánh Điện thoại di động với {{$value->name}}">
                                    <i class='bx bx-wifi-2'></i>
                                    <span>So sánh</span>
                                </a>
                            </div>
                            <div class="promote">
                                <a href="#">
                                </a>
                            </div>
                        </div>
                    @endforeach
                        </div>
                    </div>			
                </div>
			</div>
		</div>
	</div>
</section>


{{-- Phần 5 --}}


<section>
    <div class="container">
        <div class="news-home box-home">
            <div class="header">
                <h4><a style="text-decoration: none;" href="#">TIN {{$product_information->name}}</a></h4>
            </div>

            <div class="col-content">
                @foreach ($post_product as $key=>$value)
                    <div class="item">
                        <div class="img">
                            <a style="text-decoration: none;" href="{{route('Post', $value->id)}}"><img src="{{asset('view-thame/img/'.$value->img_banner)}}"></a>
                        </div>
                        <p>
                            <a href="{{route('Post', $value->id)}}">{{$value->title}}</a>
                            <br>
                            <span style="font-size: 12px;">Danh mục: {{$categories_post->categories}}</span>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- Phần 6 --}}
<section>
    <div class="container">
        <div class="corevalue">
                <div class="item">
                    <span class="icon">
                        <i class='bx bx-donate-heart'></i>
                    </span>
                    <div class="text">
                        <span>Sản phẩm</span>
                        <strong>CHÍNH HÃNG</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class='bx bx-cart' ></i>
                    </span>
                    <div class="text">
                        <span>Miễn phí vận chuyển</span>
                        <strong>TOÀN QUỐC</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class='bx bxs-microphone' ></i>
                    </span>
                    <div class="text">
                        <span>Hotline hỗ trợ</span>
                        <strong>1900.2091</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class='bx bxs-user-account' ></i>
                    </span>
                    <div class="text">
                        <span>Thủ tục đổi trả</span>
                        <strong>DỄ DÀNG</strong>
                    </div>
                </div>
        </div>
    </div>
</section>

@include('layout-view.footer')