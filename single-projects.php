<?php
/**
 * The template for displaying all single "project" posts.
 *
 * @package kayleighjohnston
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			if( has_post_thumbnail() ) {
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
			} ?>

			<article class="project">
				<header class="fullscreen lazy" data-original="<?php echo $thumb[0];?>">
					<div class="title container">	
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h1><?php the_title();?></h1>
								<h2><?php the_date('F Y');?></h2>
							</div>
						</div>
					</div>	
				</header>
				
				<div class="project-content container">

					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
							<h3>The Client</h3>
							<br/>
							<p><?php echo the_field('intro');?></p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
							<img class="lazy project-img" data-original="<?php echo the_field('screenshot');?>" alt="<?php the_title();?>"/>
						</div>	
					</div>	
					
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
							<h3>Other Stuff</h3>
							<br/>
							<?php the_content();?>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
							<?php 

							$images = get_field('gallery');

							if( $images ): ?>
						        <?php foreach( $images as $image ): ?>
						            <img class="lazy project-img img-shadow" data-original="<?php echo $image['url']; ?>" alt="<?php echo the_title();?>" />
						        <?php endforeach; ?>
							<?php endif;?>    
						</div>
					</div>

				</div>

				<footer class="mobile-showcase">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-12 col-xs-12">
								<?php if(get_field('credits')) : ?>
									<div class="credit">
										<h3>Designed and Developed With:</h3><?php echo the_field('credits');?>
										<a href="<?php echo the_field('site_url');?>" class="btn btn-main btn-arrow">View the Site <i class="fa fa-caret-right"></i></a>
									</div>	
								<?php else: ?>
									<a href="<?php echo the_field('site_url');?>" class="btn btn-main btn-arrow">View the Site <i class="fa fa-caret-right"></i></a>	
								<?php endif;?>	
							</div>
							<div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-12 col-xs-12">
								<img class="lazy project-img mobile" data-original="<?php echo the_field('mobile');?>" alt="<?php the_title();?>"/>
							</div>
						</div>
					</div>	
				</footer>
			</article>	

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
