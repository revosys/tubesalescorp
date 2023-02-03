<?php
    get_header();

    global $wp;
    $url = explode('/', home_url( $wp->request ));
    $url_first_word = $url[3]; // https://domaon.com/ <---- 3 postion

    if($url_first_word == 'category'){
        get_template_part( 'sub/all', $url_first_word );
    }else if($url_first_word == 'tag'){
        get_template_part( 'sub/all', $url_first_word );
    }else{
?>

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
                <h2>
                    Opss! It seems this page is missing.
                    <br>
                    <small>View Our Products Page or contact us</small>
                </h2>
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
                            <h2>Contact us</h2>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="112" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our services end -->
<?php
    }
    get_footer();
?>