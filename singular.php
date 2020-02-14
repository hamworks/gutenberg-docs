<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hamdocs
 */

get_header(); ?>

<main id="primary">
	<?php
	if ( ! is_front_page() ) :
		get_template_part( 'template-parts/breadcrumb' );
	endif;

	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	endwhile;
	?>
</main>
<?php
get_footer();
