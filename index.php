<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hamdocs
 */

get_header(); ?>

<main id="primary">
	<?php
	if ( ! is_front_page() ) :
		get_template_part( 'template-parts/breadcrumb' );
	endif;
	?>

	<div class="site-container">
		<header class="entry-header">
			<div class="entry-header__inner">
				<?php if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				<?php else : ?>
					<h1 class="entry-title"><?php the_archive_title(); ?></h1>
				<?php endif; ?>
			</div><!-- /.entry-header__inner -->
		</header><!-- /.entry-header -->
		<div class="site-container__inner">
			<div class="site-main">
				<?php if ( have_posts() ) : ?>
					<div class="wp-card-blocks">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'archive' );

						endwhile;
						?>
					</div><!-- /.wp-card-blocks -->
					<?php
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div><!-- /.site-main -->
		</div><!-- /.site-container__inner -->
	</div><!-- /.site-container -->
</main><!-- #primary -->

<?php
get_footer();
