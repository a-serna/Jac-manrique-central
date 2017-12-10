<?php
// add sidebar widget
add_action( 'widgets_init', 'mat_widget_areas' );
function mat_widget_areas() {
    register_sidebar( array(
        'name' => 'Theme Sidebar',
        'id' => 'mat-sidebar',
        'description' => 'El sidebar se muestra a el lado derecho de la página',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title nav-item">',
		'after_title'   => '</h2>',
    ));
}
add_theme_support( 'post-thumbnails' );

// navigation menu
register_nav_menus( array(
	'header-menu' => 'Header Menu',
    'footer-menu' => 'Footer Menu'
) );

// function featuredSupported()
// {
//     // add featured image support
//     add_theme_support('post_thumbnail');
// }
//     add_action('after_setup_theme', 'featuredSupported');
//
// function custom_excerpt_length() {
//     return 25;
// }
// add_filter('excerpt_length', 'custom_excerpt_length');
?>
