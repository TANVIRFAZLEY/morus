<?php

if ( class_exists( "Kirki" ) ) {

    Kirki::add_section( 'homepage_one', array(
        'title'           => esc_html__( 'HomePage One settings', 'morus' ),
        //'description'     => esc_html__( 'HomePage One settings.', 'morus' ),
        'panel'           => 'morus_panel',
        'priority'        => 160,
        'active_callback' => function () {
            return is_page_template( "page-templates/homestyle1.php" );
        },

    ) );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'switch',
        'settings' => 'slider_show_hide',
        'label'    => esc_html__( 'Banner section Hide Show', 'morus' ),
        'section'  => 'homepage_one',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Show Slider', 'morus' ),
            'off' => esc_html__( 'Hide Slider', 'morus' ),
        ],
    ] );

    Kirki::add_field( 'morus_theme_customizer', [
        'type'            => 'repeater',
        'label'           => esc_html__( 'Morus Slider', 'morus' ),
        'section'         => 'homepage_one',
        'priority'        => 10,
        'row_label'       => [
            'type'  => 'field',
            'value' => esc_html__( 'Slider', 'morus' ),
            'field' => "post",
        ],
        'button_label'    => esc_html__( 'Add New Slider', 'morus' ),
        'settings'        => 'home_slider_setting',
        'fields'          => [
            'post' => [
                'type'    => 'select',
                'label'   => esc_html__( 'Post Slider', 'morus' ),
                'choices' => Kirki_Helper::get_posts(
                    array(
                        'posts_per_page' => -1,
                        'post_status'    => 'publish',
                        'post_type'      => 'post',
                    )
                ),
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'slider_show_hide',
                'operator' => '===',
                'value'    => true,
            ],
        ],
    ] );
    Kirki::add_field( 'morus_theme_customizer', [
        'type'     => 'custom',
        'settings' => 'separator1',
        'label'    => esc_html__( 'End Slider Section', 'kirki' ),
        'section'  => 'homepage_one',
        'default'  => '<hr style="border-color: #000;">',
        'priority' => 10,
    ] );

}