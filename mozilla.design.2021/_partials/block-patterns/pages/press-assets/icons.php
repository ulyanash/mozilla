<div class="link">
  <?php
    $icon_style = 'link';
    if( get_field('icon_style') ) {
      $icon_style = get_field('icon_style');
    }
  ?>
  <i class="icon icon--<?php echo $icon_style; ?>"></i>

 </div>