<?php
/**
 * Template part for breadcrumbs
 */
?>
<?php if ( function_exists( 'bcn_display_list' ) ) : ?>
	<ul class="site-breadcrumbs">
		<?php bcn_display_list(); ?>
	</ul>
<?php endif; ?>
