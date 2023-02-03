<?php
    get_header();
?>  

    <?php
        // using wp page template engine
        get_template_part( 'sub/page', $post->post_name );
    ?>

<?php
    get_footer();
?>