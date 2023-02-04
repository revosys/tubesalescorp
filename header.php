<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico" />
    <?php wp_head(); ?>
    <?php seo_mete_data(); ?>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->    
</head>
<body class="home header-sticky header-v5 hide-topbar-mobile">
    <div id="page" class="hfeed site">

        <!-- Preloader-->
        <div class="preloader"></div>

        <div id="topbar" class="topbar hidden-md hidden-sm hidden-xs">
            <div class="container">

                <div class="topbar-left topbar-widgets text-left clearfix">
                    <div id="custom_html-9" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div><i class="flaticon-sign main-color"></i><?php echo get_bloginfo('description'); ?></div>
                        </div>
                    </div>
                </div>

                <div class="topbar-right topbar-widgets text-right clearfix">
                    <div class="widget induscity-office-location-widget">
                        <div class="widget induscity-social-links-widget">
                            <a href="#" class="share-facebook tooltip-enable social" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="share-twitter tooltip-enable social" rel="nofollow" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="share-skype tooltip-enable social" rel="nofollow" title="Skype" target="_blank"><i class="fa fa-skype"></i></a>
                            <a href="#" class="share-linkedin tooltip-enable social" rel="nofollow" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end -->

        <!-- masthead -->
        <div id="mf-header-minimized" class="mf-header-minimized mf-header-v5"></div>
        <header id="masthead" class="site-header clearfix">
            <div class="header-main clearfix">
                <div class="site-contact">
                    <div class="container">
                        <div class="row menu-row">
                            <div class="site-logo col-md-9 col-sm-9 col-xs-9">
                                <a href="/" class="logo">
                                    <img style="width:70%; margin-left:20px;" src="<?php echo $GLOBALS['settings_fields']['comp_white_logo']; ?>" alt="<?php get_bloginfo('title'); ?>" class="logo">
                                </a>
                                <h1 class="site-title"><a href="#" rel="home"><?php get_bloginfo('title'); ?></a></h1>
                                <h2 class="site-description"><?php get_bloginfo('description'); ?></h2>
                            </div>
                            <div class="site-extra-text hidden-md hidden-sm hidden-xs">
                                <div class="widget_text widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <div class="header-contact mail">
                                            <div>
                                                <h5>MAIL US AT</h5> 
                                                <?php echo $GLOBALS['settings_fields']['comp_email']; ?>
                                            </div>
                                            <i class="flaticon-note"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget_text widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <div class="header-contact mail">
                                            <div>
                                                <h5>CALL US ON</h5> 
                                                <?php echo $GLOBALS['settings_fields']['comp_mobile']; ?>
                                            </div>
                                            <i class="flaticon-arrow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar-toggle col-md-3 col-sm-3 col-xs-3"><span id="mf-navbar-toggle" class="navbar-icon">
							<span class="navbars-line"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-menu container">             
                    <nav id="site-navigation" class="main-nav primary-nav nav">
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
                    </nav>
                    <div class="mf-header-item-button"><a href="/products/#requestquote" class="mf-btn">Get a Quote</a></div>
                </div>
            </div>
        </header>
        <!-- masthead end -->