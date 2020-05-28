<?php

    /*
    Template Name:Home Style One
     */
;?>
<?php get_header();?>

<?php get_template_part( "template-parts/homepage/home1/slider" );?>
<?php get_template_part( "template-parts/homepage/home1/blogcategories", "slider" );?>
<?php get_template_part( "template-parts/homepage/home1/newslater", "form" );?>
<?php get_template_part( "template-parts/homepage/home1/blog", "home1" );?>


<?php get_footer();?>