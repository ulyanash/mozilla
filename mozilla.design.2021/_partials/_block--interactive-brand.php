<?php 
$brand_parent_id = get_the_ID();
if( wp_get_post_parent_id($brand_parent_id) ) {
  $brand_parent_id = wp_get_post_parent_id($brand_parent_id);
}

if( get_field('interactive_fallback_image', $brand_parent_id) ):
  $image = get_field('interactive_fallback_image', $brand_parent_id);
?>
<div class="brand-interactive">
  <noscript>
    <img src="<?php echo $image['sizes']['large']; ?>" alt="" />
  </noscript>
  <img class="lazyload fallback" data-sizes="auto" data-src="<?php echo $image['sizes']['large']; ?>" data-srcset="<?php echo wp_get_attachment_image_srcset( $image['ID'], array( 2000, 2000 ) ); ?>" alt="" />

  <?php 
  /* 
  <iframe title="Mozilla Animation" src="<?php echo get_template_directory_uri(); ?>/assets/interactives/mozilla-anim/full.html" style="border:0" frameboder="0" border="0" scrolling="no"></iframe> 
  */
  ?>
</div>
<?php endif; ?>
