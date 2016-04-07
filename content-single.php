<?php
/**
 * @package Bootstrap to WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row box-container--inner">
        <div class="col-sm-6">
            <?php if ( has_post_thumbnail() ) { // check for feature image ?> 
            <div class="post-image ">
                <?php the_post_thumbnail(); ?>
            </div><!-- post-image -->
            <?php } ?>
        </div>
        <div class="col-sm-6">
            <h1><?php echo the_title(); ?></h1>
            <div class="post-body">
                <?php the_content(); ?>
            </div><!-- post-body -->
            <!-- Put WOOCommerce or other Ecommerce here -->
        </div>
    </div>
</article><!-- #post-## -->
