<?php
$current_id = get_the_ID();
$term = get_term_by('name', 'Primary Navigation', 'nav_menu');
$links = wp_get_nav_menu_items($term->term_id);
?>
<div class="section-nav col-xl-3 col-lg-4">
  <div class="section-nav-menu type--h-sm type--mb-h-xxs">
    <ul class="section-nav-menu-links">
    <?php 
      $count = 0;
      foreach( $links as $link ): 
        if( $link->post_parent == $current_id ): $count++; ?>
          <li><a class="<?php echo ($current_id == $link->object_id) ? 'current' : ''; ?>"href="<?php echo $link->url; ?>"><span class="count">0<?php echo $count; ?></span><span class="link-title"><?php echo $link->title; ?></span></a></li>
    <?php endif; endforeach; ?>
    </ul>
  </div>
</div>
