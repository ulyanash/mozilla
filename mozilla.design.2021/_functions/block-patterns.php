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
		'md-spacers',
		array( 'label' => esc_html__( 'Spacers' ) )
	);
	register_block_pattern_category(
		'md-home',
		array( 'label' => esc_html__( 'Home' ) )
	);
	register_block_pattern_category(
		'md-page',
		array( 'label' => esc_html__( 'Page' ) )
	);
	register_block_pattern_category(
		'md-press-asset',
		array( 'label' => esc_html__( 'Press Assets' ) )
	);
	register_block_pattern_category(
		'md-resources',
		array( 'label' => esc_html__( 'Resources' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	$viewportWidth = '98%';

	// Layout 2 cols
	// register_block_pattern(
	// 	'md/two-cols',
	// 	array(
	// 		'title'         => esc_html__( 'Two columns' ),
	// 		'categories'    => array( 'md-layout' ),
	// 		'viewportWidth' => $viewportWidth,
	// 		'description'   => esc_html_x( 'Two columns', 'Block pattern description' ),
	// 		'content'       => md_return_get_template_part( '_partials/block-patterns/layout/cols-2'),
	// 	)
	// );

	// Spacers
	register_block_pattern(
		'md/two-cols',
		array(
			'title'         => esc_html__( 'Spacer Large' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer Large', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-lg'),
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
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/press-assets/press-asset'),
		)
	);

	// Additional Press Asset 
	register_block_pattern(
		'md/additional-press-asset',
		array(
			'title'         => esc_html__( 'Additional Press Asset' ),
			'categories'    => array( 'md-press-asset' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Additional Press Asset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/press-assets/additional'),
		)
	);

	// Home Blocks Row
	register_block_pattern(
		'md/home-blocks-row',
		array(
			'title'         => esc_html__( 'Home Blocks Row' ),
			'categories'    => array( 'md-home' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Home Blocks Row', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/home/blocks-row'),
		)
	);

	// Resources
	register_block_pattern(
		'md/resource',
		array(
			'title'         => esc_html__( 'Resource Item' ),
			'categories'    => array( 'md-resources' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Resource Item', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/resources/resource'),
		)
	);

	// Page Title
	register_block_pattern(
		'md/page-title',
		array(
			'title'         => esc_html__( 'Page title' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Page title', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/title'),
		)
	);

	// Page Heading
	register_block_pattern(
		'md/page-heading-mega',
		array(
			'title'         => esc_html__( 'Heading Mega Big' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Heading Mega Big', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/heading-mega'),
		)
	);

	// Page Section with Left Offset
	register_block_pattern(
		'md/page-section-offset-left',
		array(
			'title'         => esc_html__( 'Section with Left Offset' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Left Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/section-offset-left'),
		)
	);

	// Page Section with Large Left Offset
	register_block_pattern(
		'md/page-section-offset-left-lg',
		array(
			'title'         => esc_html__( 'Section with Large Left Offset' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Large Left Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/section-offset-left-lg'),
		)
	);

	// Page Section with Right Offset
	register_block_pattern(
		'md/page-section-offset-right',
		array(
			'title'         => esc_html__( 'Section with Right Offset' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Right Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/section-offset-right'),
		)
	);

	// Page Section with 2 columns
	register_block_pattern(
		'md/page-section-2-cols',
		array(
			'title'         => esc_html__( 'Section with 2 columns' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with 2 columns', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/section-2-cols'),
		)
	);

	// Page Asset
	register_block_pattern(
		'md/page-asset',
		array(
			'title'         => esc_html__( 'Page Asset' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Page Asset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/asset'),
		)
	);

	// Page Asset Without Image
	register_block_pattern(
		'md/page-asset-no-image',
		array(
			'title'         => esc_html__( 'Page Asset Without Image' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Page Asset Without Image', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/asset-no-image'),
		)
	);
}

// ACF blocks
// function acf_asset_icon_block() {
// 	if( function_exists('acf_register_block') ) {
// 		// register a portfolio item block
// 		acf_register_block(array(
// 			'name'				=> 'asset-icon',
// 			'title'				=> __('Asset Icons'),
// 			'description'		=> __('A custom block for asset icons.'),
// 			'render_template'	=> '_partials/block-patterns/press-assets/icons.php',
// 			'category'			=> 'md-press-asset',
// 			'icon'				=> 'excerpt-view',
// 			'keywords'			=> array( 'portfolio' ),
// 		));
// 	}
// }

// add_action('acf/init', 'acf_asset_icon_block');

/**
 * Change code for press asset
 */
// add_filter( 'render_block', 'md_wrap_press_asset', 10, 2 );
// function md_wrap_press_asset( $block_content, $block ) {
// var_dump($block);
// 	if ( 'md/press-asset' !== $block['blockName'] ) {
// 		return $block_content;
// 	}

// 	return '<a href="#">'.$block_content.'</a>';
// }
