<?php
    /**
     * The template for displaying comments
     *
     * This is the template that displays the area of the page that contains both the current comments
     * and the comment form.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Morus
     */

    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if ( post_password_required() ) {
        return;
    }
?>

<div id="comments" class="comment-area">

    <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ):
    ?>
    <div class="content_title">
        <h5>

            <?php
                $morus_comment_count = get_comments_number();
                if ( $morus_comment_count <= 1 ) {
                    echo "(" . esc_html( $morus_comment_count ) . ")" . __( ' Comment', 'morus' );
                } else {
                    echo "(" . esc_html( $morus_comment_count ) . ")" . __( ' Comments', 'morus' );
                }
            ?>

        </h5>
    </div>

    <?php the_comments_navigation();?>

    <ul class="list_none comment_list">
        <?php
            wp_list_comments(
                array(
                    'style'      => 'ul',
                    'callback'   => 'morus_comments',
                    'short_ping' => true,
                )
            );
        ?>
    </ul><!-- .comment-list -->
    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( !comments_open() ):
    ?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'morus' );?></p>
    <?php
        endif;
        endif; // Check for have_comments().

    ?>
    <div class="content_title">
        <h5><?php _e( 'Write a comment', 'morus' );?></h5>
    </div>


    <?php
        $morus_comments_fields = array();
        $name_placeholder = __( 'Your Name', 'morus' );
        $email_placeholder = __( 'Your Email', 'morus' );
        $website_placeholder = __( 'Your Website', 'morus' );
        $comment_placeholder = __( 'Your Comment', 'morus' );
        $coockis_value = __( 'Save my name, email, and website in this browser for the next time I comment.', 'morus' );
        $submit_value = __( 'Submit', 'morus' );
        //cookise
        $commenter = wp_get_current_commenter();
        $consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
        //echo '<div class="row">';
        $morus_comments_fields['author'] = <<<EOD
        <div class="row">
            <div class="form-group col-md-4">
<input name="author" class="form-control" placeholder="{$name_placeholder}" required="required" type="text">
</div>
EOD;
        $morus_comments_fields['email'] = <<<EOD
    <div class="form-group col-md-4">
    <input name="email" class="form-control" placeholder="{$email_placeholder}" required="required" type="email">
</div>
EOD;
        $morus_comments_fields['url'] = <<<EOD
    <div class="form-group col-md-4">
    <input name="url" class="form-control" placeholder="{$website_placeholder}" required="required" type="text">
</div>
EOD;
        if ( is_user_logged_in() ) {
            $morus_comment_field = <<<EOD
    <div class="row">
    <div class="form-group col-md-12">
            <textarea rows="3" name="message" class="form-control" placeholder="{$comment_placeholder}"
                required="required"></textarea>
        </div>
EOD;
        } else {
            $morus_comment_field = <<<EOD
    <div class="form-group col-md-12">
            <textarea rows="3" name="message" class="form-control" placeholder="{$comment_placeholder}"
                required="required"></textarea>
        </div>
EOD;
        }

        $morus_comments_fields['cookies'] = <<<EOD
    <div class="form-group col-md-12">
            <div class="chek-form">
                <div class="custome-checkbox">
                    <input class="form-check-input" type="checkbox" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent" value="yes" {$consent}>
                    <label class="form-check-label" for="wp-comment-cookies-consent"><span>{$coockis_value}</span></label>
                </div>
            </div>
        </div>
EOD;
        $morus_submit_btn_field = <<<EOD
    <div class="form-group col-md-12">
            <button value="Submit" name="submit" class="btn btn-default" type="submit">{$submit_value}</button>
        </div>
        </div>
EOD;
        // echo '</div>';

        $morus_comment_form_arguments = array(
            'fields'               => $morus_comments_fields,
            'comment_field'        => $morus_comment_field,
            'submit_button'        => $morus_submit_btn_field,
            'class_form'           => 'field_form',
            'comment_notes_before' => '',
            'comment_notes_after'  => '',
            'title_reply'          => '',
        );

        comment_form( $morus_comment_form_arguments );

    ?>









</div><!-- #comments -->