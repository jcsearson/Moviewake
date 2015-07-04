<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width">

    <title>Unseen Films and Hidden Gems</title>
     <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/favicons/apple-touch-icon-144x144.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon-32x32.ico" sizes="32x32">

    <?php wp_head(); ?>  <!-- e.g. jQuery -->

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?<?php echo filemtime(TEMPLATEPATH . '/style.css'); ?>" type="text/css" />  <!-- timestamp added to avoid server cache -->

    <!--[if lt IE 7]> <html class="no-js ie ie6" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js ie ie7" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
    <!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
    <!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
</head>
<?php flush(); ?>
<body <?php body_class(); ?>>

    <header>
        <div class="main-title">
            <section class="title-site">
                <div class="site-name">
                    <a href="/home"><h2><span>MovieWake</span>.com</h2></a>
                </div>
                <form id="search-wrapper" method="get" role="search" action="<?php echo get_template_directory_uri();?>/images/svg/search.svg">
                    <input type="search" value=" " name="s">
                </form>
            </section>
        </div>

        <div class="navigation">
            <section class="layout">
                <ul class="nav">
                    <li class="nav-main">
                        <a href="/home" class="home">Home</a>
                    </li>
                    <li class="nav-main">
                        <a href="#">Films</a>
                        <ul class="dropdown">
                            <li class="dropdown-item"><a href="/archive/action">Action</a></li>
                            <li class="dropdown-item"><a href="/archive/adventure">Adventure</a></li>
                            <li class="dropdown-item"><a href="/archive/animation">Animation</a></li>
                            <li class="dropdown-item"><a href="/archive/comedy">Comedy</a></li>
                            <li class="dropdown-item"><a href="/archive/documentary">Documentary</a></li>
                            <li class="dropdown-item"><a href="/archive/drama">Drama</a></li>
                            <li class="dropdown-item"><a href="/archive/horror">Horror</a></li>
                            <li class="dropdown-item"><a href="/archive/indi">Indi</a></li>
                            <li class="dropdown-item"><a href="/archive/scifi">Sci-fi</a></li>
                            <li class="dropdown-item"><a href="/archive/suspense">Suspense</a></li>
                            <li class="dropdown-item"><a href="/archive/thriller">Thriller</a></li>
                        </ul>
                    </li>
                    <li class="nav-main">
                        <a href="/archive/shows ">TV</a>
                    </li>
                    <li class="nav-main">
                        <a href="/news">News</a>
                    </li>
                    <li class="nav-main">
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </section> <!-- layout -->
        </div> <!-- navigation -->
    </header>