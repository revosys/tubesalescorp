<?php

    // This is category page template when category exist and url is like category/valid-category-slug
    get_header();
?>
    <!-- our services -->
    <div class="service-dtail">
        <div class="container">
            <?php
                if ( have_posts() ) {
            ?>            
                <div class="mf-section-title text-left dark large-size margbtm40">
                    <a href="/category/">Back To Categories</a></p>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-xs-12">

                        <div class="row">
                            <?php
                                while ( have_posts() ) {
                                    the_post()
                            ?>
                                <div class="col-sm-6 col-xs-12">

                                    <div class="service-inner">
                                        <div class="service-thumbnail">
                                            <a href="<?php echo get_permalink(); ?>" class="pro-link"><i class="fa fa-link"></i></a>
                                            <img width="370" height="200" src="<?php echo get_the_post_thumbnail_url();; ?>" alt="">
                                        </div>
                                        <div class="service-summary">
                                            <div class="service-content text-center">
                                                <h2 class="service-title"><a href="<?php echo get_permalink(); ?>"><?= the_title(); ?></a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            <?php
                                    }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="mf-contact-form-7 form-light sidebarform">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Contact Us</h2>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="112" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- our services end -->
<?php
    get_footer();
?>