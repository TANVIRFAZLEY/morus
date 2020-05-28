<?php get_header();?>

<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section bg_gray">
    <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center text-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1><?php _e( 'Page Not Fount', 'morus' );?></h1>
                </div>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- START SECTION BREADCRUMB -->

<!-- START 404 SECTION -->
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                <div class="text-center">
                    <div class="error_txt"><?php _e( 'Page Not Found', 'morus' );?></div>
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
<!-- END 404 SECTION -->

<?php get_footer();?>