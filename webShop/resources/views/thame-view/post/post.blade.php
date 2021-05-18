@include('thame-view.post.layout.header')

            
        <div class="td-main-content-wrap td-container-wrap">

            <div class="td-container td-post-template-default ">
                <div class="td-crumb-container"></div>

                <div class="td-pb-row">
                                            <div class="td-pb-span8 td-main-content" role="main">
                                <div class="td-ss-main-content"><div class="clearfix"></div>
                                    
        <article id="post-63412" class="post-63412 post type-post status-publish format-standard has-post-thumbnail category-tin-hot category-tin-tuc category-tin-tuc-cong-nghe" itemscope="" itemtype="https://schema.org/Article" 47="">
            <div class="td-post-header">

                <!-- category --><ul class="td-category"><li class="entry-category"><a href="/">Tin hot</a></li><li class="entry-category"><a href="https://hoanghamobile.com/tin-tuc/category/tin-tuc">Tin tức</a></li><li class="entry-category"><a href="https://hoanghamobile.com/tin-tuc/category/tin-tuc/tin-tuc-cong-nghe">Tin tức công nghệ</a></li></ul>
                <header class="td-post-title">
                    <h1 class="entry-title">{{$view_post->title}}</h1>
                    

                    <div class="td-module-meta-info">
                        <!-- author --><div class="td-post-author-name"><div class="td-author-by">Bởi</div> <a href="https://hoanghamobile.com/tin-tuc/author/sialthuong">sialthuong</a><div class="td-author-line"> - </div> </div>                    <!-- date --><span class="td-post-date"><time class="entry-date updated td-module-date">9 Tháng Bảy, 2019</time></span>                    <!-- comments --><div class="td-post-comments"><a href="https://hoanghamobile.com/tin-tuc/lg-ra-mat-loat-loa-xboom-gia-tu-4-trieu-co-ban-dj-tich-hop#respond"><i class="td-icon-comments"></i>0</a></div>                    <!-- views --><div class="td-post-views"><i class="td-icon-views"></i><span class="td-nr-views-63412">791</span></div>                </div>

                </header>

            </div>

            <div class="td-post-sharing-top"><div id="td_social_sharing_article_top" class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
                <div class="td-post-sharing-visible">
                    @foreach ($society as $key=>$value)
                        <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="{{$value->slug_society}}" style="transition: opacity 0.2s ease 0s; opacity: 1;">
                            <div style="padding: 10px;" class="td-social-but-icon">
                                <i class='bx bxl-facebook'></i>
                            </div>
                            <div class="td-social-but-text">{{$value->society}}</div>
                        </a>
                    @endforeach
                </div>
                <div class="td-social-sharing-hidden" style="display: none;">
                    <ul class="td-pulldown-filter-list"></ul>
                    <a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#" data-block-uid="td_social_sharing_article_top">
                        <div class="td-social-but-icon">
                            <i class="td-icon-plus td-social-expand-tabs-icon"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
            <div class="td-post-content tagdiv-type">
                {!! $view_post->content !!}
            <footer>
                <!-- post pagination -->            <!-- review -->
                <div class="td-post-source-tags">
                </div>           <!-- next prev -->

        </article> <!-- /.post --><hr>

        <div class="td_block_wrap td_block_related_posts tdi_3_7a6 td_with_ajax_pagination td-pb-border-top td_block_template_1" data-td-block-uid="tdi_3_7a6"><script>var block_tdi_3_7a6 = new tdBlock();
    block_tdi_3_7a6.id = "tdi_3_7a6";
    block_tdi_3_7a6.atts = '{"limit":6,"ajax_pagination":"next_prev","live_filter":"cur_post_same_categories","td_ajax_filter_type":"td_custom_related","class":"tdi_3_7a6","td_column_number":3,"live_filter_cur_post_id":63412,"live_filter_cur_post_author":"1","block_template_id":"","header_color":"","ajax_pagination_infinite_stop":"","offset":"","td_ajax_preloading":"","td_filter_default_txt":"","td_ajax_filter_ids":"","el_class":"","color_preset":"","border_top":"","css":"","tdc_css":"","tdc_css_class":"tdi_3_7a6","tdc_css_class_style":"tdi_3_7a6_rand_style"}';
    block_tdi_3_7a6.td_column_number = "3";
    block_tdi_3_7a6.block_type = "td_block_related_posts";
    block_tdi_3_7a6.post_count = "6";
    block_tdi_3_7a6.found_posts = "9265";
    block_tdi_3_7a6.header_color = "";
    block_tdi_3_7a6.ajax_pagination_infinite_stop = "";
    block_tdi_3_7a6.max_num_pages = "1545";
    tdBlocksArray.push(block_tdi_3_7a6);
    </script>
    <div id="tdi_3_7a6" class="td_block_inner">
        <div class="td-related-row">
            @foreach ($new_post as $key=>$value)
                <div class="td-related-span4">
                    <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                        <div class="td-module-image">
                            <div class="td-module-thumb">
                                <a href="{{route('Post', $value->id)}}" rel="bookmark" class="td-image-wrap" title="{{asset('view-thame/img/'.$value->title)}}">
                                    <img width="218" height="150" style="height: 140px;" class="entry-thumb" src="" srcset="{{asset('view-thame/img/'.$value->img_banner)}}" sizes="(max-width: 218px) 100vw, 218px" alt="_cleanstation iphone" title="{{$value->value}}">
                                </a>
                            </div>                            
                        </div>
                        <div class="item-details">
                            <h3 class="entry-title td-module-title">
                                <a href="{{route('Post', $value->id)}}" rel="bookmark" title="{{$value->title}}">{{Str::substr($value->title, 0, 70)}}</a>
                            </h3>            
                        </div>
                    </div>     
                </div>
            @endforeach
        </div>
            

        <div class="td-related-row">

        
        </div>
    </div>

</div> <!-- ./block -->
                                        <div class="clearfix"></div></div>
                            </div>
                            <div class="td-pb-span4 td-main-sidebar" role="complementary">
                                <div class="td-ss-main-sidebar" style="width: 324px; position: static; top: auto; bottom: auto; z-index: 1;"><div class="clearfix"></div>
                                    <div class="td_block_wrap td_block_2 td_block_widget tdi_6_a2a td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid="tdi_6_a2a"><script>var block_tdi_6_a2a = new tdBlock();
    block_tdi_6_a2a.id = "tdi_6_a2a";
    block_tdi_6_a2a.atts = '{"custom_title":"B\u00c0I VI\u1ebeT M\u1edaI","custom_url":"","block_template_id":"","header_color":"#","header_text_color":"#","limit":"5","offset":"","post_ids":"","category_id":"","category_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","sort":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","td_ajax_preloading":"","ajax_pagination":"","ajax_pagination_infinite_stop":"","class":"td_block_widget tdi_6_a2a","separator":"","m2_tl":"","m2_el":"","m6_tl":"","show_modified_date":"","el_class":"","f_header_font_header":"","f_header_font_title":"Block header","f_header_font_settings":"","f_header_font_family":"","f_header_font_size":"","f_header_font_line_height":"","f_header_font_style":"","f_header_font_weight":"","f_header_font_transform":"","f_header_font_spacing":"","f_header_":"","f_ajax_font_title":"Ajax categories","f_ajax_font_settings":"","f_ajax_font_family":"","f_ajax_font_size":"","f_ajax_font_line_height":"","f_ajax_font_style":"","f_ajax_font_weight":"","f_ajax_font_transform":"","f_ajax_font_spacing":"","f_ajax_":"","f_more_font_title":"Load more button","f_more_font_settings":"","f_more_font_family":"","f_more_font_size":"","f_more_font_line_height":"","f_more_font_style":"","f_more_font_weight":"","f_more_font_transform":"","f_more_font_spacing":"","f_more_":"","m2f_title_font_header":"","m2f_title_font_title":"Article title","m2f_title_font_settings":"","m2f_title_font_family":"","m2f_title_font_size":"","m2f_title_font_line_height":"","m2f_title_font_style":"","m2f_title_font_weight":"","m2f_title_font_transform":"","m2f_title_font_spacing":"","m2f_title_":"","m2f_cat_font_title":"Article category tag","m2f_cat_font_settings":"","m2f_cat_font_family":"","m2f_cat_font_size":"","m2f_cat_font_line_height":"","m2f_cat_font_style":"","m2f_cat_font_weight":"","m2f_cat_font_transform":"","m2f_cat_font_spacing":"","m2f_cat_":"","m2f_meta_font_title":"Article meta info","m2f_meta_font_settings":"","m2f_meta_font_family":"","m2f_meta_font_size":"","m2f_meta_font_line_height":"","m2f_meta_font_style":"","m2f_meta_font_weight":"","m2f_meta_font_transform":"","m2f_meta_font_spacing":"","m2f_meta_":"","m2f_ex_font_title":"Article excerpt","m2f_ex_font_settings":"","m2f_ex_font_family":"","m2f_ex_font_size":"","m2f_ex_font_line_height":"","m2f_ex_font_style":"","m2f_ex_font_weight":"","m2f_ex_font_transform":"","m2f_ex_font_spacing":"","m2f_ex_":"","m6f_title_font_header":"","m6f_title_font_title":"Article title","m6f_title_font_settings":"","m6f_title_font_family":"","m6f_title_font_size":"","m6f_title_font_line_height":"","m6f_title_font_style":"","m6f_title_font_weight":"","m6f_title_font_transform":"","m6f_title_font_spacing":"","m6f_title_":"","m6f_cat_font_title":"Article category tag","m6f_cat_font_settings":"","m6f_cat_font_family":"","m6f_cat_font_size":"","m6f_cat_font_line_height":"","m6f_cat_font_style":"","m6f_cat_font_weight":"","m6f_cat_font_transform":"","m6f_cat_font_spacing":"","m6f_cat_":"","m6f_meta_font_title":"Article meta info","m6f_meta_font_settings":"","m6f_meta_font_family":"","m6f_meta_font_size":"","m6f_meta_font_line_height":"","m6f_meta_font_style":"","m6f_meta_font_weight":"","m6f_meta_font_transform":"","m6f_meta_font_spacing":"","m6f_meta_":"","css":"","tdc_css":"","td_column_number":1,"color_preset":"","border_top":"","tdc_css_class":"tdi_6_a2a","tdc_css_class_style":"tdi_6_a2a_rand_style"}';
    block_tdi_6_a2a.td_column_number = "1";
    block_tdi_6_a2a.block_type = "td_block_2";
    block_tdi_6_a2a.post_count = "5";
    block_tdi_6_a2a.found_posts = "13148";
    block_tdi_6_a2a.header_color = "#";
    block_tdi_6_a2a.ajax_pagination_infinite_stop = "";
    block_tdi_6_a2a.max_num_pages = "2630";
    tdBlocksArray.push(block_tdi_6_a2a);
    </script>
    <div class="td-block-title-wrap"><h4 class="block-title td-block-title"><span class="td-pulldown-size">BÀI VIẾT MỚI</span></h4></div><div id="tdi_6_a2a" class="td_block_inner">
        <!-- ./td-block-span12 -->
                                @foreach ($new_post as $key=>$value)
                                <div class="td-block-span12">
                                    <div class="td_module_6 td_module_wrap td-animation-stack">
                                        <div class="td-module-thumb">
                                            <a href="{{route('Post', $value->id)}}" rel="bookmark" class="td-image-wrap" title="{{$value->titles}}">
                                                <img width="100" height="70" class="entry-thumb" src="{{asset('view-thame/img/'.$value->img_banner)}}" srcset="{{asset('view-thame/img/'.$value->img_banner)}}" sizes="(max-width: 100px) 100vw, 100px" title="{{$value->title}}">
                                            </a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title">
                                                <a href="{{route('Post', $value->id)}}" rel="bookmark" title="{{$value->title}}">{{Str::substr($value->title, 0, 70)}}</a>
                                            </h3>            
                                            <div class="td-module-meta-info">                              
                                                <span class="td-post-date">
                                                    <time class="entry-date updated td-module-date" datetime="2021-05-16T12:13:36+00:00">16 Tháng Năm, 2021</time>
                                                </span>                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>                       
                    <div class="clearfix"></div></div>
                </div>
            </div> 
        </div> 
    </div> 
 @include('thame-view.post.layout.footer')