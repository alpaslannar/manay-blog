<?php
/*
@package manayfashion
*/
get_header(); ?>
<section id="mainPosts">
    <div class="container">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'fashionblog' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
			<div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'search'); ?>
                <?php endwhile;?>
            </div><!-- row -->
			<?php else :
			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
    </div><!-- container -->
</section><!-- mainPosts -->
<?php get_template_part('template-parts/content', 'pagination'); ?>
<?php get_footer();