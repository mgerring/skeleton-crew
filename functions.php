<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_post_type_support('page', 'excerpt');
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'header', 'Header Menu' );
	register_nav_menu( 'footer', 'Footer Menu' );
}
?>