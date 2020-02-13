<?php
/**
 * Template part for displaying card.
 *
 * @package Hamdocs
 */
?>
<article class="wp-card-block">
	<a href="<?php the_permalink(); ?>">
		<div class="wp-card-block__thumb">
			<?php hamdocs_the_post_thumbnail(); ?>
		</div>
		<?php if ( is_front_page() ) : ?>
			<h2 class="wp-card-block__title"><?php the_title(); ?></h2>
		<?php else : ?>
			<h3 class="wp-card-block__title"><?php the_title(); ?></h3>
		<?php endif; ?>
		<div class="wp-card-block__excerpt">
			<?php the_excerpt(); ?>
		</div><!-- /.wp-card-block__excerpt -->
		<p class="wp-card-block__date">Updated: <?php the_modified_date(); ?></p>
	</a>
</article>
