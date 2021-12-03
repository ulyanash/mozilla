<?php
/**
 * Custom short tags for this theme
 */

/**
 * Font select with size change
 */
function md_shortcode_font_select($params = []) {
    // set up default parameters
    $args = shortcode_atts(array(
        'font' => 'zillaslab-regularitalic',
        'size' => 200,
        'text' => 'Zilla Slab',
        'text_color' => '#ffff98',
    ), $params);

    return md_return_get_template_part('_partials/short-tags/font-select', null, $args);
}
add_shortcode('md_font_select', 'md_shortcode_font_select');

/**
 * Color palette
 */
function md_shortcode_color_palette($params = []) {
    $args = shortcode_atts([
        'style' => 'full',
    ], $params);
    
    return md_return_get_template_part('_partials/short-tags/color-palette', null, $args);
}
add_shortcode('md_color_palette', 'md_shortcode_color_palette');
