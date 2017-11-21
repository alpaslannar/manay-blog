<?php
/*
@package manayfashion
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'mnyPage' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="lead"><?php the_excerpt(); ?></p>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fashionblog' ),
				'after'  => '</div>', ) );
		?>
	</div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php edit_post_link( sprintf( wp_kses( __( 'Edit <span class="screen-reader-text">%s</span>', 'fashionblog' ), array( 'span' => array(
									'class' => array(), ), ) ), get_the_title() ), '<span class="edit-link">', '</span>' ); ?>
		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->