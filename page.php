<?php
/*
@package manayfashion
*/
get_header(); ?>
<!-- featured image -->
<?php if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
echo '<div class="featuredImage" style="background:url('.$feat_image_url.') 50% 50% no-repeat;background-size:cover;">';
?>
<div class="imgFilter"></div>
<?php echo '</div>'; } else { ?>
<div class="featuredImage">
<div class="imgFilter"></div>
</div>
<?php } ?>
<section class="postWrap">
    <div class="container">
        <div id="primary" class="row">
            <main id="content" class="col-md-8 postMain">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                    <?php if ( comments_open() || get_comments_number() ) : comments_template();
                    endif;
                endwhile; ?>
            </main><!-- main -->
            <aside class="sidebar col-md-4">
                <?php get_sidebar(); ?>
            </aside><!-- aside -->
        </div><!-- #primary -->
    </div><!-- container -->
</section><!-- postWrap -->
<?php get_footer();