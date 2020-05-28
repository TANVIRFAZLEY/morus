<?php

if ( class_exists( "Kirki" ) ) {
    Kirki::add_config( 'morus_theme_customizer', array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );
    Kirki::add_panel( 'morus_panel', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Morus Theme Options', 'morus' ),
        'description' => esc_html__( 'Theme options', 'morus' ),
    ) );

}