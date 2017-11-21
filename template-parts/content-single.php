<?php
/*
@package manayfashion
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php echo wp_get_attachment_image( get_the_ID(), array('700', '600'), "", array( "class" => "img-responsive" ) );  ?>
    <header class="entry-header">
        <?php if ( is_singular() ) : the_title( '<h1 class="entry-title">', '</h1>' );
		  else : the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		  endif; ?>
        <p class="lead"><?php the_excerpt(); ?></p>
    </header>
		<?php if ( 'post' === get_post_type() ) : ?>
    <div class="postDetails">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-4 col-4">
                <span class="authorCircle">BY</span> <a class="authorLink" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                <i class="fa fa-clock-o" aria-hidden="true"></i> <time><?php the_date('M j, Y'); ?></time>
            </div><!-- col-md-8 -->
            <div class="col-lg-5 col-md-6 col-sm-8 col-8">
                <div class="shareBtn">
                    <a class="postSocial post-fb" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo urlencode(get_permalink()); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><!-- facebook -->
                    <a class="postSocial post-tw" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>+<?php echo get_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><!-- twitter -->
                    <a class="postSocial post-gplus" href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><!-- gplus -->
                    <a class="postSocial post-pin" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a><!-- pinterest -->
                    <a class="postSocial post-mail" href="mailto:?Subject=<?php echo get_the_title(); ?>&amp;Body=Click This Link to See More <?php echo get_permalink(); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><!-- email -->
                </div><!-- shareBtn -->
            </div><!-- col-md-4 -->
        </div>
    </div><!-- postDetails -->
    <?php endif; ?>
    <?php the_content(); ?>
    <footer class="articleFooter">
        <div class="row">
            <div class="articleTags col-md-7 col-7">
                <i class="fa fa-tags" aria-hidden="true"></i> <?php the_tags(); ?>
            </div>
            <div class="articleCategory col-md-5 col-5">
                <i class="fa fa-folder-open" aria-hidden="true"></i> <?php the_category(', ') ?>
            </div>
        </div><!-- row -->
    </footer>
</article>