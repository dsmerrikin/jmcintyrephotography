<?php
/*
	Template Name: About Page	
*/

$bg_image = get_field('about_page_background_image');
get_header(); ?>
<style>
    body.page-template-page-about {
        background-image:url(<?php echo $bg_image ?>) !important;
        background-position:0 0 !important;
    }
</style>
    <section id="aboutpage">
        <article>
            <div class="container clearfix">
                <div class="row">

                    <div class="col-sm-12 box-container">
                        <div class="row bg--color-white">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="text-uppercase">About Us</h1>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="feature-image-container"><?php echo get_the_post_thumbnail( $post_id, 'full' ); ; ?></p>
                                    </div>
                                    <div class="col-sm-8">
                                        
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus neque dolor, commodo vitae suscipit sit amet, tincidunt sed quam. Nunc pulvinar augue a velit consequat luctus id in dolor. Vestibulum eget eleifend diam, euismod varius lectus. Aliquam vulputate velit quis lacus euismod, sed ultrices nibh mattis. Donec nec augue ultricies, semper purus eu, ullamcorper enim. Nullam accumsan, diam sollicitudin auctor imperdiet, lectus sapien tristique mi, id maximus sapien sapien ac mi. Integer lacinia tellus a placerat convallis. Etiam massa augue, mollis sed massa eu, ornare tempus leo. Suspendisse egestas auctor leo, eu auctor eros luctus id. Nam tincidunt turpis enim, non elementum odio congue a. Cras rutrum feugiat purus et volutpat. Maecenas mattis ut tellus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tristique dolor tincidunt posuere varius. Praesent ac iaculis neque.

Suspendisse et augue ipsum. Duis et faucibus purus. Nunc ut felis ligula. Nulla varius bibendum egestas. Aliquam erat volutpat. Nullam scelerisque lorem quam, eget laoreet est lacinia tristique. Pellentesque laoreet vitae sapien malesuada fringilla. Proin vitae vehicula lectus, sit amet fringilla justo. Aliquam massa libero, gravida a purus vitae, auctor imperdiet augue. Phasellus fringilla, velit nec rhoncus molestie, nulla lorem efficitur sapien, eu rhoncus elit nulla ac erat. Nulla vitae euismod purus. Mauris posuere imperdiet enim, ut accumsan diam pharetra in. Nam lobortis ligula at dui consectetur blandit.

Vestibulum vitae augue nec velit malesuada imperdiet sit amet vel urna. Maecenas nulla diam, auctor pellentesque magna ut, vulputate imperdiet magna. Duis eu sagittis leo. Pellentesque dictum posuere dolor ac ornare. Aenean elit nunc, consectetur ut ligula vel, ullamcorper consectetur justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce consectetur consectetur ex, ac lobortis orci lacinia id. Nullam et odio nibh. Fusce turpis magna, eleifend ut imperdiet eu, aliquet a tortor. Phasellus maximus ligula eu sem imperdiet, at interdum sapien rutrum. Curabitur tristique est eu odio consequat ullamcorper. Integer sit amet dolor ex. Vivamus at tempor ligula. Quisque sed arcu accumsan, feugiat nisi vitae, faucibus turpis. Maecenas elementum tristique porttitor. Ut et sagittis elit.</p>
                                    </div>
                                </div>
                                
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