<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tasheel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
    // Determine header classes based on page type
    $header_classes = array('header-main', 'header_b');

    // Front page
    if (is_front_page()) {
        $header_classes[] = 'header-front-page';
    } else {
        $header_classes[] = 'header-inner-page';
    }

    $header_class_string = implode(' ', array_unique($header_classes));
    ?>
    <header class="<?php echo esc_attr($header_class_string); ?>" id="headerMainSection">
        <div>
            <div class="header_main_wrapper">
                <div class="logo_desktop text-center d-flex">
                    <?php
                    $logo_path = get_template_directory() . '/assets/images/logo.svg';
                    $logo_url = get_template_directory_uri() . '/assets/images/logo.svg';
                    if (file_exists($logo_path)): ?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>">
                        </a>
                    <?php endif; ?>

                </div>
                <div class="desk_nav_right">
                    <div class="navbar nav_desk">
                        <div class="nav_desk_toggle" aria-hidden="true">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hamburger.svg'); ?>"
                                alt="">
                            <ul class="list-unstyled">
                                <li class="nav-item">
                                    <a class="nav-link nav-cta-text" href="<?php echo esc_url(home_url('/about')); ?>">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-cta-text"
                                        href="<?php echo esc_url(home_url('/services')); ?>">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-cta-text"
                                        href="<?php echo esc_url(home_url('/portfolio')); ?>">
                                        Portfolio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-cta-text"
                                        href="<?php echo esc_url(home_url('/careers')); ?>">
                                        Careers
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="menu_right_block">


                            <a class="get-in-touch-link nav-cta-text"
                                href="<?php echo esc_url(home_url('/contact')); ?>">
                                Get in touch
                            </a>

                        </div>
                    </div>

                </div>

                <div class="menu_toggle">
                    <button id="menuIcon" class="menu_icon" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div id="mobileMenuOverlay" class="mobile_menu_overlay">
                    <ul class="mobile_menu_list">
                        <li class="mobile_menu_item"><a href="<?php echo esc_url(home_url('/brands')); ?>">Brands</a>
                        </li>
                        <li class="mobile_menu_item"><a
                                href="<?php echo esc_url(home_url('/products')); ?>">Products</a></li>
                        <li class="mobile_menu_item"><a
                                href="<?php echo esc_url(home_url('/industries')); ?>">Industries We Serve</a></li>
                        <li class="mobile_menu_item"><a
                                href="<?php echo esc_url(home_url('/projects')); ?>">Projects</a></li>
                        <li class="mobile_menu_item"><a href="<?php echo esc_url(home_url('/media-center')); ?>">Media
                                Center</a></li>
                        <li class="mobile_menu_item"><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </header>