<?php
/*
@package manayfashion
*/
get_header(); ?>
<?php get_template_part('template-parts/content', 'ads'); ?>
<section id="mainPosts">
    <div class="container">
        <?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' ); ?>
			</header>
                <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'post'); ?>
                <?php endwhile;?>
                </div><!-- row -->
            <?php else :
            get_template_part( 'template-parts/content', 'none' );
        endif; ?>
	</div><!-- container -->
</section>
<?php get_template_part('template-parts/content', 'pagination'); ?>
<?php get_footer();