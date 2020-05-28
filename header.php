<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Templatemanja" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Morus is a very clean and modern Magazine / Blog Html Template. It's perfect for fast blogging, livestreams and classic blogs">
    <meta name="keywords"
        content="	blog, clean, newspaper, personal blog, magazine, sport, travel, minimal, personal, elegant, lifestyle, post, blogger, blog template.">


    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <!-- LOADER -->
    <div id="preloader">
        <div class="sk-folding-cube">
            <div class="sk-folding-cube-box">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->
    <!-- START HEADER -->
    <header class="header_wrap dark_skin fixed-top">
        <div class="top-header bg_dark light_skin">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="time_header">
                            <i class="far fa-clock"></i> <span><?php echo date( 'D, F, d, Y' ); ?></span>
                        </div>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header_top_left',
                                'menu_class'     => 'header_list text-center text-md-left',
                                'container'      => false,
                            ) );
                        ?>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">

                            <?php
                                if ( is_active_sidebar( 'headertop-right' ) ) {
                                    dynamic_sidebar( 'headertop-right' );
                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <?php if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        echo "<a class='navbar-brand' href='" . home_url( "/" ) . "'> " . get_bloginfo( 'name' ) . "</a>";
                    }
                ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">


                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main_menu',
                            'depth'          => 2,
                            'menu_class'     => 'navbar-nav',
                            'container'      => false,
                            'walker'         => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i
                                class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <?php get_search_form();?>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- START HEADER -->