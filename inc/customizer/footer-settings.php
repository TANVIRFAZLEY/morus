<?php
if ( class_exists( "Kirki" ) ) {
    Kirki::add_section( 'footer_settings', array(
        'title'    => esc_html__( 'Footer settings', 'morus' ),
        //'description'     => esc_html__( 'Footer settings.', 'morus' ),
        'panel'    => 'morus_panel',
        'priority' => 160,
    ) );
    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'textarea',
        'settings' => 'morus_copyrights_text',
        'label'    => esc_html__( 'Footer copyrights text', 'morus' ),
        'section'  => 'footer_settings',
        'priority' => 10,
        'default'  => '© 2020 All Rights Reserved By',
    ] );
}