<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
	<header id="header">
		<a class="logo" href="<?php bloginfo('siteurl'); ?>"><?php bloginfo('title'); ?></a>
		<nav>
			<a href="#menu">Menu</a>
		</nav>
	</header>
	
	<!-- Nav -->
	<?php
		wp_nav_menu(array(
			'theme_location'		=> 'menu-1',
			'menu_class'			=> 'links',
			'container'				=> 'nav',
			'container_id'			=> 'menu'
		));
	?>
