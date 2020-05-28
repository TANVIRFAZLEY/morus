<?php get_header();
?>



<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section bg_gray">
    <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center text-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1><?php
                            /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'morus' ), '<span>' . get_search_query() . '</span>' );
                        ?></h1>
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
                <div class="row">
                    <?php

                        if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                get_template_part( "template-parts/post/content" );

                            }
                    } else {?>
                    <div class="section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-10 animation" data-animation="fadeInUp"
                                    data-animation-delay="0.3s">
                                    <div class="text-center">
                                        <div class="error_txt"><?php _e( 'Nothing Found !', 'morus' );?></div>
                                        <h5 class="sub_error_txt mb-2 mb-sm-4">
                                            <?php _e( 'oops! The page you requested was not found!', 'morus' );?></h5>
                                        <p><?php _e( 'The page you are looking for was removed, renamed  or might never existed.', 'morus' );?>
                                        </p>
                                        <div class="search_form pb-3 pb-sm-4">
                                            <?php get_search_form();?>
                                        </div>
                                        <a href="<?php echo home_url( "/" ); ?>"
                                            class="btn btn-default"><?php _e( 'Back To Home', 'morus' );?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }

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