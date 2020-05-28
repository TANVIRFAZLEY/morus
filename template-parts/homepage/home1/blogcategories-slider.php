<?php
    $category_show_hide = get_theme_mod( 'category_show_hide', true );
    $category_fields = get_theme_mod( 'category_fields' );
?>

<?php if ( $category_show_hide ): ?>
<!-- START BLOG SERVICES -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel_slider owl-carousel owl-theme nav_style4" data-margin="30" data-dots="false"
                    data-nav="true" data-loop="true" data-autoplay="true"
                    data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "767":{"items": "3"}}'>



                    <?php
                        if ( $category_fields && !is_wp_error( $category_fields ) ) {
                            foreach ( $category_fields as $term ) {
                                $get_term = get_term( $term, 'category' );
                                $cat_image_id = get_field( 'category_img', $get_term );
                                $cat_image = wp_get_attachment_image_url( $cat_image_id, "category_img_size" );

                            ?>
                    <div class="item">
                        <div class="service_box">
                            <a href="<?php echo esc_url( get_category_link( $get_term ) ); ?>">
                                <?php if ( $cat_image ): ?>
                                <img src="<?php echo esc_url( $cat_image ); ?>"
                                    alt="<?php echo esc_attr( $get_term->name ); ?>" />
                                <?php else: ?>
                                <div class="no-img">
                                    <?php _e( 'Please upload Image at category', 'morus' );?>
                                </div>
                                <?php endif;?>
                                <span class="lable"><?php echo esc_html( $get_term->name ); ?></span>
                            </a>

                        </div>
                    </div>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END BLOG CATEGOREIS -->
<?php endif;?>