<?php
    $comments_number = get_comments_number( get_the_ID() );
    //$addmore = "<a href='.the_permalink().'>Read More</a>";
    // $moreLink = '<a href="' . the_permalink() . '"> Read More..</a>';
    /* $morus_current_index = $wp_query->current_post + 1;
    $morus_id = ( $morus_current_index % 4 == 1 ) ? the_post_thumbnail( 'full' ) : the_post_thumbnail( 'category_img_size' );
    $count = 1;
    $count++; */

    /* $post_id = get_the_ID(); // or use the post id if you already have it
    $category_object = get_the_category( $post_id );
    $category_name = $category_object[0]->name; */
?>


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
            <h5 class="blog_heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            <ul class="blog_meta">
                <li><a href="<?php the_permalink();?>"><i class="ti-calendar"></i>
                        <span><?php echo esc_html( get_the_date() ); ?></span></a></li>
                <li><a href="<?php the_permalink();?>"><i class="ti-comments"></i> <span><?php echo esc_html( $comments_number );
_e( " Comments", "morus" ); ?></span></a></li>
            </ul>

            <p><?php echo wp_trim_words( get_the_excerpt(), 30, '' ); ?></p>
            <a href="<?php the_permalink();?>"><?php _e( "Read More", "morus" );?></a>
        </div>
    </div>
</div>