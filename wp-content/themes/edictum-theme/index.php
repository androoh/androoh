<?php get_header();?>
<div class="slideshow">
	<div id="carousel-example-generic" class="carousel slide presentation" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?=get_template_directory_uri();?>/img/header-1500x600.jpg"/>
				<div class="carousel-caption">
					<h1>Welcome</h1>
				</div>
			</div>
			<div class="item">
				<img src="<?=get_template_directory_uri();?>/img/header-1500x600.jpg"/>
				<div class="carousel-caption">
					<h1>Welcome</h1>
				</div>
			</div>
			<div class="item">
				<img src="<?=get_template_directory_uri();?>/img/header-1500x600.jpg"/>
				<div class="carousel-caption">
					<h1>Welcome</h1>
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
</div>

<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-8 content">
		<div class="row">
			<?php
			if ( have_posts() ) :
		// Start the Loop.
				$iCount = 0;
			while ( have_posts() ) : the_post();
			if($iCount == 3) $iCount=0;
			?>
			<?php if($iCount == 0):?>

			<?php endif;?>
			<div class="col-xs-6 col-md-4 post">
				<a href="<?=the_permalink()?>" class="thumbnail">
					<?=the_post_thumbnail()?> 
					<div class="post-title">
						<h3><?=the_title()?></h3>
					</div>
					<div class="post-time">
						<div class="pull-left">
							<i class="icon-calendar"></i> <?php the_date();?> 
						</div>
						<div class="pull-right">
							<i class="icon-user"></i> <?php the_author();?>
						</div>
					</div>
				</a>

			</div>
			<?php if($iCount == 2):?>

			<?php endif;?>

			<?php
			$iCount++;
			endwhile;
		// Previous/next post navigation.

			else :
		// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
			?>
		</div>
	</div>
	<?php get_sidebar();?>
</div>
<?php get_footer();?>