<?php
/*
@package manayfashion
*/
$facebook = get_option('facebook_url');
$homead = get_option('mnyfashion_homead');
?>
<!-- ads area and faebook like box -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="headerAds">
                    <?php echo $homead; ?>
                </div><!-- headerAds -->
            </div><!-- col-md-9 -->
            <div class="col-md-3 col-sm-12">
                <div class="fbLikeBox">
                    <div class="fb-page" data-href="<?php echo $facebook; ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="<?php echo $facebook; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $facebook; ?>">Manaylab</a></blockquote></div>
                </div><!-- fbLikeBox -->
            </div><!-- col-md-3 -->
        </div><!-- row -->
    </div><!-- container -->
</div>