<?php
/**
 *
 * Template Name: Projects Archive
 *
 */
get_header(); ?>

	<?php 
		$args = array(
			'posts_per_page'   => -1,
			'post_type'        => 'projects',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);
		$posts = get_posts( $args ); 
	?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endforeach; ?>

			<?php the_posts_navigation(); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
