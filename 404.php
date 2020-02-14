<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
				<h1 class="entry-title">Error</h1>
			</div><!-- /.entry-header__inner -->
		</header><!-- /.entry-header -->
		<div class="site-container__inner">
			<div class="site-main">
				<div class="entry-content">
					<p>記事がみつかりませんでした。</p>
				</div><!-- /.entry-content -->
			</div><!-- /.site-main -->
		</div><!-- /.site-container__inner -->
	</div><!-- /.site-container -->

</main>
<?php
get_footer();
