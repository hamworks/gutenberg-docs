<?php
/**
 * Template Name: ワンカラムのページ
 *
 * @package Hamdocs
 */

get_header(); ?>

<main id="primary">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'onecolumn' );
	endwhile;
	?>
</main>
<?php
get_footer();
