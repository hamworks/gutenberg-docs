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
<div class="wp-block-advanced-posts-block-children wp-card-blocks <?php echo esc_attr( $class_name ); ?>">
	<?php
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();

			get_template_part( 'template-parts/content', 'archive' );
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</div><!-- /.wp-block-advanced-posts-block-children -->
