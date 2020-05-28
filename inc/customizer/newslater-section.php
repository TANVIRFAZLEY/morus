<?php
if ( class_exists( "Kirki" ) ) {
    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'switch',
        'settings' => 'newslater_show_hide',
        'label'    => esc_html__( 'Category section Hide Show', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Show Newslater', 'morus' ),
            'off' => esc_html__( 'Hide Newslater', 'morus' ),
        ],
    ] );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'image',
        'settings' => 'nl_bg_img',
        'label'    => esc_html__( 'Background Image', 'morus' ),
        'section'  => 'homepage_one',
    ] );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'text',
        'settings' => 'nl_heading',
        'label'    => esc_html__( 'Type section title', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => esc_html__( 'Subscribe Our Newsletter', 'morus' ),
        'priority' => 10,
    ] );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'textarea',
        'settings' => 'nl_description',
        'label'    => esc_html__( 'Type section description', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => esc_html__( 'Contrary to popular belief of lorem Ipsm Latin from consectetur industry blandit massa enim varius nunc.', 'morus' ),
        'priority' => 10,
    ] );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'        => 'text',
        'settings'    => 'nl_form_action',
        'label'       => esc_html__( 'Paste your action code', 'morus' ),
        'section'     => 'homepage_one',
        'description' => esc_html__( 'Paste your mailchimp action code this field are required', 'morus' ),
        'priority'    => 10,
    ] );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'text',
        'settings' => 'nl_button_text',
        'label'    => esc_html__( 'Type Button text', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => esc_html__( 'subscribe', 'morus' ),
        'priority' => 10,
    ] );
    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'custom',
        'settings' => 'separator3',
        'label'    => esc_html__( 'End Newsletter Section', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => '<hr style="border-color: #000;">',
        'priority' => 10,
    ] );
}