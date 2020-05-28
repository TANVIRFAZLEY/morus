<?php get_header();?>


<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section bg_gray">
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