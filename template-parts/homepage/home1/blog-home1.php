<!-- START BLOG WITH SIDEBAR -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_article">

                    <?php
                        $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
                        
                        // WP_Query arguments
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 6,
                            'paged'          => $paged,
                            'order'          => 'DESC',
                            'orderby'        => 'date',
                        );

                        // The Query
                        $post_q = new WP_Query( $args );

                        // The Loop
                        if ( $post_q->have_posts() ) {
                            while ( $post_q->have_posts() ) {
                                $post_q->the_post();
                                get_template_part( "template-parts/post/standard" );
                            }
                        }
                        wp_reset_query(); // Restore original Post Data

                    ?>

                </div>
                <?php
                    $total_pages = $post_q->max_num_pages;
                    $current_page = max( 1, get_query_var( 'page' ) );
                    morus_pagination( $paged, $total_pages );
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- END BLOG WITH SIDEBAR -->