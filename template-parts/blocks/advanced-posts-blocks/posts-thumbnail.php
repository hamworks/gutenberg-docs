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
<div class="wp-block-advanced-posts-block-posts <?php echo esc_attr( $class_name ); ?>">
	<?php
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			?>
			<article class="vertical-post">
				<a href="<?php the_permalink(); ?>">
					<div class="vertical-post__thumb">
						<?php hamdocs_the_post_thumbnail(); ?>
					</div>
					<div class="vertical-post__content">
						<?php hamdocs_the_categories_list(); ?>
						<h3 class="vertical-post__title"><?php the_title(); ?></h3>
						<div class="vertical-post__excerpt">
							<?php the_excerpt(); ?>
						</div><!-- /.wp-card-block__excerpt -->
						<p class="vertical-post__date">Updated: <?php the_modified_date(); ?></p>
					</div><!-- /.vertical-post__content -->
				</a>
			</article>
			<?php
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</div><!-- /.wp-block-advanced-posts-block-posts -->
