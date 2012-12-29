<?php 
/**
* @author stresslimit
* 
* Description: this file registers the custom content types
*
*/


if (function_exists('sld_register_post_type')) {

	sld_register_post_type( 'talk', array( 'hierarchical' => true, 'has_archive' => false ) );
	sld_register_post_type( 'work', array( 'hierarchical' => true, 'has_archive' => false ) );
	// sld_register_taxonomy( 'mytaxonomy', array( 'mytype' ) );

}



add_action( 'admin_init', 'sld_custom_fields');
function sld_custom_fields() {
	if ( !function_exists('x_add_metadata_group') ) return; // let's not get ourselves locked out of the site

	/* talks & work */
	x_add_metadata_group( 'details', array('talk','work'), array('label' => 'Details', 'priority' => 'high') );
	x_add_metadata_field( 'link', array('talk','work'), array('group' => 'details', 'label' => 'Link', 'field_type' => 'text' ) );

	/* mytype */
	// x_add_metadata_group( 'mytype-details', array('mytype'), array('label' => 'mytype Details', 'priority' => 'high') );
	// x_add_metadata_field( 'mytype_field', array('mytype'), array('group' => 'mytype-details', 'label' => 'mytype Field', 'field_type' => 'text' ) );

}

