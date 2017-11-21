<?php
/*
@ manayfashion package
*/
?>
<section class="mnySlide">
    <div class="row">
        <?php $latest_post = get_posts( 'numberposts=3' ); // Defaults args fetch posts starting with the most recent ?>
        <?php foreach( $latest_post as $post ) : setup_postdata( $post );++$index; ?>
        <?php if($index==1) { ?>
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img']); ?>
                <div class="card-img-overlay">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="card-text"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date('M j, Y'); ?></p>
                </div>
            </div>
            <a href="<?php the_permalink(); ?>"></a>
        </div>
        <?php } else { ?>
        <div class="col-md-3 col-6">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
            <h2 class="mnySlideTitle"><?php the_title(); ?></h2>
            <p class="mnySlideAuthor"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author(); ?></p>
            <a href="<?php the_permalink(); ?>"></a>
        </div><!-- col-md-3 -->
        <?php } ?>
        <?php endforeach; wp_reset_query(); ?>
    </div><!-- row -->
</section>