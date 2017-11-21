<?php
/*
Jetpack Compatibility File
@link https://jetpack.com/
@package manayfashion
*/
function fashionblog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'fashionblog_infinite_scroll_render',
		'footer'    => 'page',
	) );
	add_theme_support( 'jetpack-responsive-videos' );
	add_theme_support( 'jetpack-content-options', array(
		'post-details' => array(
			'stylesheet' => 'fashionblog-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link', ), ) );
}
add_action( 'after_setup_theme', 'fashionblog_jetpack_setup' );
function fashionblog_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif; }
}