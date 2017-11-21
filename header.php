<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_single() || is_page() ) { ?>
    <meta property="og:type" content="article" />
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php the_permalink() ?>">
    <meta name="twitter:title" content="<?php the_title(); ?>">
    <meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt()); ?>">
    <?php endwhile; endif; ?>
    <?php } else { ?>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
    <?php } ?>
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300i,400,700" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fashionblog' ); ?></a>
    <?php
    $breakingNews = esc_attr(get_option('breaking_news'));
    $facebook = esc_attr(get_option('facebook_url'));
    $twitter = esc_attr(get_option('twitter_url'));
    $gplus = esc_attr(get_option('gplus_url'));
    $tumblr = esc_attr(get_option('tumbler_url'));
    $youtube = esc_attr(get_option('youtube_url'));
    $pinterest = esc_attr(get_option('pinterest_url'));
    ?>
<header id="header" class="mnyHeader">
    <!-- Header Logo -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 mnyLogo">
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            </div><!-- mnyLogo -->
        </div><!-- row -->
    </div><!-- container -->
    <!-- Header Menu -->
    <nav class="navbar navbar-expand-lg navbar-light mnyNavbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu(array(
                        'theme_location'  => 'header-menu',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-center',
                        'container_id'    => 'navbarText',
                        'menu_class'      => 'nav navbar-nav'
                    )); ?>
            <span class="searchIcon" onclick="openSearch()"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div><!-- container -->
    </nav><!-- mnyMenu -->
    <!-- search box -->
    <div id="searchNav" class="searchBox">
        <span class="clsBtn" onclick="closeSearch()">&times;</span>
        <div class="searchContent">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <div>
                <input class="searchIn" type="text" value="" name="s" id="s" placeholder="Search" autofocus/>
            </div>
            </form>
        </div><!-- searchContent -->
    </div><!-- searchNav -->
</header>
    <?php if(is_single() || is_page()) { ?>
<!-- Social Bar -->
<div class="socialBar">
    <a class="facebookBar" href="<?php echo $facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a class="twitterBar" href="<?php echo $twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class="gplusBar" href="<?php echo $gplus; ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    <a class="tumblerBar" href="<?php echo $tumblr; ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
    <a class="pinBar" href="<?php echo $pinterest; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
    <a class="youtubeBar" href="<?php echo $youtube; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
</div>
    <?php } ?>