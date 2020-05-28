<?php

    $slider_hide_show = get_theme_mod( 'slider_show_hide', true );

?>

<?php if ( $slider_hide_show ): ?>
<!-- START SECTION BANNER -->
<div class="banner_section staggered-animation-wrap slide_medium">
    <div class="carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-items="1" data-dots="false"
        data-nav="true" data-smart-speed="1500">

        <?php

            $home_slider_setting = get_theme_mod( 'home_slider_setting' );
            $posts_per_page = count( $home_slider_setting );

            $home_slider_setting_id = array_column( $home_slider_setting, "post" );

            // WP_Query arguments
            $args = array(
                'post_type'           => array( 'post' ),
                'post_status'         => array( 'publish' ),
                'posts_per_page'      => $posts_per_page,
                'ignore_sticky_posts' => false,
                'post__in'            => $home_slider_setting_id,
                'orderby'             => 'post__in',
            );

            // The Query
            $slider = new WP_Query( $args );

            // The Loop
            if ( $slider->have_posts() ) {
                while ( $slider->have_posts() ) {
                    $slider->the_post();
                    $image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                    $categories = get_the_category();
                    $category = $categories[mt_rand( 0, count( $categories ) - 1 )];
                    $cat_name = $category->cat_name;
                    $cat_link = get_category_link( $category );
                    $comments_number = get_comments_number( get_the_ID() );

                ?>
        <div class="item active background_bg overlay_bg_60"
            data-img-src="<?php if ( has_post_thumbnail() ) {echo esc_url( $image );}?>">
            <div class="banner_slide_content">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row">
                        <div class="col-xl-6 col-md-8 col-sm-12">
                            <div class="banner_content">
                                <div class="blog_tags">
                                    <?php if ( !empty( $cat_name ) ): ?>
                                    <a class="blog_tags_cat bg_warning"
                                        href="<?php echo esc_attr( $cat_link ); ?>"><?php echo esc_html( $cat_name ); ?></a>
                                    <?php endif;?>
                                </div>
                                <h2 class="blog_heading"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                </h2>
                                <ul class="blog_meta">
                                    <li>
                                        <a href="<?php the_permalink();?>">
                                            <i class="ti-calendar"></i>
                                            <span><?php echo esc_html( get_the_date() ); ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php the_permalink();?>">
                                            <i class="ti-comments"></i>
                                            <span><?php echo esc_html( $comments_number );
                                                          _e( " Comments", "morus" ); ?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
            </div>
        </div>
        <?php }
            } else {
                // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata();

        ?>
    </div>
</div>
<!-- END SECTION BANNER -->
<?php endif;?>