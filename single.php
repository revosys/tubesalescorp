<?php
    get_header();
?>  

    <?php
        // using wp page template engine
        get_template_part( 'sub/page', 'single' );
    ?>

<?php
    get_footer();
?>