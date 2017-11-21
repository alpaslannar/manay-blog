<?php
/*
@package manayfashion
*/
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'fashionblog' ); ?></h1>
	</header>
    <div class="row">
	<main class="page-content col-md-8">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'fashionblog' ), array(
							     'a' => array(
								    'href' => array(), ), ) ), esc_url( admin_url( 'post-new.php' ) ) ); 
                ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'fashionblog' ); ?></p>
			<?php get_search_form(); else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'fashionblog' ); ?></p>
			<?php get_search_form(); endif; ?>
            
            <div class="widget widget_recent_entries">
                <h2 class="widget-title"><?php esc_html_e( 'Recent Posts', 'fashionblog' ); ?></h2><br>
                <?php $latest_post = get_posts( 'numberposts=2' ); // Defaults args fetch posts starting with the most recent ?>
                <?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>
                <div class="col-md-12">
                    <figure class="postFigure">
                        <div class="pF">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
                            <div class="postFigTitle">
                                <h2><?php the_title(); ?></h2>
                                <h4><?php the_category(); ?></h4>
                            </div><!-- postFigTitle -->
                            <figcaption>
                                <p class="postExcerpt"><?php the_excerpt(); ?></p>
                            </figcaption>
                            <a href="<?php the_permalink(); ?>" class="postLink"></a>
                        </div>
                    </figure>
                </div><!-- col-md-12 -->
                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="widget widget_categories">
                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'fashionblog' ); ?></h2>
                <ul>
                <?php wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                    ) ); ?>
                </ul>
            </div><!-- widget -->
	</main><!-- .page-content -->
    <aside class="sidebar col-md-4">
        <?php get_sidebar(); ?>
    </aside><!-- aside -->
    </div><!-- row -->
</section><!-- .no-results -->