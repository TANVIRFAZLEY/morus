<?php

    $comments_number = get_comments_number( get_the_ID() );
?>
<div class="col-md-12">
    <div class="blog_post">
        <div class="blog_img">
            <a href="<?php the_permalink();?>">
                <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'blog_page_thumbnail' );
                }?>
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
                            <span><?php echo esc_html( get_the_date() ); ?></span></a>
                    </li>
                    <li><a href="<?php the_permalink();?>"><i class="ti-comments"></i> <span><?php echo esc_html( $comments_number );
_e( " Comments", "morus" ); ?></span></a></li>
                </ul>
                <p>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 30, '' ); ?></p>
                </p>
            </div>
        </div>
    </div>
</div>