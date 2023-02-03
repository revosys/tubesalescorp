<?php
    
    // This is to get acf_cutom fields
    $fields = get_field_objects($post->ID);
    // function to get page banner
    page_banner($fields); 

?>

    <div class="service-dtail">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="dtlbgimg">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>

                    <div class="mf-section-title text-left dark medium-size bold margbtm20">
                        <h2><?= the_title(); ?></h2>
                    </div>
                    <p>
                        <?= the_content(); ?>
                    </p>
                </div>

                <!-- sidebar -->
                <aside class="widgets-area primary-sidebar service-sidebar ol-sm-12 col-md-4">
                    <div class="induscity-widget">
                        <div class="widget services-menu-widget">
                            <h4 class="widget-title">Products Navigation</h4>
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location'=>'footermenutwo',
                                                'container' => 'ul',
                                                'menu_class' =>'menu service-menu',
                                                'menu_id' =>'',
                                                'link_before' => '<i class="fa fa-long-arrow-right"></i>',
                                                'link_after' => ''
                                            ));
                                        ?>
                        </div>
                        <div class="widget_text widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="textwidget">
                                <?php the_tags( '<ul><li>- ', '</li><li>- ', '</li></ul>' ); ?>
                            </div>
                        </div>                        
                        <div class="widget_text widget">
                            <h4 class="widget-title"> Contact Our Team</h4>
                            <div class="textwidget">
                                <div class="mf-team-contact">
                                    <p>Please feel free to contact us. We will get back to you with 1-2 business days. Or just call us now.</p>
                                    <div class="mf-contact phone">
                                        <i class="flaticon-tool"></i>
                                        <span class="semi-bold">Call Us:</span> <?php echo $GLOBALS['settings_fields']['comp_mobile']; ?>
                                    </div>
                                    <div class="mf-contact email">
                                        <i class="flaticon-note"></i>
                                        <span class="semi-bold">Mail Us:</span> <?php echo $GLOBALS['settings_fields']['comp_email']; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="widget mf-button-widget">
                            <a href="/contact-us/" class="mf-btn mf-btn-widget mf-btn-fullwidth">Contact Now</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>