<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div class="page-section page-section--card-listing ">
  <div class="container-fluid">

<?php 
/* Start the Loop */
while ( have_posts() ) :
	the_post();
  the_content();

endwhile; // End of the loop.
?>
      </div>
    </div>
    <?php get_footer(); ?>
