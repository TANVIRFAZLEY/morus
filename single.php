<?php get_header();
    the_post();
    $comments_number = get_comments_number( get_the_ID() );

?>

<!-- START SECTION BREADCRUMB -->
<div class="section breadcrumb_section bg_gray">
    <div class="container">
        <!-- STRART CONTAINER -->
        <div class="row align-items-center text-center">
            <div class="col-md-12">
                <div class="page-title">
                    <h1><?php _e( 'Blog Single post', 'morus' );?></h1>
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
                <div class="single_post">
                    <div class="blog_img">
                        <?php the_post_thumbnail( 'large' );?>
                        <div class="blog_tags blog_tags_cat">
                            <?php
                                if ( has_category() ) {
                                    the_category( ' ' );
                                }
                            ?>
                        </div>
                    </div>
                    <div class="blog_content">
                        <div class="blog_text">
                            <h2 class="blog_title"><?php the_title();?></h2>
                            <ul class="blog_meta">
                                <li><a href="#"><i class="ti-calendar"></i> <?php echo get_the_date(); ?></a></li>
                                <li><a href="#"><i class="ti-comments"></i> <?php echo esc_html( $comments_number );
                                                                            _e( " Comments", "morus" ); ?></a></li>
                            </ul>
                            <?php the_content();?>
                            <div class="blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-12 mb-3 mb-md-0">

                                        <div class="artical_tags">

                                            <?php the_tags( '', '', '' );?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post_navigation">
                    <div class="divider"></div>
                    <div class="row align-items-center justify-content-between py-4">
                        <?php

                            $morus_prev_post = get_previous_post();
                            $morus_next_post = get_next_post();
                        ?>
                        <div class="col-5">
                            <?php if ( $morus_prev_post ): ?>
                            <a href="<?php echo esc_url( get_the_permalink( $morus_prev_post ) ); ?>">
                                <div class="post_nav post_nav_prev">
                                    <i class="ti-arrow-left"></i>
                                    <span><?php _e( 'Previous Post', 'morus' );?></span>
                                </div>
                            </a>
                            <?php endif;?>
                        </div>
                        <div class="col-2">
                            <a href="#" class="post_nav_home">
                                <i class="ti-layout-grid2"></i>
                            </a>
                        </div>
                        <div class="col-5">
                            <?php if ( $morus_prev_post ): ?>
                            <a href="<?php echo esc_url( get_the_permalink( $morus_next_post ) ); ?>">
                                <div class="post_nav post_nav_next">
                                    <i class="ti-arrow-right"></i>
                                    <span><?php _e( 'Next Post', 'morus' );?></span>
                                </div>
                            </a>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
                <div class="card post_author">
                    <div class="card-body">
                        <div class="author_img">
                            <?php echo get_avatar( get_the_author_meta( "ID" ), 80, '', '', array( "class" => "rounded-circle" ) ); ?>
                        </div>
                        <div class="author_info">
                            <h6 class="author_name"><a
                                    href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"
                                    class="mb-1 d-inline-block"><?php the_author();?></a></h6>
                            <p><?php the_author_meta( 'description' );?></p>
                        </div>
                    </div>
                </div>
                <!-- related post start -->
                <?php get_template_part( "template-parts/related-post/related" );?>
                <!-- related post end -->

                <?php comments_template();?>
            </div>
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<!-- END BLOG -->

<?php get_footer();?>