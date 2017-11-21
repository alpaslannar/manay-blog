<?php 
/* Template Name: Contact page */
get_header();
?>
<?php
$contactMessage = esc_attr(get_option('contact_textaream'));
$contactEmail = esc_attr(get_option('contact_email_box'));
$contactFacename = esc_attr(get_option('contact_face_name'));
$contactFaceurl = esc_attr(get_option('contact_face_url'));
$contactTwname = esc_attr(get_option('contact_tw_name'));
$contactTwurl = esc_attr(get_option('contact_tw_url'));
$contactGname = esc_attr(get_option('contact_gplus_name'));
$contactGurl = esc_attr(get_option('contact_gplus_url'));
?>
<?php if ( has_post_thumbnail() ) {
$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
echo '<div class="contact-bg" style="background:url('.$feat_image_url.') top left no-repeat fixed;background-size:cover;">'; ?>
<?php } else { ?>
<div class="contact-bg">
<?php } ?>
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-md-12">
            <section class="main-content form-backg">
                <h1><?php the_title(); ?></h1>
                <?php while ( have_posts() ) : the_post(); ?>
                    <p class="lead"><?php echo $contactMessage; ?></p>
                <?php endwhile; ?>
                <div class="row">
                    <div class="col-lg-3 contact-parts">
                        <div class="circle circle-mail">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <h4>Mail</h4>
                        <h3><?php echo $contactEmail; ?></h3>
                    </div><!-- col-md-3 -->
                    <div class="col-lg-3 contact-parts">
                        <div class="circle circle-facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                        <h4>Facebook</h4>
                        <a href="<?php echo $contactFaceurl; ?>" target="_blank"><h3><?php echo $contactFacename; ?></h3></a>
                    </div><!-- col-md-2 -->
                    <div class="col-lg-3 contact-parts">
                        <div class="circle circle-twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div>
                        <h4>Twitter</h4>
                        <a href="<?php echo $contactTwurl; ?>" target="_blank"><h3><?php echo $contactTwname; ?></h3></a>
                    </div><!-- col-md-2 -->
                    <div class="col-lg-3 contact-parts">
                        <div class="circle circle-gplus">
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                        </div>
                        <h4>Google +</h4>
                        <a href="<?php echo $contactGurl; ?>" target="_blank"><h3><?php echo $contactGname; ?></h3></a>
                    </div><!-- col-md-2 -->
                </div><!-- row -->
                <div class="cont-form clearfix">
                    <?php the_content(); ?>
                </div>
            </section>
        </div><!-- content -->
    </div><!-- row -->
</div><!-- container -->
</div>
<?php get_footer(); ?>