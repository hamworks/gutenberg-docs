<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hamworks
 */

get_header();
?>
<div class="site-main-visual"><img src="<?php header_image(); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt=""></div>

<div class="site-container">
	<div class="site-container__inner">
		<main id="primary" class="site-main">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
			endif;
			?>
		</main>
	</div><!-- /.site-container__inner -->
</div><!-- /.site-container -->

<?php
get_footer();
