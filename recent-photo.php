<?php
/*
Template Name: Recent Photos
*/

get_header(); ?>

   


<?php
		while ( have_posts() ) :
			the_post();

		endwhile; // End of the loop.
		?>


<section class=" py-5 hero-section d-flex align-items-center justify-content-center"  <?php echo $background_style; ?>>
	<div class="container text-center"> 
		<h1 class="text-white text-center mb-4"><?php the_title(); ?></h1>
		<div class="text-white">							
			<?php the_content(); ?>
		</div>
	</div>
</section>


<section class="content-wrap mx-3 px-3 mx-lg-5 px-lg-5 mt-n5">



	   <!-- Lightbox -->
  <div class="lightbox">
    <span class="close-lightbox">&times;</span>
    <img class="lightbox-content" src="" alt="">
    <div class="image-title"></div>
  </div>



</section>


<?php get_footer(); ?>