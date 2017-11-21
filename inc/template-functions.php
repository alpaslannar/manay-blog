<?php
/*
@package manayfashion
*/
function fashionblog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed'; }
	return $classes;
}
add_filter( 'body_class', 'fashionblog_body_classes' );
function fashionblog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'fashionblog_pingback_header' );