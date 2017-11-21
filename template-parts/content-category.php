<?php 
$cat[1] = esc_attr(get_option('first_category_name'));
$cat[2] = esc_attr(get_option('second_category_name'));
$cat[3] = esc_attr(get_option('third_category_name'));
?>
<!-- popTabs -->
<section id="popTabs">
    <div class="container">
        <nav class="nav nav-tabs" id="myTab" role="tablist">  
            <?php for($i=1;$i<4;$i++) { if($i ==1) {$a = " active"; } else { $a =""; } ?>
            <a class="nav-item nav-link<?=$a;?>" id="nav-category-<?=$i;?>-tab" data-toggle="tab" href="#nav-category-<?=$i;?>" role="tab" aria-controls="nav-category-<?=$i;?>" aria-expanded="true"><?php echo $cat[$i]; ?></a><!-- category-1 -->
         <?php } ?>
        </nav>
        <!-- tabs content -->
        <div class="tab-content" id="nav-tabContent">         
       <?php for($i=1;$i<4;$i++) {  if($i ==1) {$a = " show active"; } else { $a =""; } ?>
            <div class="tab-pane fade<?=$a;?>" id="nav-category-<?=$i;?>" role="tabpanel" aria-labelledby="nav-category-<?=$i;?>-tab">
                <div class="row">
                    <?php $args = array(
                            'category_name' => $cat[$i],
                            'posts_per_page' => 3);
                    $home_category = new WP_Query($args); ?>
                    <?php if ( $home_category->have_posts() ) : ?>
                    <?php while ( $home_category->have_posts() ) : $home_category->the_post(); ?>
                    <div class="col-md-4 categoryPost">
                        <figure class="categorySection">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
                            <figcaption>
                                <i class="fa fa-link" aria-hidden="true"></i>
                                <h2><?php the_title(); ?></h2>
                            </figcaption>
                            <a href="<?php the_permalink(); ?>"></a>
                        </figure>
                    </div><!-- col-md-4 -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                    <?php echo '<p style="margin:10px">This Category Has No Post</p>' ?>
                    <?php endif; ?>
                </div><!-- row -->
            </div><!-- category-3 -->
            <?php } ?>
        </div><!-- tabs content -->
    </div><!-- container -->
</section><!-- popTabs -->