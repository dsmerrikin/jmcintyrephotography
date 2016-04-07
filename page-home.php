<?php
/*
	Template Name: Home Page	
*/
$bg_image = get_field('homepage_background_image');
get_header(); ?>
<style>
    body.home {
        background-image:url(<?php echo $bg_image ?>) !important;
        background-position:0 0 !important;
    }
</style>
    <section id="homepage">
        <article>
            <div class="container clearfix">
                <div class="row">

                    <div class="col-sm-12 box-container">
                        <div class="row bg--color-white box-container--inner">
                            <div class="col-sm-6 padding-left-none">
                                <p class="feature-image-container margin-bottom-none"><?php echo get_the_post_thumbnail( $post_id, 'full' ); ; ?></p>
                            </div>
                            <div class="col-sm-6 padding-right-none">
                                <h1 class="text-uppercase">Welcome To <?php echo get_bloginfo(name); ?></h1>
                                <p>Photos by Jim McIntyre</p>
				                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                                    <?php the_content(); ?>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </article>
    </section>

<?php get_footer(); ?>