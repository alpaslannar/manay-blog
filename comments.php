<?php
/*
@package manayfashion
 */
if ( post_password_required() ) {
	return;
} ?>
<div id="comments" class="comments-area">
    <div class="comments-wrap clearfix">
        <?php 
        $comments_args = array(
        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true" placeholder="Your Message..."></textarea></p>');
        comment_form($comments_args);
        ?>
        <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php $comment_count = get_comments_number();
                if ( 1 === $comment_count ) {
                    printf(esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'fashionblog' ),
                        '<span>' . get_the_title() . '</span>'
                    );
                } else {
                    printf(esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'fashionblog' ) ),
                        number_format_i18n( $comment_count ),
                        '<span>' . get_the_title() . '</span>'
                    ); } ?>
        </h2>
        <?php the_comments_navigation(); ?>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                ) );
            ?>
        </ol>
        <?php the_comments_navigation();
        if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fashionblog' ); ?></p>
        <?php
        endif;
        endif; ?>
    </div>
</div>