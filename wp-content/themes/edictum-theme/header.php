<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(' | '); ?></title>

        <!-- Bootstrap -->
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if IE 7]>
                <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <![endif]-->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        <?php wp_head(); ?>
    </head> 
    <body>
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".colapsable-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="<?= get_template_directory_uri(); ?>/img/logo.png" height="50px"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse colapsable-btn">
                    <ul class="col-xs-4 col-sm-2 col-md-2 nav navbar-right social">
                        <li class="tool">
                            <a href="#" target="_blank" rel="tooltip" data-original-title="Google+">
                                <i class="icon-google-plus-sign"></i>
                            </a>
                        </li>
                        <li class="tool">
                            <a href="#" target="_blank" rel="tooltip" data-original-title="Facebook">
                                <i class="icon-facebook-sign"></i>
                            </a>
                        </li>
                    </ul>
                    <?php get_search_form(); ?>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <?php
                wp_nav_menu(array(
                    'menu' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse colapsable-btn custom-nav',
                    'container_id' => 'bs-navbar',
                    'menu_class' => 'nav navbar-nav navbar-left',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
