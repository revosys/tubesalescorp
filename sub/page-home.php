    <!--Main Slider-->
    <section class="rev_slider_wrapper">
        <div id="slider2" class="rev_slider" data-version="5.0">
            <ul>
                <!-- slide -->
                <?php
                    // field coming from above code
                    $fields = get_field_objects(42); // 42 is home page id

                    if( $fields )
                    {
                        foreach( $fields as $field_name => $field ){
                        if(str_contains($field_name, 'slide') && $field['value']['image']){
                                // print_r($field['value']['image']['url']);
                ?>
                    <li data-index="rs-<?= $field_name; ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?php echo $field['value']['image']['url'] ?>"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo $field['value']['image']['url'] ?>" alt="" title="slide2-h4.jpg" width="1920" height="670" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption text-bg-shadow tp-resizeme rev-bigtext" id="slide-11-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['195','220','320','230']" data-fontsize="['60','60','48','28']"
                            data-lineheight="['60','60','48','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":400,"speed":700,"text_c":"transparent","bg_c":"transparent",
                            "use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
                            "ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
                            "use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
                            "to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        >
                                <?= ucwords($field['value']['title']); ?>
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption  text-bg-shadow tp-resizeme rev-paratext" id="slide-11-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['310','365','465','320']" data-fontsize="['18','18','18','13']"
                            data-lineheight="['28','28','28','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":800,"speed":700,"text_c":"transparent","bg_c":"transparent",
                            "use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
                            "ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
                            "use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
                            "to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            >
                            <?= ucwords($field['value']['sub_title']); ?>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <a class="tp-caption rev-btn rev-btn1" href="<?= $field['value']['button_one_link']; ?>" id="slide-11-layer-3" data-x="['center','center','center','center']" data-hoffset="['-95','-95','-95','-81']" data-y="['top','top','top','top']" data-voffset="['425','450','550','400']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":700,"text_c":"transparent","bg_c":"transparent",
                            "use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
                            "ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
                            "use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
                            "to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",
                            "ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
                            "style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">
                            <?= $field['value']['button_one_text']; ?>
                        </a>

                        <!-- LAYER NR. 8 -->
                        <a class="tp-caption rev-btn rev-btn2" href="<?= $field['value']['button_two_link']; ?>" id="slide-11-layer-4" data-x="['center','center','center','center']" data-hoffset="['95','95','95','80']" data-y="['top','top','top','top']" data-voffset="['425','450','550','400']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":1200,"speed":700,"text_c":"transparent","bg_c":"transparent",
                            "use_text_c":false,"use_bg_c":false,"frame":"0","from":"opacity:0;","to":"o:1;",
                            "ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"use_text_c":false,
                            "use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
                            "to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",
                            "ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
                            "style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">
                            <?= $field['value']['button_two_text']; ?>
                        </a>
                    </li>
                <?php
                        }
                        }
                    }
                ?>
            </ul>
        </div>
    </section>
    <!--Main Slider  end-->

    <!--welcome sec -->
    <div class="welcomesec-3">
        <?php
            $about_data = get_page_by_path('about-us');
            $fields = get_field_objects($about_data->ID);
    
            // get acf_cutom_fields
            $main_heading = $fields['about_main_content']['value']['main_heading'];
            $main_description = $fields['about_main_content']['value']['main_description'];
            
            global $about_sub_heading;
            $about_sub_heading = $fields['about_main_content']['value']['main_sub_heading'];

            $home_thumbnail = $fields['images_group']['value']['home_image']['url'];
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="well3eftm">
                        <div class="mf-section-title text-left dark large-size margbtm20">
                            <h3 class="main-color">Welcome to </h3>
                            <h2><?= get_bloginfo('title'); ?></h2>
                        </div>
                        <p><?php echo $GLOBALS['about_sub_heading']; ?></p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="mf-services-3 style-2 ">
                        <div class="services-list clearfix">
                            <div class="vc_service-wrapper "><span class="mf-icon"><i class="flaticon-engineer"></i></span>
                                <h3><a href="#" title="We are Professional">We are Professional</a></h3><span>Engineers</span>
                            </div>
                            <div class="vc_service-wrapper "><span class="mf-icon"><i class="flaticon-home"></i></span>
                                <h3><a href="#" title="Licensed &amp; Insured">Licensed &amp; Insured</a></h3><span>Industry</span>
                            </div>
                            <div class="vc_service-wrapper "><span class="mf-icon"><i class="flaticon-landscape"></i></span>
                                <h3><a href="#" title="Number 1 Company">Number 1 Company</a></h3><span>In Region</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--welcome sec end -->

    <!-- our services -->
    <div class="service-2">
        <?php
            $defaults = array(
                'category'         => 0,
                'posts_per_page' => 10,
                'orderby'          => 'id',
                'order'            => 'ASC',
                'post_type'        => 'post',
                'post_status'        => 'publish',
            );                
            $products = get_posts($defaults);            
        ?>
        <div class="container">
            <div class="mf-section-title text-center dark large-size margbtm40">
                <h2>Products</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <div class="row">
                        <?php
                            if($products){
                                foreach($products as $product){ 
                                    // print_r($product);
                                    $prod_acf_fields = get_field_objects($product->ID);
                                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($product->ID) );
                                    if($prod_acf_fields){
                                        $prod_sub_heading = $prod_acf_fields['main_content']['value']['sub_heading'];
                                    }
                        ?>
                                <div class="col-6 col-xs-12 col-md-6 col-sm-6">
                                    <div class="service-inner">
                                        <div class="service-thumbnail">
                                            <a href="<?php echo get_permalink( $product->ID ); ?>" class="pro-link"><i class="fa fa-link"></i></a>
                                            <img width="370" height="200" src="<?php echo $feat_image; ?>" alt="">
                                        </div>
                                        <div class="service-summary">
                                            <div class="service-content text-center">
                                                <h2 class="service-title"><a href="<?php echo get_permalink( $product->ID ); ?>"><?= $product->post_title; ?></a></h2>
                                                <!-- <div class="service-desc"><?php echo esc_attr($prod_sub_heading); ?></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="mf-contact-form-7 form-light sidebarform">
                        <div class="mf-section-title text-left dark medium-size ">
                            <h2>Request a Quote</h2>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="112" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our services end -->

    <!-- about us -->
    <div class="aboutus-4">
        <div class="container">
            <div class="mf-section-title text-center dark large-size margbtm50">
                <h2>About Us</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3><?= $main_heading; ?></h3>
                    <p><?= $main_description; ?></p>
                    <div class="mf-button align-left style-1 margtop30">
                        <a class="button mf-btn has-background" href="<?php echo get_permalink( $about_data ); ?>">Know More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <img src="<?php echo $home_thumbnail; ?>" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- our partener -->
    <div class="partener-1">
        <div class="container text-center">
            <div class="text-center partenertest margbtm40">we believe in providing quality products and services that meet or exceed industry standards. We strive to ensure that our customers receive the best possible experience when dealing with us.<br>We are proud to be certified by the following organizations.</div>
            <a class="button mf-btn has-background" href="/quality-and-certifications/">View Certificates</a>
        </div>
    </div>
    <!-- our partener end -->