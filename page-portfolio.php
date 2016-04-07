<?php
/*
	Template Name: Portfolio Page	
*/
$bg_image = get_field('homepage_background_image');
get_header(); ?>
    <section id="portfoliopage">
        <div class="row box-container">
            <div class="col-sm-12 box-container--inner">
                <ul class="list-inline">
                    <li><a href="javascript:;" class="showAll">Show All</a></li>
                    <li><a href="javascript:;" data-target="sceneryPhotos">Scenery</a></li>
                    <li><a href="javascript:;" data-target="petsPhotos">Pets</a></li>
                </ul>
            </div>
            <div class="col-sm-12 box-container--inner">
               <div class="sceneryPhotos photoGroup">
                    <h2>Scenery</h2>
                    <?php echo do_shortcode('[downloads category="scenery"]'); ?>
               </div>
               <div class="petsPhotos photoGroup">
                    <h2>Pets</h2>
                    <?php echo do_shortcode('[downloads category="pets"]'); ?>   
               </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>