<?php

// cargo los recursos que necesito para mi tema
function mitema_scripts() {
	//carga los css
	wp_enqueue_style('mitema_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('mitema_bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
	wp_enqueue_style('mitema_fontawesome', get_template_directory_uri() . '/css/fontAwesome.css');
	wp_enqueue_style('mitema_heroslider', get_template_directory_uri() . '/css/hero-slider.css');
	wp_enqueue_style('mitema_owl', get_template_directory_uri() . '/css/owl-carousel.css');
	wp_enqueue_style('mitema_datepicker', get_template_directory_uri() . '/css/datepicker.css');
	wp_enqueue_style('mitema_template', get_template_directory_uri() . '/css/templatemo-style.css');
	wp_enqueue_style('mitema_raleway', 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900');
	wp_enqueue_style('mitema_style', get_stylesheet_uri());
	//carga los js
	wp_enqueue_script('jquery');
	wp_enqueue_script('mitema_modrnizer', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js');
	wp_enqueue_script('mitema_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
	wp_enqueue_script('mitema_bs', get_template_directory_uri() . '/js/vendor/bootstrap.min.js');
	wp_enqueue_script('mitema_datepicker', get_template_directory_uri() . '/js/datepicker.js');
	wp_enqueue_script('mitema_plugins', get_template_directory_uri() . '/js/plugins.js');
	wp_enqueue_script('mitema_main', get_template_directory_uri() . '/js/main.js');
}
add_action('wp_enqueue_scripts', 'mitema_scripts');

//registrar un menu
function mitema_menus() {
	register_nav_menu('main-menu', __('Menú principal'));
	register_nav_menu('footer-menu', __('Menú del pie de página'));
}
add_action('init', 'mitema_menus');

//registrar un sidebar
function mitema_sidebar() {
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => __('Sidebar del post'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>'
		)
	);
}
add_action('widgets_init', 'mitema_sidebar');

// dar soporte a las imagenes destacadas
add_theme_support('post-thumbnails');

?>