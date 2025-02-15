<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TAKE-THE-WORLD_Timothy_Blake
 */

get_header();
?>

<section class=" py-5 hero-section d-flex align-items-center justify-content-center">
        <div class="container text-center"> 
            <h2 class="text-white text-center mb-4">Photography Albums </h2>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-xl-8">
                <p>This website showcases my photography featuring the Flickr API to surface some of my favourite albums from my Flickr feed to showcase my photography. I'm constantly investing in building my photography knowledge and enhancing my photography skills a great little website to record the evolution of my photography journey.
                </p>
                </div>
            </div>
          
        </div>
    </section>


	<div class="content-wrap mx-3 px-3 mx-lg-5 px-lg-5 mt-n5">

        <section class="row gy-4 gutter-3 isotope-items-wrap ali-style-1 caption-gradient">
            
		
		<?php if ( have_posts() ) : ?>


		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php

				/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
				get_template_part( 'loop', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php endif; ?>



        </section>

        
    </div>

    <?php wpbeginner_numeric_posts_nav(); ?>




<?php
get_footer();
