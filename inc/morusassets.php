<?php

// morus change custom logo class
function morus_change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'logo_dark', $html );
    $html = str_replace( 'logo_dark-link', 'navbar-brand', $html );

    return $html;
}
add_filter( 'get_custom_logo', 'morus_change_logo_class' );