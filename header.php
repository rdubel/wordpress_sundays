<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.css">
    <script src="./static/external/jquery/dist/jquery.js" charset="utf-8"></script>
    <link rel="stylesheet" href="./static/external/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <?php // Display Header Widgets.
					if ( is_active_sidebar( 'header' ) ) :

						dynamic_sidebar( 'header' );

					endif; ?>
                    </nav><!-- #site-navigation -->
                    <div class="infos">
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                        <?php
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                        <h2 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
                        <?php
                    endif; ?>
                </div>
                <div id="content" class="site-content">
                </nav>
                <a href="#" class="btn">browse our products</a>
            </header><!-- #masthead -->

        </header>
