<?php
/*
 @package manayfashion
 */
get_header(); ?>
<?php if ( have_posts() ) : if ( is_home() && ! is_front_page() ) : ?>
<header>
    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>
    <?php get_template_part('template-parts/content', 'slide'); ?>
    <?php get_template_part('template-parts/content', 'ads'); ?>
    <?php get_template_part('template-parts/content', 'category'); ?>
    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
    <?php get_template_part('template-parts/content', 'pagination'); ?>
<?php else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
<?php get_footer();