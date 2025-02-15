<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TAKE-THE-WORLD_Timothy_Blake
 */

get_header();
?>


	<section class=" py-5 hero-section d-flex align-items-center justify-content-center">
        <div class="container text-center"> 
		<?php
				the_archive_title( '<h1 class="page-title text-white">', '</h1>' );
				the_archive_description( '<div class="archive-description text-white">', '</div>' );
				?>
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

<?php
get_footer();
