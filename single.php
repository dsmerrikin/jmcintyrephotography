<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>

	<!-- BLOG CONTENT
	================================================== -->
	<div class="container" id="singlepost">
		<div class="row" id="primary">
				
			<main id="content" class="col-sm-12 box-container">

			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #content -->
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
