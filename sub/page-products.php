<?php
    
    // This is to get acf_cutom fields
    $fields = get_field_objects($post->ID);
    // function to get page banner
    page_banner($fields); 

?>
    <div id="requestquote" class="service-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <?php
                            $defaults = array(
                                'category'         => 0,
                                'posts_per_page' => -1,
                                'orderby'          => 'id',
                                'order'            => 'ASC',
                                'post_type'        => 'post',
                                'post_status'        => 'publish',
                            );                
                            $products = get_posts($defaults);
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