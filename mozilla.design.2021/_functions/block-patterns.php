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
		'md-layout',
		array( 'label' => esc_html__( 'Layout' ) )
	);
	register_block_pattern_category(
		'md-press-asset',
		array( 'label' => esc_html__( 'Press Assets' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	$viewportWidth = '90%';

	// Layout 2 cols
	register_block_pattern(
		'md/two-cols',
		array(
			'title'         => esc_html__( 'Two columns' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Two columns', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/cols-2'),
		)
	);
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

// ACF blocks
function acf_asset_icon_block() {
	if( function_exists('acf_register_block') ) {
		// register a portfolio item block
		acf_register_block(array(
			'name'				=> 'asset-icon',
			'title'				=> __('Asset Icons'),
			'description'		=> __('A custom block for asset icons.'),
			'render_template'	=> '_partials/block-patterns/press-assets/icons.php',
			'category'			=> 'md-press-asset',
			'icon'				=> 'excerpt-view',
			'keywords'			=> array( 'portfolio' ),
		));
	}
}

// add_action('acf/init', 'acf_asset_icon_block');
