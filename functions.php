<?php

//tgm plugin activation
require_once get_theme_file_path( "/inc/tgm/class-tgm-plugin-activation.php" );
require_once get_theme_file_path( "/inc/tgmpa.php" );

//Morus Assets
require_once get_theme_file_path( "/inc/morusassets.php" );
require_once get_theme_file_path( "/inc/morusnav-walker.php" );
require_once get_theme_file_path( "/inc/comment-callback.php" );
require_once get_theme_file_path( "/inc/metabox.php" );

// widgets
require_once get_theme_file_path( "/inc/widgets/aboutmewidget.php" );
require_once get_theme_file_path( "/inc/widgets/categorieswidget.php" );
require_once get_theme_file_path( "/inc/widgets/latestpost.php" );
require_once get_theme_file_path( "/inc/widgets/adswidget.php" );
require_once get_theme_file_path( "/inc/widgets/morusaboutwidget.php" );
require_once get_theme_file_path( "/inc/widgets/mark-social-widget.php" );
require_once get_theme_file_path( "/inc/widgets/morus-headertop-social.php" );

//customizer
require_once get_theme_file_path( "/inc/customizer/morus-customizer.php" );
require_once get_theme_file_path( "/inc/customizer/homepage-banner.php" );
require_once get_theme_file_path( "/inc/customizer/blog-categories.php" );
require_once get_theme_file_path( "/inc/customizer/newslater-section.php" );
require_once get_theme_file_path( "/inc/customizer/footer-settings.php" );

/**
 * Morus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Morus
 */

if ( !defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', time() );
}

if ( !function_exists( 'morus_setup' ) ):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function morus_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Morus, use a find and replace
         * to change 'morus' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'morus', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        //CUstom Image size
        add_image_size( 'category_img_size', 350, 240, true );
        add_image_size( 'about_me_widget', 288, 234, true );
        add_image_size( 'wid_lpost_thumb', 70, 70, true );
        add_image_size( 'blog_page_thumbnail', 730, 487, true );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main_menu'       => esc_html__( 'Primary', 'morus' ),
                'footer_menu'     => esc_html__( 'Footer Menu', 'morus' ),
                'header_top_left' => esc_html__( 'Header top left', 'morus' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'morus_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'morus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function morus_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'morus_content_width', 640 );
}
add_action( 'after_setup_theme', 'morus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function morus_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Blog sidebar', 'morus' ),
            'id'            => 'blog-sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'morus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Instagram', 'morus' ),
            'id'            => 'footer-instagram',
            'description'   => esc_html__( 'Add widgets here.', 'morus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 1', 'morus' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'morus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 2', 'morus' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'morus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer 3', 'morus' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'morus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Header Top Right', 'morus' ),
            'id'            => 'headertop-right',
            'description'   => esc_html__( 'Add widgets here.', 'morus' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h5 class="widget_title">',
            'after_title'   => '</h5>',
        )
    );
}
add_action( 'widgets_init', 'morus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function morus_scripts() {
    wp_enqueue_style( 'morus-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( "animation-css", get_theme_file_uri( "/assets/css/animate.css" ), array(), _S_VERSION );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/bootstrap/css/bootstrap.min.css" ), array(), _S_VERSION );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Prata&amp;display=swap' );
    wp_enqueue_style( 'google-fonts-poppins', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap' );
    wp_enqueue_style( "ionicons-css", get_theme_file_uri( "/assets/css/ionicons.min.css" ), array(), _S_VERSION );
    wp_enqueue_style( "themifyicon-css", get_theme_file_uri( "/assets/css/themify-icons.css" ), array(), _S_VERSION );
    wp_enqueue_style( "linearicons-css", get_theme_file_uri( "/assets/css/linearicons.css" ), array(), _S_VERSION );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/css/all.min.css" ), array(), _S_VERSION );
    wp_enqueue_style( "fontawesome4.7-css", "//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), _S_VERSION );
    wp_enqueue_style( "owlcarousel-css", get_theme_file_uri( "/assets/owlcarousel/css/owl.carousel.min.css" ), array(), _S_VERSION );
    wp_enqueue_style( "owltheme-css", get_theme_file_uri( "/assets/owlcarousel/css/owl.theme.css" ), array(), _S_VERSION );
    wp_enqueue_style( "owlthemedefault-css", get_theme_file_uri( "/assets/owlcarousel/css/owl.theme.default.min.css" ), array(), _S_VERSION );
    wp_enqueue_style( "magneficpopup-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), array(), _S_VERSION );
    wp_enqueue_style( "mainstyle-css", get_theme_file_uri( "/assets/css/style.css" ), array(), _S_VERSION );
    wp_enqueue_style( "responsive-css", get_theme_file_uri( "/assets/css/responsive.css" ), array(), _S_VERSION );
    wp_style_add_data( 'morus-style', 'rtl', 'replace' );

    //Script
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/bootstrap/js/bootstrap.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "owlcarousel-js", get_theme_file_uri( "/assets/owlcarousel/js/owl.carousel.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "magnificpopup-js", get_theme_file_uri( "/assets/js/magnific-popup.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "waypoints-js", get_theme_file_uri( "/assets/js/waypoints.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "imagesloaded-js", get_theme_file_uri( "/assets/js/imagesloaded.pkgd.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "isotope-js", get_theme_file_uri( "/assets/js/isotope.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "jqappear-js", get_theme_file_uri( "/assets/js/jquery.appear.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "jqparallax-js", get_theme_file_uri( "/assets/js/jquery.parallax-scroll.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "jqdd-js", get_theme_file_uri( "/assets/js/jquery.dd.min.js" ), array( "jquery" ), _S_VERSION, true );
    wp_enqueue_script( "morusscript-js", get_theme_file_uri( "/assets/js/scripts.js" ), array( "jquery" ), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'morus_scripts' );

//Pagination

function morus_pagination( $paged = '', $max_page = '' ) {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    if ( !$paged ) {
        $paged = get_query_var( 'paged' );
    }

    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }

    $paginate = paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'current'   => max( 1, $paged ),
        'total'     => $max_page,
        'mid_size'  => 1,
        'end_size'  => 1,
        'prev_next' => true,
        'show_all'  => true,
        'prev_text' => "<i class='linearicons-arrow-left'></i>",
        'next_text' => "<i class='linearicons-arrow-right'></i>",
        'type'      => 'list',
    ) );
    $paginate = str_replace( "<ul class='page-numbers'>", "<ul class='pagination justify-content-center'>", $paginate );
    $paginate = str_replace( "page-numbers", "page-link", $paginate );
    $paginate = str_replace( "current", "active", $paginate );
    $paginate = str_replace( "<li>", "<li class='page-item'>", $paginate );
    echo $paginate;

}

//MORUS SEARCH
function morus_search_form() {
    $home_url = esc_url( get_home_url( '/' ) );
    $value = esc_attr( get_search_query() );
    $lable = __( 'Search', 'morus' );
    $form = <<<FORM
    <form action="{$home_url}" method="GET">
        <input name="s" value="{$value}" type="text" placeholder="{$lable}" class="form-control" id="search_input">
        <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
    </form>
FORM;
    return $form;
}

add_action( 'get_search_form', 'morus_search_form' );

//comments form
function morus_comment_form_fields( $fields ) {

    $cookies_field = $fields['cookies'];
    $comment_field = $fields['comment'];
    unset( $fields['cookies'] );
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    // $fields['cookies'] = $cookies_field;

    return $fields;
}

add_filter( 'comment_form_fields', 'morus_comment_form_fields' );