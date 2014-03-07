<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' | ');?></title>

	<!-- Bootstrap -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if IE 7]>
  		<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
	<![endif]-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head();?>
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
  					<img src="<?=get_template_directory_uri();?>/img/logo.png" height="50px"/>
  				</a>
  			</div>
  			<div class="collapse navbar-collapse colapsable-btn">
  				<ul class="col-xs-4 col-sm-2 col-md-1 nav navbar-right social">
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
  			<div class="collapse navbar-collapse colapsable-btn custom-nav">
  				<ul class="nav navbar-nav navbar-left">
  					<li><a href="#">Home</a></li>
  					<li class = "dropdown">
  						<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
  						<ul class = "dropdown-menu">
  							<li><a href = "#">Item One</a></li>
  							<li><a href = "#">Item Two</a></li>
  							<li><a href = "#">Item Three</a></li>
  							<li><a href = "#">Item Four</a></li>
  						</ul>

  					</li>
  					<li class = "dropdown">
  						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
  						<ul class = "dropdown-menu">
  							<li><a href = "#">Twitter</a></li>
  							<li><a href = "#">Facebook</a></li>
  							<li><a href = "#">Google+</a></li>
  							<li><a href = "#">Instagram</a></li>
  						</ul>

  					</li>
  					<li class="active"><a href = "#">About</a></li>
  					<li><a href = "#contact" data-toggle="modal">Contact</a></li>
  				</ul>
  				<?php 
  				// $args = array(
  				// 	'menu'  => 'main-nav' ,
  				// 	'container' => false, 
  				// 	'menu_class' => 'nav navbar-nav navbar-left',
  				// 	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul><ul class="nav navbar-nav navbar-right"></ul>',
  				// 	'walker' => '',
  				// );

  				// wp_nav_menu($args);
  				 ?>
  				 <?php 
  			// 	 wp_nav_menu( array(
					// 'theme_location' 	=> 'primary',
					// 'container' 		=> 'ul',
					// 'menu_class'      	=> 'nav navbar-nav navbar-left',
					// 'menu_id'         	=> '',
					// 'fallback_cb'     	=> 'wp_page_menu',
					// 'before'          	=> '',
					// 'after'           	=> '',
					// 'link_before'     	=> '',
					// 'link_after'      	=> '',
					// 'items_wrap'      	=> '<ul id="%1$s" class="%2$s">%3$s</ul><ul class="nav navbar-nav navbar-right"></ul>',
					// 'depth'           	=> 0,
					// 'walker'          	=> ''
				 // ) );
  				 ?>
  			</div>
  		</div>
  	</nav>
