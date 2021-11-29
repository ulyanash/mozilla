<?php
/**
 * Custom short tags for this theme
 */

/**
 * Recent posts
 */
function md_shortcode_font_select($params = []) {
    // set up default parameters
    $args = shortcode_atts(array(
        'font' => 'zillaslab-regularitalic',
        'size' => 200,
        'text' => 'Zilla Slab',
        'text_color' => '#ffff98',
    ), $params);

    // Add 5 recent posts
    return md_return_get_template_part('_partials/short-tags/font-select', null, $args);
}
add_shortcode('md_font_select', 'md_shortcode_font_select');
