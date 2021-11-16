<?php
/*
Template Name: Design Tools Page
*/
?>
<?php get_header(); ?>

<?php
  $bg_image = $bg_image_mobile = 'https://mozilla.design/files/2019/06/Mozilla-Resources-Back.svg';
  if( get_field('background_image') ) {
    $bg_image = get_field('background_image');
    $bg_image_mobile = $bg_image;
  }
  if( get_field('background_image_mobile')) {
    $bg_image_mobile = get_field('background_image_mobile');
  }
?>
<style type="text/css">
  .page-template-page-design-tools .page-body.design-tools-bg {
    background-image: url(<?php echo $bg_image['url']; ?>);
  }
  @media(max-width: 1019px) {
    .page-template-page-design-tools .page-body.design-tools-bg {
      background-image: url(<?php echo $bg_image_mobile['url']; ?>);
    }
  }
</style>

<div class="interior-page-wrap">
  <div class="page-body design-tools-bg">
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

    <div class="page-section page-section--design-tools design-tools">
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
