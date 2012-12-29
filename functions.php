<?php


require_once( TEMPLATEPATH .'/inc/stresspress.php' );
require_once( TEMPLATEPATH .'/inc/types.php' );


// Main init function
add_action( 'init', 'sld_init' );
function sld_init() {
	
	add_image_size( 'home-page', 600, 9999 );
	add_image_size( 'work-banner', 720, 126, true );

	if ( !is_admin() && !is_login_page() ) {
		// scripts
		wp_deregister_script( 'l10n' );
		wp_deregister_script( 'jquery');
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'lazyload', get_bloginfo('template_url').'/js/jquery.lazyload.mini.js', 'jquery' );
		wp_enqueue_script( 'site', get_bloginfo('template_url').'/js/cc.js', array( 'jquery', 'lazyload' ) );

		// stylesheets
		wp_enqueue_style( 'style', get_bloginfo('stylesheet_url') );

	}
}

