<?php
/*
@package manayfashion
*/
?>
<!-- Footer -->
<footer class="mnyFooter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('title'); ?></a></h1>
                <?php wp_nav_menu(array(
                                'theme_location'  => 'footer-menu',
                                'container'       => 'nav',
                                'menu_class'      => 'nav navbar-nav'
                )); ?>
                <?php $copyText = esc_attr(get_option('mnyfashion_cText')); ?>
                <p>&copy; <?php echo date('Y'); ?> <?php echo $copyText; ?></p>
            </div><!-- col-md-12 -->
        </div><!-- row -->
    </div><!-- container -->
</footer>
<!-- facebook like box -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.10&appId=818342484877539";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Optional JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>