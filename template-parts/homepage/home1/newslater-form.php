<?php
    $newslater_show_hide = get_theme_mod( 'newslater_show_hide', true );
    $newslater_bg_image = get_theme_mod( 'nl_bg_img' );
    $newslater_heading = get_theme_mod( 'nl_heading', __( 'Subscribe Our Newsletter', 'morus' ) );
    $newslater_description = get_theme_mod( 'nl_description', __( 'Contrary to popular belief of lorem Ipsm Latin from consectetur industry blandit massa enim varius nunc.', 'morus' ) );
    $newslater_button_text = get_theme_mod( 'nl_button_text', __( 'subscribe', 'morus' ) );
    $newslater_nl_form_action = get_theme_mod( 'nl_form_action' );
?>
<?php if ( $newslater_show_hide ): ?>
<!-- START NEWSLETTER SECTION -->
<div class="section background_bg overlay_bg_70 overflow-hidden fixed_bg"
    data-img-src="<?php echo esc_attr( $newslater_bg_image ); ?>">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="heading_s1 heading_light">
                    <h4><?php echo esc_html( $newslater_heading ); ?></h4>
                </div>
                <p class="text-white mb-md-0"><?php echo esc_html( $newslater_description ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="newsletter_form input_tran_white">
                    <form action="<?php echo esc_attr( $newslater_nl_form_action ); ?>" method="POST" target="_blank">
                        <input type="text" name="EMAIL" required="" class="form-control form-control-sm rounded-input"
                            placeholder="<?php _e( "Your email address..", "morus" );?>">
                        <button type="submit" title="Subscribe" class="btn btn-default btn-radius btn-sm"
                            name="subscribe"
                            value="subscribe"><?php echo esc_html( $newslater_button_text ); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END NEWSLETTER SECTION -->
<?php endif;?>