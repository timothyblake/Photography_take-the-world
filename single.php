<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TAKE-THE-WORLD_Timothy_Blake
 */

get_header();
?>





<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', get_post_type() );

    the_post_navigation(
        array(
            'prev_text' => '<span class="nav-arrow">&larr;</span> <span class="nav-title">%title Album</span> ',
            'next_text' => '<span class="nav-title">%title Album</span> <span class="nav-arrow">&rarr;</span>',
            'screen_reader_text' => __( 'Post navigation', 'take-the-world_timothy_blake' ),
            'class' => 'custom-post-navigation', // Add a custom class to the navigation container
        )
    );

endwhile; // End of the loop.
?>


<?php
get_footer();
