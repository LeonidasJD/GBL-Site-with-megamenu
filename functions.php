<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts()
{
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
	wp_enqueue_script('font-awesome-package', 'https://kit.fontawesome.com/4507845d36.js" crossorigin="anonymous');
	wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('megamenu-css', get_theme_file_uri('/css/megamenu.css'));
	wp_enqueue_style('megamenu-css-de', get_theme_file_uri('/css/megamenu-de.css'));
	wp_enqueue_script('megamenu-js', get_theme_file_uri('/js/megamenu.js'), array('jquery'), '1.0', true);
	wp_enqueue_script('megamenu-de-js', get_theme_file_uri('/js/megamenuDe.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20);


function customMegamenu()
{
	register_nav_menu('custom_megamenu', 'Custom Megamenu');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'customMegamenu');

function customMegamenuMobile()
{
	register_nav_menu('custom_megamenu_mobile', 'Custom Megamenu Mobile');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'customMegamenuMobile');

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{

		$indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
		$display_depth = ($depth + 1); // because it counts the first submenu as 0

		// Add custom class to the submenu ul element.
		$output .= "\n$indent<ul class=\"sub-menu sub-menu-$display_depth\">\n";
	}
}

class Custom_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
		$display_depth = ($depth + 1); // because it counts the first submenu as 0

		// Add custom class to the submenu ul element for mobile.
		$output .= "\n$indent<ul class=\"mobile-sub-menu mobile-sub-menu-$display_depth\">\n";
	}
}

function custom_enqueue_child_theme_style()
{
	wp_enqueue_style('parent-theme-css', get_template_directory_uri() . 'https://cdn.wpml.org/style.css');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_child_theme_style');
