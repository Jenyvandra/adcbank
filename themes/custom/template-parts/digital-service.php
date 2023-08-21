<?php /* Template Name: Digital Services */ ?>
<?php
get_header();

 if ( is_active_sidebar( 'sidebar-1' ) ) {
        get_sidebar( 'sidebar-1' ); 
 }
echo the_content();
?>
<?php
get_footer();