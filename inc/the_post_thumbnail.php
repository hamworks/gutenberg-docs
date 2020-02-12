<?php
/**
 * アイキャッチもしくはno imageを出力する
 *
 * @param string $size
 */
function hamdocs_the_post_thumbnail( $size = 'thumbnail' ) {
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( $size );
	} else {
		echo '<img src="' . esc_attr( get_theme_file_uri( '/assets/images/' . $size . '-noimage.png' ) ) . '" alt="' . esc_attr( get_the_title() ) . '">';
	}
}
