<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hamdocs
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#primary">コンテンツにスキップする</a>

<header class="site-header">
	<?php if ( is_front_page() ) : ?>
		<h1 class="site-logo"><?php hamdocs_the_site_name(); ?></h1>
	<?php else : ?>
		<div class="site-logo"><?php hamdocs_the_site_name(); ?></div>
	<?php endif; ?>
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'header',
			'container'       => 'nav',
			'container_class' => 'site-header-nav',
			'menu_class'      => 'menu',
		)
	);
	?>
</header>
