<?php

    function morus_comments( $comment, $args, $depth ) {
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'div-comment';
        } else {
            $tag = 'li';
            $add_below = 'comment';
        }
    ?>

<<?php echo esc_html( $tag ); ?> class="comment_info" id="comment-<?php comment_ID();?>">
    <div class="d-flex">
        <div class="comment_user">
            <?php echo get_avatar( $comment, $args['avatar_size'], '', '', array( 'class' => 'rounded-circle' ) ); ?>
        </div>
        <div class="comment_content">
            <div class="d-flex">
                <div class="meta_data">
                    <h6><a href="<?php echo get_comment_author_link(); ?>"><?php comment_author();?></a></h6>
                    <div class="comment-time"><?php printf( '%s, %s', get_comment_date(), get_comment_time() );?></div>
                    <?php edit_comment_link( __( 'Edit', 'morus' ), '  ', '' );?>
                </div>
                <div class="ml-auto">
                    <?php
                        $comments_reply_args = array(
                                'add_below' => $add_below,
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth'],
                            );
                        comment_reply_link( array_merge( $args, $comments_reply_args ) );?>
                </div>

            </div>
            <?php comment_text();?>
        </div>
    </div>
    <?php if ( 'li' == $args['style'] ): ?>
</<?php echo esc_html( $tag ); ?>>
<?php endif;?>
<?php }?>