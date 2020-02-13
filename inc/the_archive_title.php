<?php
/**
 * アーカイブタイトルの出力内容を調整
 */
function hamdocs_get_the_archive_title() {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = get_the_author() . 'の投稿';
	} elseif ( is_year() ) {
		// translators: %s Year and month.
		$title = get_the_date( 'Y' ) . 'の投稿';
	} elseif ( is_month() ) {
		$title = get_the_date( 'Y年n月' ) . 'の投稿';
	} elseif ( is_day() ) {
		$title = get_the_date( 'Y年n月j日' ) . 'の投稿';
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$tax   = get_taxonomy( get_queried_object()->taxonomy );
		$title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
	} elseif ( is_search() ) {
		$title = get_search_query() . 'の検索結果';
	} else {
		$title = get_the_archive_title();
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'hamdocs_get_the_archive_title' );
