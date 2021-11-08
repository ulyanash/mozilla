<?php
/**
 * Block Patterns
 */

 /**
 * Remove default block patterns
 */
remove_theme_support( 'core-block-patterns' );

/**
* Remove unused styles
*/
unregister_block_style( 'core/image', 'rounded' );

 /**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'md-press-asset',
		array( 'label' => esc_html__( 'Press Assets' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	$viewportWidth = 1140;

	// Press Asset
	register_block_pattern(
		'md/press-asset',
		array(
			'title'         => esc_html__( 'Press Asset' ),
			'categories'    => array( 'md-press-asset' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Press Asset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/press-assets/press-asset'),
		)
	);
}

