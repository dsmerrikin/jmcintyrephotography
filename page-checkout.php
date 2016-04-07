<?php
/*
	Template Name: Checkout Page	
*/
$bg_image = get_field('homepage_background_image');
get_header(); ?>
    <section id="checkoutpage">
       <div class="row box-container">
           <div class="col-sm-12 box-container--inner">
                <?php echo do_shortcode('[download_checkout]'); ?>       
           </div>
       </div>
        
    </section>

<?php get_footer(); ?>