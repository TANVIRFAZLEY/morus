<?php
    /**
     * The sidebar containing the main widget area
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package Morus
     */

    if ( !is_active_sidebar( 'blog-sidebar' ) ) {
        return;
    }
?>
<div class="col-lg-4">
    <div class="sidebar mt-4 pt-2 mt-lg-0 pt-lg-0">
        <?php dynamic_sidebar( 'blog-sidebar' );?>
    </div>
</div>