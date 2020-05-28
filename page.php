<?php
    /**
     * The template for displaying all pages
     *
     * This is the template that displays all pages by default.
     * Please note that this is the WordPress construct of pages
     * and that other 'pages' on your WordPress site may use a
     * different template.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Morus
     */

    get_header();
?>
<?php if ( !is_home() ): ?>
<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section background_bg overlay_bg_50 page_title_light"
    data-img-src="<?php if ( has_post_thumbnail() ) {the_post_thumbnail_url( 'full' );}?>">
    <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center text-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB -->
<?php endif;?>
<!-- START BLOG -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php

                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                the_content();

                            }
                        }

                        wp_reset_postdata();
                    ?>

                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<!-- END BLOG -->
<?php get_footer();?>