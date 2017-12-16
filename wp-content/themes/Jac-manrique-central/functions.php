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
  function register_my_menus(){
    register_nav_menus( array(
      'header-menu' => 'Header Menu',
      'footer-menu' => 'Footer Menu',
    ) );
  }
  add_action('init', 'register_my_menus');
  // formulario de contacto
  // register_setting( 'Jac-contacto-opciones', 'activate' );
  //
  // add_settings_section( 'Jac-contacto-sección', 'Contacto', 'Jac_contacto_sección' );
  //
  // add_settings_field( 'activate-form', 'Activate Contact Form', 'Jac-contacto-sección');
  // 
?>
