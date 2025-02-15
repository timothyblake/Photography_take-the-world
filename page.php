<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TAKE-THE-WORLD_Timothy_Blake
 */

get_header();
?>
<?php if (has_post_thumbnail()) {
	$thumbnail_url = get_the_post_thumbnail_url('', 'single_featured');
	$background_style = 'style="background: linear-gradient(170deg, rgba(134, 104, 104, 0.9) 0%, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.55226) 100%), url(' . $thumbnail_url . ');"';
} else {
	$background_style = 'style="  
 background: linear-gradient(170deg, rgba(134, 104, 104, 0.8) 0%, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.55226) 100%);"';
} ?>

<section class=" py-5 hero-section d-flex align-items-center justify-content-center"  <?php echo $background_style; ?>>
	<div class="container text-center"> 
		<h1 class="text-white text-center mb-4"><?php the_title(); ?></h1>
		<div class="row justify-content-center">
		<div class="col-12 col-md-10 col-xl-8">		
		<?php the_content(); ?>
				
		</div>
		</div>
	</div>
</section>
 
<section class="content-wrap mx-3 px-3 mx-lg-5 px-lg-5 mt-n5">

</section>
	   <!-- Lightbox -->
  <!-- <div class="lightbox">
    <span class="close-lightbox">&times;</span>
    <img class="lightbox-content" src="" alt="">
    <div class="image-title"></div>
  </div> -->

<?php
get_footer();
