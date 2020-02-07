<?php
/**
 * カスタムロゴを設定しているかどうかの判定
 *
 * @package Hamworks
 */

namespace HamDocs;

/**
 * カスタムロゴがあればカスタムロゴを出力し、なければサイト名を出力する
 */
function the_site_name() {
	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {
		echo wp_kses_post( '<a href="' . home_url( '/' ) . '"><span>' . get_bloginfo( 'name' ) . '</span></a>' );
	}
}
