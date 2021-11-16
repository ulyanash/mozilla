<?php
/*
Template Name: Design Tools Page
*/
?>
<?php get_header(); ?>

<div class="interior-page-wrap">
  <div class="page-body" style="background-image: url(https://3u26hb1g25wn1xwo8g186fnd-wpengine.netdna-ssl.com/files/2019/06/Mozilla-Resources-Back.svg);">
    <div class="page-section page-section--page-intro page-intro half">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col col-xl-7 offset-xl-1 col-lg-8 offset-lg-0">
            <div class="page-intro--title type--h-xxl">
              <h1 class="type--h-xxl type--mb-h-lg alt-size"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section">
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
  </div>
</div>

<?php get_footer(); ?>
