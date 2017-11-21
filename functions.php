<?php
/*
manayfashion functions and definitions
@package manayfashion
*/
if ( ! function_exists( 'fashionblog_setup' ) ) :
	function fashionblog_setup() {
		load_theme_textdomain( 'fashionblog', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header Menu', 'fashionblog' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'fashionblog' )
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'fashionblog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fashionblog_setup' );
function fashionblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fashionblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'fashionblog_content_width', 0 );
function fashionblog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fashionblog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fashionblog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fashionblog_widgets_init' );
function fashionblog_scripts() {
	wp_enqueue_style( 'fashionblog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'fashionblog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fashionblog-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fashionblog_scripts' );
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
/* Include Admin Options */
require get_template_directory() . '/inc/function-admin.php';
/* Include Admin Options */
require get_template_directory() . '/inc/enqueue.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/* Excerpt */
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
/* Excerpt Length */
function new_excerpt_length($length) {
    return 26;
}
add_filter('excerpt_length', 'new_excerpt_length', 999);
function manayfashion_new_comment_form( $fields ) {
    $fields =  array(
      'author' =>
        '<p class="comment-form-author">' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30"' . $aria_req . ' placeholder="Full Name"/></p>',

      'email' =>
        '<p class="comment-form-email"> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30"' . $aria_req . ' placeholder="Email Address"/></p>',
        );
    return $fields;
}
add_filter( 'comment_form_default_fields', 'manayfashion_new_comment_form' );
/* Recent Posts */
add_filter( 'widget_posts_args', function( array $args )
{
    add_filter( 'the_title', 'wpse_prepend_thumbnail', 10, 2 );
    add_action( 'loop_end',  'wpse_clean_up' );
    return $args;
} );
function wpse_prepend_thumbnail( $title, $post_id )
{
    static $instance = 0;
    if( 1 === $instance++ % 2 && has_post_thumbnail( $post_id ) )
        $title = get_the_post_thumbnail( $post_id ) . $title;

    return $title;
} function wpse_clean_up( \WP_Query $q )
{
    remove_filter( current_filter(), __FUNCTION__ );
    remove_filter( 'the_title', 'wpse_add_thumnail', 10 );
}
/* Category */
function my_list_categories( $output, $args ) {
	$pattern = '/(<a.*?>)/';
        $replacement = '$1<i class="fa fa-folder-o" aria-hidden="true"></i> ';
        return preg_replace( $pattern, $replacement, $output );
}
add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );