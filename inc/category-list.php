<?php
/**
 * カテゴリー名のリストを出力する
 */
function hamdocs_the_categories_list() {
	$categories = get_the_category();
	$echo       = '';
	if ( ! empty( $categories ) ) {
		$echo = '<ul class="categories-name-list">';
		foreach ( $categories as $category ) {
			$echo .= '<li>' . esc_attr( $category->name ) . '</li>';
		}
		$echo .= '</ul>';
	}
	echo $echo;
}
