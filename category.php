<?php get_header();?>
<?php

    $cat_image_id = get_field( 'category_img', get_queried_object() );
    $cat_image = wp_get_attachment_image_url( $cat_image_id, "category_img_size" );
?>

<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section background_bg overlay_bg_50 page_title_light"
    <?php if ( $cat_image_id ): ?>data-img-src="<?php echo $cat_image; ?>" <?php endif;?>>
    <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center text-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1><?php single_cat_title();?></h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB -->

<!-- START BLOG -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_list list_post">
                    <?php

                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                get_template_part( "template-parts/post/standard" );

                            }
                        }

                        wp_reset_postdata();
                    ?>
                </div>
                <div class="py-3 py-md-4 mt-2 mt-sm-0 mt-lg-5 border-top border-bottom">
                    <?php morus_pagination();?>
                </div>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<!-- END BLOG -->
<?php get_footer();?>