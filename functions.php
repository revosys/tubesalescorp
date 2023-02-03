<?php

    add_filter('use_block_editor_for_post', '__return_false', 5);

    // Changes on load
    function reset_editor(){   
        
        // Ad Features
        register_nav_menu('headertopmenuLocation', 'Header Top Menu Location');
        register_nav_menu('footermenuone', 'Footer Menu One');
        register_nav_menu('footermenutwo', 'Footer Menu Two');
        register_nav_menu('productsmenusidebar', 'Products Menu Sidebar');
        // add_post_type_support( 'page' , 'excerpt' );
        
        // Remove Features 
        remove_post_type_support( 'page' , 'editor' );
        remove_post_type_support( 'post' , 'comments' );
        remove_action('media_buttons', 'media_buttons');
        
        // add feature image
        // if(is_admin() && is_single()){
            add_theme_support('post-thumbnails');
        // }

        $post_slug = isset($_GET['post']) ? get_post_field( 'post_name', get_post($_GET['post']) ) : '';
        
        if(is_admin() && ($post_slug == 'downloads' || $post_slug == 'infrastructure' || $post_slug == 'quality-and-certifications')){
            add_post_type_support( 'page' , 'editor' );
        }
        
    }
    add_action("init","reset_editor");

    // adding instruction in ppost feature image
    function featured_image_dimensions( $content, $post_id, $thumbnail_id ){
        $help_text = '<p>' . __( 'Recommended dimensions <br> W: 1170 x H: 570 px', 'my_domain' ) . '</p>';
        return $help_text . $content;
    }
    add_filter( 'admin_post_thumbnail_html', 'featured_image_dimensions', 10, 3 );    

    // All Js/Cs Files
    function lbsFiles(){

        // Js files
        // wp_enqueue_script('modrn', get_theme_file_uri('/assets/vendors/modernizr.min.js'), null, '1.0', true);
        
        // this is loading jquery as default
        wp_enqueue_script('mainjs', get_theme_file_uri('/assets/js/jquery-1.12.4.min.js'), null,null, true);
        wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'),null,null, true);
        // wp_enqueue_script('jfancybox', get_theme_file_uri('/assets/js/jquery.fancybox.pack.js'), null,null,true);
        // wp_enqueue_script('jfancyboxmed', get_theme_file_uri('/assets/js/jquery.fancybox-media.js'), null,null,true);
        // wp_enqueue_script('jfancybopkg', get_theme_file_uri('https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js'), null,null,true);
        wp_enqueue_script('owl', get_theme_file_uri('/assets/js/owl.js'), null,null,true);
        // wp_enqueue_script('jcounterapper', get_theme_file_uri('/assets/js/jquery.appear.js'), null,null,true);
        // wp_enqueue_script('jcounter', get_theme_file_uri('/assets/js/jquery.countTo.js'), null,null,true);
        wp_enqueue_script('validate', get_theme_file_uri('/assets/js/validate.js'), null,null,true);
        wp_enqueue_script('revtool', get_theme_file_uri('/assets/js/revolution/jquery.themepunch.tools.min.js'), null,null,true);
        wp_enqueue_script('revmain', get_theme_file_uri('/assets/js/revolution/jquery.themepunch.revolution.min.js'), null,null,true);
        // wp_enqueue_script('revactions', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.actions.min.js'), null,null,true);
        // wp_enqueue_script('revcoursal', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.carousel.min.js'), null,null,true);
        // wp_enqueue_script('revlyranim', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.layeranimation.min.js'), null,null,true);
        // wp_enqueue_script('revmigra', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.migration.min.js'), null,null,true);
        // wp_enqueue_script('revnavi', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.navigation.min.js'), null,null,true);
        // wp_enqueue_script('revparallax', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.parallax.min.js'), null,null,true);
        // wp_enqueue_script('revslider', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.slideanims.min.js'), null,null,true);
        // wp_enqueue_script('revvdo', get_theme_file_uri('/assets/js/revolution/extensions/revolution.extension.video.min.js'), null,null,true);
        wp_enqueue_script('mainscrpt', get_theme_file_uri('/assets/js/scripts.min.js'), null,null,true);
        wp_enqueue_script('mainscrpt1', get_theme_file_uri('/assets/js/script.js'), null,null,true);
        wp_enqueue_script('contact', get_theme_file_uri('/inc/contact.js'), null,null,true);
        
        // Font and third party
        // wp_enqueue_style('google_fonts', get_theme_file_uri('//fonts.googleapis.com/css?family=Poppins:400,700'));
        // wp_enqueue_style('liquid_icons', get_theme_file_uri('/assets/vendors/liquid-icon/liquid-icon.min.css'));

        // Styles css
        wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.css'));
        wp_enqueue_style('fontawesom', get_theme_file_uri('/assets/css/font-awesome.css'));
        wp_enqueue_style('flaticon', get_theme_file_uri('/assets/css/flaticon.css'));
        wp_enqueue_style('factoryicon', get_theme_file_uri('/assets/css/factoryplus-icons.css'));
        wp_enqueue_style('animate', get_theme_file_uri('/assets/css/animate.css'));
        wp_enqueue_style('owl', get_theme_file_uri('/assets/css/owl.css'));
        wp_enqueue_style('fancyboxcss', get_theme_file_uri('/assets/css/jquery.fancybox.css'));
        wp_enqueue_style('hover', get_theme_file_uri('/assets/css/hover.css'));
        wp_enqueue_style('frontend', get_theme_file_uri('/assets/css/frontend.css'));
        wp_enqueue_style('themestyle', get_theme_file_uri('/assets/css/style.css'));
        wp_enqueue_style('revslider', get_theme_file_uri('/assets/css/revolution/settings.css'));
        wp_enqueue_style('revlayes', get_theme_file_uri('/assets/css/revolution/layers.css'));
        wp_enqueue_style('revnav', get_theme_file_uri('/assets/css/revolution/navigation.css'));
        wp_enqueue_style('resposive', get_theme_file_uri('/assets/css/responsive.css'));
        wp_enqueue_style('main_style', get_stylesheet_uri());
        
    }
    add_action('wp_enqueue_scripts','lbsFiles');

    // SEO Generator
    function seo_mete_data(){
        $author = get_bloginfo('name');
        $title = get_field('meta_title') ? get_field('meta_title') : get_bloginfo('name');
        $keywords = get_field('post_keyword') ? get_field('post_keyword') : get_bloginfo('description');
        $description = get_field('post_description') ? get_field('post_description') : get_bloginfo('description');
        $image = get_field('post_image') ? get_field('post_image')['url'] : '';
        $url = get_permalink();
        ?>
            <title><?= $title; ?></title>

            <meta name="description" content="<?= $description; ?>" />
            <meta name="keywords" content="<?= $keywords ?>" />
            <meta name="author" content="<?= $author ?>" />

            <meta property="og:locale" content="en_US" />
            <meta property="og:site_name" content="<?= $title; ?>" />
            <meta property="og:image" content="<?= $image; ?>" />
            <meta property="og:type" content="website" />
            <meta property="og:title" content="<?= $title; ?>" />
            <meta property="og:description" content="<?= $description; ?>" />
            <meta property="og:url" content="<?= $url; ?>" />

            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:site" content="<?= $title; ?>" />
            <meta name="twitter:title" content="<?= $title; ?>" />
            <meta name="twitter:description" content="<?= $description; ?>" />

            <link rel="canonical" href="<?= $url; ?>" />
            <link rel="shortcut icon" type="image/png" href="<?= $image; ?>" />
        <?
    
    }

    // Top Page Banner
    function page_banner($acf_fields){
        $fields = $acf_fields;        
            if( $fields ){
                $sub_heading = $fields['main_content']['value']['sub_heading'];
                $banner_image = isset($fields['main_content']['value']['banner_image']['url']) ? $fields['main_content']['value']['banner_image']['url'] :'';
            }
    ?>
            <div class="page-header has-image">
                <div class="page-header-content">
                    <div style="background: url(<?php echo $banner_image; ?>) center top no-repeat;" class="featured-image"></div>
                    <div class="container text-center">
                        <h1>
                            <?php echo get_the_title(); ?>
                            <p class="sub-heading"><?php echo $sub_heading; ?></p>
                        </h1>
                        <nav class="breadcrumbs text-left">
                            <a class="home" href="/"><span>Home</span></a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span><?php echo get_the_title(); ?></span>
                        </nav>
                    </div>
                </div>
            </div>
    <?
    }

    // Get Post/Page Data
    function get_post_by_slug($slug, $post_num, $post_type, $category = 0){

        if($post_type == 'post'){
            $post_type = 'post';
            $post_name = 'post_name'; // this is for post args change in post name by default
        }else{
            $post_name = 'name';
        }

        $args = array(
                $post_name => $slug,
                'category' => $category,
                'orderby'  => 'date',
                'order'    => 'DESC',
                'numberposts'=>$post_num,
                'post_type' => $post_type,
                'post_status' => 'publish'
        );
        
        return get_posts($args);

    }

    // Fetching all general settings data
    function get_settings_data(){
        global $settings_fields;
        $settings_fields = [];
        $ID = get_page_by_path('general-settings',OBJECT,'page')->ID; // get setting page id
        $about_ID = get_page_by_path('about-us',OBJECT,'page')->ID; // get about us page id

        if(isset($about_ID)){
            $fields = get_field_objects($about_ID);
            $settings_fields['about_sub_heading'] = $fields['about_main_content']['value']['main_sub_heading'];
        }

        if(isset($ID)){
            $settings_fields['comp_email'] = get_field('company_email', $ID);
            $settings_fields['comp_mobile'] = get_field('company_mobile', $ID);
            $settings_fields['comp_address'] = get_field('company_address', $ID);
            $settings_fields['comp_black_logo'] = get_field('logo_black', $ID)['url'];
            $settings_fields['comp_white_logo'] = get_field('logo_white', $ID)['url'];
        }

        return $settings_fields;
    }
    add_action("after_setup_theme","get_settings_data");