<!-- START SECTION INSTAGRAM IMAGE -->
<div class="section p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <?php
                    if ( is_active_sidebar( 'footer-instagram' ) ) {
                        dynamic_sidebar( 'footer-instagram' );
                    }

                ?>
                <div class="follow_box">
                    <h3><i class="ti-instagram"></i> instagram</h3>
                    <span>@morusblog</span>
                </div>
                <div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false" data-margin="0"
                    data-loop="true" data-autoplay="true"
                    data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                    <div class="item">
                        <div class="instafeed_box">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img1.jpg"
                                    alt="insta_img1" />
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img2.jpg"
                                    alt="insta_img2" />
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img3.jpg"
                                    alt="insta_img3" />
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img4.jpg"
                                    alt="insta_img4" />
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img5.jpg"
                                    alt="insta_img5" />
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instafeed_box">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_img6.jpg"
                                    alt="insta_img6" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION INSTAGRAM IMAGE -->

<!-- START FOOTER SECTION -->
<footer class="footer_dark bg_black">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-8 col-sm-12">
                    <?php
                        if ( is_active_sidebar( 'footer-1' ) ) {
                            dynamic_sidebar( 'footer-1' );
                        }

                    ?>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-5">
                    <div class="widget">
                        <h6 class="widget_title"><?php _e( 'Useful Links', 'morus' );?></h6>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'footer_menu',
                                'menu_class'     => 'widget_links',
                                'container'      => false,
                            ) );
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-7">
                    <?php
                        if ( is_active_sidebar( 'footer-2' ) ) {
                            dynamic_sidebar( 'footer-2' );
                        }

                    ?>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <?php
                        if ( is_active_sidebar( 'footer-3' ) ) {
                            dynamic_sidebar( 'footer-3' );
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php $morus_copyrights_text = get_theme_mod( 'morus_copyrights_text', '© 2020 All Rights Reserved By ' );?>
                    <p class="copyright m-0 text-center">
                        <?php printf( esc_html__( '%1$s %2$s.', 'morus' ), $morus_copyrights_text, '<a class="text_default" href="https://tanvirfazley.com/">Tanvir Fazley Rubbe</a>' );?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>


<?php wp_footer();?>
</body>


</html>