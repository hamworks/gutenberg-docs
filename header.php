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

<?php if ( ! is_front_page() ) : ?>
<header class="site-header">
	<div class="site-logo"><?php \HamDocs\the_site_name(); ?></div>
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
<?php else : ?>

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

<?php endif; ?>
