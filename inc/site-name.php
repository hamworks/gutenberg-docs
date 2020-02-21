<?php
/**
 * カスタムロゴがあればカスタムロゴを出力し、なければサイト名を出力する
 */
function hamdocs_the_site_name() {
	if ( has_custom_logo() ) {
		the_custom_logo();
	}
	echo '<a href="' . esc_attr( home_url( '/' ) ) . '" class="site-name">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
}
