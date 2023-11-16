<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1');
$enable_skip_link = apply_filters('hello_elementor_enable_skip_link', true);
$skip_link_url = apply_filters('hello_elementor_skip_link_url', '#content');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <script src="https://kit.fontawesome.com/8ba129c573.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div class="myMenus">
        <div class="fullSizeContainer">
            <div class="Mycontainer container">
                <div class="headerWrapper">
                    <div class="logoImg"><a href="<?php echo site_url() ?>"><img
                                src="/wp-content/uploads/2023/02/Vector-e1685534279823.png" alt=""></a></div>
                    <nav class="main-navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'custom_megamenu',
                                'menu_class' => 'menuItems',
                                'link_after' => '<i class="fa-solid fa-angle-left fa-rotate-270 myicon"></i>',
                                'walker' => new Custom_Walker_Nav_Menu(),


                            )
                        );
                        ?>

                    </nav>

                    <div class="contactUs"><a href="">CONTACT US</a></div>
                </div>

            </div>

        </div>
        <div class="mobileMenu">

        </div>
    </div>