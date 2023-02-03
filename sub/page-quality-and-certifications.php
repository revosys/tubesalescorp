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
                <h2>Know Our Quality Control and Testing Proccess.</h2>
            </div>
            <div style="padding-left:10px;" class="row">
                <div class="col-md-12">
                    <p><?php echo the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="ourhistory">
        <div class="container">
            <div class="mf-section-title text-left dark large-size">
                <h2>Know Our Certifications</h2>
                <br>
                <p>When it comes to the quality of a company’s products and services, certifications are an important factor to consider. Certifications are a way for companies to demonstrate their commitment to quality and safety standards. They also provide customers with assurance that the company is meeting industry standards and regulations.</p>
            </div>
            <div class="mf-history ">
                <?php
                    echo do_shortcode('[rl_gallery id="156"]');
                ?>
            </div>
        </div>
    </div>