    <div id="footer-widgets" class="footer-widgets widgets-area">
            <div class="container">
                <div class="row">
                    <div class="footer-sidebar footer-1 col-xs-12 col-sm-6 col-md-4">
                        <div class="widget_text widget">
                            <div class="textwidget">
                                <a href="#">
                                    <img src="<?php echo $GLOBALS['settings_fields']['comp_black_logo']; ?>" alt="Footer Logo">
                                </a>
                            </div>
                        </div>
                        <div class="widget_text widget">
                            <div class="textwidget"><?php echo $GLOBALS['settings_fields']['about_sub_heading']; ?></div>
                        </div>
                    </div>
                    <div class="footer-sidebar footer-2 col-xs-12 col-sm-6 col-md-4">
                        <div class="widget widget_mf-custom-menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <div class="custom-menu-area">
                                <div class="custom-menu custom-menu-1">
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location'=>'footermenuone',
                                                'container' => 'ul',
                                                'menu_class' =>'menu',
                                                'menu_id' =>'',
                                                'link_before' => '',
                                                'link_after' => ''
                                            ));
                                        ?>
                                </div>
                                <div class="custom-menu custom-menu-2">
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location'=>'footermenutwo',
                                                'container' => 'ul',
                                                'menu_class' =>'menu',
                                                'menu_id' =>'',
                                                'link_before' => '',
                                                'link_after' => ''
                                            ));
                                        ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-sidebar footer-3 col-xs-12 col-sm-6 col-md-4">
                        <div class="widget_text widget">
                            <h4 class="widget-title">Contact Details</h4>
                            <div class="textwidget">
                                <div class="footer-widget-contact">
                                    <div class="detail address">
                                        <i class="flaticon-arrow"></i>
                                        <div>
                                            <span>Address:</span> </br><?php echo $GLOBALS['settings_fields']['comp_address']; ?>
                                        </div>
                                    </div>
                                    <div class="detail phone">
                                        <i class="flaticon-tool"></i>
                                        <div>
                                            <span>Call Us On:</span> </br><?php echo $GLOBALS['settings_fields']['comp_mobile']; ?>
                                        </div>
                                    </div>

                                    <div class="detail mail">
                                        <i class="flaticon-note"></i>
                                        <div>
                                            <span>Mail Us At:</span> </br><?php echo $GLOBALS['settings_fields']['comp_email']; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <!-- copyright -->
        <footer class="site-footer">
            <div class="container footer-info">
                <div class="footer-copyright">
                    Copyrights © All Rights Reserved by <a href="#"><?php echo bloginfo('title');?></a>. </div>
                <div class="text-right">
                    <div class="socials footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- copyright end-->
    </div>
    <!--End pagewrapper-->


    <!--primary-mobile-nav-->
    <div class="primary-mobile-nav header-v1" id="primary-mobile-nav" role="navigation">
        <a href="#" class="close-canvas-mobile-panel">×</a>
        <?php
            wp_nav_menu(array(
                'theme_location'=>'headertopmenuLocation',
                'container' => 'ul',
                'menu_class' =>'menu',
                'menu_id' =>'',
                'link_before' => '',
                'link_after' => ''
            ));
        ?>
    </div>
    <div id="off-canvas-layer" class="off-canvas-layer"></div>
    <!--primary-mobile-nav end-->

    <!--Scroll to top-->
    <a id="scroll-top" class="backtotop" href="#page-top"><i class="fa fa-angle-up"></i></a>

    <?php wp_footer(); ?>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</body>

</html>