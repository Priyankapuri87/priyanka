<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/font/css/font-awesome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
        <?php wp_enqueue_script("jquery"); ?>
    <meta charset="utf-8">

        <?php wp_head(); ?>

	<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#main-menu-wrapper"><?php _e( 'Skip to navigation', 'maksimer_lang' ); ?></a>
		<a class="skip-link screen-reader-text" href="#main-content"><?php _e( 'Skip to content', 'maksimer_lang' ); ?></a>
    <header class="header" role="banner">

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="wrapper">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand navbar-brand-centered">
                        <a href="http://priyankapuri.no/kaffa/">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri()?>/assets/images/kaffa.jpg" alt="logo">
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-brand-centered">
                    <ul class="nav navbar-nav  navbar-left">
                        <li class="linkstyling">
                            <a href="http://priyankapuri.no/kaffa/nytt/">nytt</a>
                        </li>
                        <li class="linkstyling">
                            <a href="http://priyankapuri.no/kaffa/kaffe/">kaffe</a></li>
                        <li class="linkstyling"><a href="http://priyankapuri.no/kaffa/kunnskap/">kunnskap</a></li>
                        <li class="linkstyling"><a href="http://priyankapuri.no/kaffa/om-oss/">om oss</a></li>
                        <li class="linkstyling1"><a href="http://priyankapuri.no/kaffa/kaffa-butikk/">kaffa butikk</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <form role="search" method="get" class="search-form" action="http://priyankapuri.no/kaffa/">
                            <label>
                                <span class="hidden">Søk etter…</span>
                                <input type="search" class="search-field" placeholder="Søk etter…" value="" name="s" title="Søk etter…">
                            </label>
                            <input type="hidden" name="post_type" value="product">
                            <button type="submit" class="search-button">
                                <span class="fa fa-search fa-2x"></span>
                            </button>
                        </form>
                        <li class="dropdown">
                            <a href="http://priyankapuri.no/kaffa/cart/" class="dropdown-toggle">
                                <i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                                </a>
                            <div>
                                <p class="varer">2 varer</p>
                                <p class="price">kr. 20 025,00</p></div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
            </div>
        </nav>
</header>
