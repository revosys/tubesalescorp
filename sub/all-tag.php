    <!-- 
        All Tags template
    -->
    <div class="service-2">
        <div class="container">
            <div class="mf-section-title text-center dark large-size margbtm40">
                <h2>All Tags</h2>
            </div>            
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <?php 
                    $tags = get_tags(array(
                    'hide_empty' => false
                    ));
                    echo '<ul>';
                    foreach ($tags as $tag) {
                        echo '<li><a href="/tag/'. $tag->slug .'">' . $tag->name . '</a></li>';
                    }
                    echo '</ul>';
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
    <!-- our Tag end -->