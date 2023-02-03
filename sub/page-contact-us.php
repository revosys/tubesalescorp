<?php
    
    // This is to get acf_cutom fields
    $fields = get_field_objects($post->ID);
    
    // get acf_cutom_fields

    // function to get page banner
    page_banner($fields); 

?>
        <div class="contactpage pagepadd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="mf-contact-box clearfix ">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Visit us</h2>
                            </div>
                            <div class="contact-info address"><i class="flaticon-arrow"></i>
                                <div><span>Address:</span> <br><?php echo $GLOBALS['settings_fields']['comp_address']; ?></div>
                            </div>
                            <div class="contact-info phone"><i class="fa fa-phone"></i>
                                <div><span>Call Us:</span> <?php echo $GLOBALS['settings_fields']['comp_mobile']; ?></div>
                            </div>
                            <div class="contact-info email"><i class="flaticon-note"></i>
                                <div><span>Mail Us:</span> <br><?php echo $GLOBALS['settings_fields']['comp_email']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                            <div class="mf-section-title text-left dark medium-size margbtm20">
                                <h2>Reach us</h2>
                            </div>                        
                        <?php echo do_shortcode('[contact-form-7 id="112" title="Contact form 1"]'); ?>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="mf-contact-box clearfix ">
                            <div class="mf-section-title text-left dark medium-size ">
                                <h2>Find us on map</h2>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14000.137825890588!2d77.21819579339291!3d28.68861587023695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdbd1a865737%3A0xed1ab7d318906ceb!2s43%2F1%2C%20Rajpur%20Rd%2C%20Civil%20Lines%2C%20Delhi%2C%20110054!5e0!3m2!1sen!2sin!4v1674992140504!5m2!1sen!2sin" width="315" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        