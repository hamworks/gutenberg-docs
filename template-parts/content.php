<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hamworks
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail"><?php hamdocs_the_post_thumbnail( 'full' ); ?></div>
	<div class="site-container has-right-sidebar">
		<header class="entry-header">
			<div class="entry-header__inner">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
				<p class="entry-posted">Posted: <?php the_date(); ?> Updated: <?php the_modified_date(); ?></p>
			</div><!-- /.entry-header__inner -->
		</header><!-- /.entry-header -->

		<div class="site-container__inner">
			<div class="site-main">
				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hamworks' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->
			</div><!-- #primary -->
		</div><!-- /.site-container__inner -->
	</div><!-- /.site-container -->
</article>
