<?php
    $idd = get_queried_object_id();
    $cat = wp_get_post_categories( $idd );
    $comments_number = get_comments_number( get_the_ID() );
    $args = array(
        'post__not_in'        => array( $idd ),
        'category__in'        => $cat,
        'posts_per_page'      => 2,
        'ignore_sticky_posts' => 1,
    );
    $morus_rel = new wp_query( $args );
?>
<?php if ( $morus_rel->have_posts() ): ?>
<div class="related_post">
    <div class="content_title">
        <h5><?php _e( 'Related posts', 'morus' );?></h5>
    </div>
    <div class="row">
        <?php while ( $morus_rel->have_posts() ): $morus_rel->the_post();?>
        <div class="col-md-6">
            <div class="blog_post">
                <div class="blog_img">
                    <a href="<?php the_permalink();?>">
                        <?php

                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'category_img_size' );
                                    }
                                ?>
                    </a>
                </div>
                <div class="blog_content">
                    <div class="blog_text">
                        <div class="blog_tags blog_tags_cat">
                            <?php
                                        if ( has_category() ) {
                                            the_category( ' ' );
                                        }
                                    ?>
                        </div>
                        <h5 class="blog_heading"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h5>
                        <ul class="blog_meta">
                            <li><a href="<?php the_permalink();?>"><i class="ti-calendar"></i>
                                    <span><?php echo esc_html( get_the_date() ); ?></span></a></li>
                            <li><a href="<?php the_permalink();?>"><i class="ti-comments"></i> <span><?php echo esc_html( $comments_number );
    _e( " Comments", "morus" ); ?></span></a></li>
                        </ul>
                        <p><?php echo wp_trim_words( get_the_excerpt(), 20, '' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>
</div>
<?php
    endif;
wp_reset_postdata();
?>