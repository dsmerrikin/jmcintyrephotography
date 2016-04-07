<?php
/*
	Template Name: Contact Page	
*/

$bg_image = get_field('contact_page_background_image');
get_header(); ?>
<style>
    body.page-template-page-contact {
        background-image:url(<?php echo $bg_image ?>) !important;
        background-position: 0 0 !important;
    }
</style>
    <section id="contactpage">
        <article>
            <div class="container clearfix">
                <div class="row">

                    <div class="col-sm-12 box-container">
                        <div class="row bg--color-white">
                            <div class="col-sm-6">
                                <p class="feature-image-container"><?php echo get_the_post_thumbnail( $post_id, 'full' ); ; ?></p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="text-uppercase">Contact Us</h1>
                                <?php echo do_shortcode('[contact-form-7 id="36" title="Default Contact Form"]'); ?>
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