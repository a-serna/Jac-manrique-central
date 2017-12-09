<?php
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
        // 'before'   => '<h5>',
        // 'after'    => '</h5>,
    ));
}
register_nav_menus( array(
	'header-menu' => 'Header Menu Jac',
) );
?>
