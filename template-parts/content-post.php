<?php
/*
@package manayfashion
*/
?>
<div class="col-md-6">
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
</div><!-- col-md-6 -->