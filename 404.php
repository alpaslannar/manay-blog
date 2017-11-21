<?php
/*
@package manayfashion
*/
get_header(); ?>
<section id="mainPosts">
    <div class="container">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fashionblog' ); ?></h1>
            </header><!-- .page-header -->
            <div class="row">
                <main class="page-content col-md-8">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fashionblog' ); ?></p>
                    <?php get_search_form(); ?>                
                    <div class="widget widget_recent_entries">
                        <h2 class="widget-title"><?php esc_html_e( 'Recent Posts', 'fashionblog' ); ?></h2>
                        <br>
                        <div class="row">
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
                        </div><!-- row -->
                    </div><!-- widget -->
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
                </main><!-- page-content -->
                <aside class="sidebar col-md-4">
                <?php get_sidebar(); ?>
                </aside><!-- aside -->
            </div><!-- row -->
        </section><!-- .error-404 -->
	</div><!-- #primary -->
</section>
<?php get_footer();