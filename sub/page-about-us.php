<?php
    
    // This is to get acf_cutom fields
    $fields = get_field_objects($post->ID);
    
    // get acf_cutom_fields
    $main_heading = $fields['about_main_content']['value']['main_heading'];
    $main_description = $fields['about_main_content']['value']['main_description'];
    $main_content = get_field('main_about_content');
    $home_thumbnail = $fields['images_group']['value']['home_image']['url'];

    // function to get page banner
    page_banner($fields); 

?>
    <div class="abouttop">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="margtop20" src="<?php echo $home_thumbnail; ?>" alt="">
                </div>
                <div class="col-md-8">
                    <h2><?= $main_heading; ?></h2>
                    <p><?php echo $main_description; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="ourhistory">
        <div class="container">
            <div class="mf-section-title text-left dark large-size ">
                <h2>Know Our History, Mission and Vision</h2>
            </div>
            <div class="mf-history ">
            <?php echo $main_content; ?>
            </div>
        </div>
    </div>