<?php
if ( class_exists( "Kirki" ) ) {
    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'switch',
        'settings' => 'category_show_hide',
        'label'    => esc_html__( 'Category section Hide Show', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Show Category', 'morus' ),
            'off' => esc_html__( 'Hide Category', 'morus' ),
        ],
    ] );
    Kirki::add_field( 'morus_theme_customizer', array(
        'type'            => 'select',
        'settings'        => 'category_fields',
        'label'           => esc_html__( 'Select category', 'morus' ),
        'section'         => 'homepage_one',
        // 'default'  => 'option-1',
        'priority'        => 10,
        'multiple'        => 15,
        'choices'         => Kirki_Helper::get_terms(
            array(
                'taxonomy'   => 'category',
                'hide_empty' => false,
                'parent'     => 0,
                'orderby'    => 'term_id',
            ) ),
        'active_callback' => [
            [
                'setting'  => 'category_show_hide',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ) );
    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'custom',
        'settings' => 'separator2',
        'label'    => esc_html__( 'End Category Slider Section', 'kirki' ),
        'section'  => 'homepage_one',
        'default'  => '<hr style="border-color: #000;">',
        'priority' => 10,
    ] );
}