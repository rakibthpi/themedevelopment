<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header_main_menu">
		<?php 
			wp_nav_menu(array(
				'theme_location'		=>	'main-menu',
				'menu_class'			=>	'outmenuclass'
			));
		?>
	</div>

	