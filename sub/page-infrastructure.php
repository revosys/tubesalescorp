<?php
    
    // This is to get acf_cutom fields
    $fields = get_field_objects($post->ID);
    
    // get acf_cutom_fields

    // function to get page banner
    page_banner($fields); 

?>
    <div class="abouttop">
        <div class="container">
            <div class="mf-section-title text-left dark large-size margbtm20">
                <h2>Know Our Infrastructure and Facilites</h2>
            </div>
            <div style="padding-left:10px;" class="row">
                <div class="col-md-12">
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>