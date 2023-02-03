    <!-- 
        All categories template
    -->
    <div class="service-2">
        <div class="container">
            <div class="mf-section-title text-center dark large-size margbtm40">
                <h2>All Categories</h2>
            </div>            
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <?php 
                            $defaults = array(
                                'hide_title_if_empty' => false, // hide if no post under category
                                'hierarchical'        => true,
                                'order'               => 'DESC',
                                'orderby'             => 'id',
                                'separator'           => '<br />',
                                'show_option_all'     => '',
                                'show_option_none'    => __( 'No categories' ),
                                'style'               => 'list',
                                'taxonomy'            => 'category',
                                'title_li'            => __( '' ), // blank to hide category first label
                                'use_desc_for_title'  => 0,
                            );
                        echo wp_list_categories($defaults); 
                    ?>
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
        </div>
    </div>
    <!-- our categories end -->