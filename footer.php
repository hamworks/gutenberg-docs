<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hamworks
 */
?>


<footer class="site-footer">
	<div class="site-footer__inner">
		<?php dynamic_sidebar( 'widget-footer' ); ?>

		<?php
		wp_nav_menu(
			array(
				'menu'       => 'footer',
				'container'  => false,
				'menu_class' => 'menu site-footer__nav',
			)
		);
		?>
	</div><!-- /.site-footer__inner -->
</footer>
<aside class="site-copyright">
	<div class="site-copyright__company"><a href="https://ham.works/" target="_blank"><img src="<?php echo esc_attr( get_theme_file_uri( '/assets/images/hamworks-logo.svg' ) ); ?>" alt="株式会社HAMWORKSへのリンク"></a></div>
	<p><?php \HamDocs\render_copyright(); ?></p>
</aside>
<?php wp_footer(); ?>
</body>
</html>
