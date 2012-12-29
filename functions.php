<?php


require_once( TEMPLATEPATH .'/inc/stresspress.php' );
require_once( TEMPLATEPATH .'/inc/types.php' );
require_once( TEMPLATEPATH .'/inc/pbd-ajax-load-posts/pbd-ajax-load-posts.php' );


// Main init function
add_action( 'init', 'sld_init' );
function sld_init() {
	
	add_image_size( 'home-page', 9999, 600 );
	add_image_size( 'work-banner', 1001, 126, true );

	if ( !is_admin() && !is_login_page() ) {
		// scripts
		wp_deregister_script( 'l10n' );
		wp_deregister_script( 'jquery');
		wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'lazyload', get_bloginfo('template_url').'/js/jquery.lazyload.mini.js', 'jquery' );
		wp_enqueue_script( 'site', get_bloginfo('template_url').'/js/cc.js', array( 'jquery', 'lazyload' ) );
		wp_localize_script( 'site', 'cc', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'template_url' => get_bloginfo('template_url'),
			) );

		// stylesheets
		wp_enqueue_style( 'style', get_bloginfo('stylesheet_url') );

	}
}

add_filter( 'mce_buttons_2', 'cc_buttons' );
function cc_buttons( $buttons ) {
	$buttons[] = 'hr';
	return $buttons;
}

add_filter( 'the_content', 'cc_hr' );
function cc_hr( $the_content ) {
	$the_content = preg_replace( '|<hr />|', '</article></div></section><section><div><article>', $the_content );
	return $the_content;
}
