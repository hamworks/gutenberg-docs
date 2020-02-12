<?php
/**
 * View template.
 *
 * @package Advanced_Posts_Blocks
 *
 * @var string $class_name
 * @var WP_Query $query
 */

?>
<div class="wp-block-advanced-posts-block-children <?php echo esc_attr( $class_name ); ?>">
	<?php
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
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
			<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</div><!-- /.wp-block-advanced-posts-block-children -->
