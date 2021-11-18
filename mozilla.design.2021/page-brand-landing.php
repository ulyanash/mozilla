<?php
/*
Template Name: Brand Landing Page
*/
?>
<?php get_header(); ?>

<?php
  $fallback_image = get_field('interactive_fallback_image');
?>
<div class="interior-page-wrap">
  <?php include('_partials/_block-section_nav.php'); ?>
  <div class="page-section page-section--brand-interactive brand-interactive">
    <?php if( get_the_title() == 'Firefox Brand' ): ?>
    <?php include('_partials/_block--interactive-firefox.php'); ?>
    <?php endif; ?>
    <?php if( get_the_title() == 'Mozilla Brand' ): ?>
    <?php include('_partials/_block--interactive-mozilla.php'); ?>
    <?php endif; ?>
    <div class="container-fluid">
      <?php if( get_the_title() == 'Mozilla Brand' ): ?>
        <div class="row w-100">
        <div class="col-12 col-xxl-9 col-xl-9 col-lg-8 force-max-width">
        <div class="row d-flex w-100">
          <div class="col offset-xl-1">
            <h1 class="type--mz-h-mega--highlight type--mz-mb-h-mega--highlight extra-lh">moz://a<br>&#8202;brand&#8202;</h1>
          </div>
        </div>
        </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div class="page-body" data-section-url="<?php the_permalink(); ?>">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-xxl-9 col-xl-9 col-lg-8 force-max-width">

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

</div>
<?php if( get_field('custom_bumper') ): ?>

<?php include('_partials/_block--bumper-custom.php'); ?>

<?php else : ?>

<?php include('_partials/_block--bumper.php'); ?>

<?php endif; ?>

<?php get_footer(); ?>
