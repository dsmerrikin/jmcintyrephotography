<?php
/* Template Name: Full-width Template */	
		
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<?php if ( has_post_thumbnail() ) { ?>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			
			
			
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->

<?php get_footer(); ?>