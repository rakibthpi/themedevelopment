<?php 

// Title tag area start 


add_action('after_setup_theme',function(){

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');


	// Menu Register area start 
	register_nav_menus(array(
		'main-menu'		=>	'Main menu',
		'footer-menu'	=>	'Footer menu'
	));


	// Services Post type 
	register_post_type('services',array(
		'labels'	=>	array(
			'name'		=>	'Services',
			'singular_name'	=>	'Services',
			'add_new'		=>	'Add New Services',
			'add_new_item'	=>	'Add new Services',
			'remove_featured_image'		=>	'Remove services images',
			'set_featured_image'		=>	'Set services images',
			'featured_image'			=>	'Services Images',

		),
		'public'	=>	true,
		'supports' => array( 'title','editor','excerpt','thumbnail'),
		'menu_position'				=>	5,
		'menu_icon'		=>	'dashicons-admin-tools',

	));

	register_taxonomy('service_type','services',array(
		'labels'		=>	array(
			'name'		=>	'Services Type',
			'add_new_item'	=>	'Add Services Item',
		),
		'hierarchical'	=>	true,
		'public'		=>	true
	));

});


function rakibthpi_sidebar_area(){
	register_sidebar(array(
		'name'	=>	'Right Sidebar 1',
		'id'	=>	'right_sidebar1',
		'description'	=>	'This is a heading sidebar area',
		'before_widget'	=>	'<div class="header_widget">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'

	));
}
add_action('widgets_init','rakibthpi_sidebar_area');






add_filter( 'use_widgets_block_editor', '__return_false' );