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
// unregister_block_style( 'core/image', 'rounded' );

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
		array( 'label' => esc_html__( 'Subpage' ) )
	);
	register_block_pattern_category(
		'md-ff',
		array( 'label' => esc_html__( 'Firefox' ) )
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

	// Spacers
	register_block_pattern(
		'md/spacer-xs',
		array(
			'title'         => esc_html__( 'Spacer XS (20px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer XS (20px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-xs'),
		)
	);
	register_block_pattern(
		'md/spacer-s',
		array(
			'title'         => esc_html__( 'Spacer Small (40px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer Small (40px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-s'),
		)
	);
	register_block_pattern(
		'md/spacer-m',
		array(
			'title'         => esc_html__( 'Spacer Medium (60px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer Medium (60px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-m'),
		)
	);
	register_block_pattern(
		'md/spacer-lg',
		array(
			'title'         => esc_html__( 'Spacer Large (80px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer Large (80px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-lg'),
		)
	);
	register_block_pattern(
		'md/spacer-xl',
		array(
			'title'         => esc_html__( 'Spacer XL (120px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer XL (120px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-xl'),
		)
	);
	register_block_pattern(
		'md/spacer-xxl',
		array(
			'title'         => esc_html__( 'Spacer XXL (180px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer XXL (180px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-xxl'),
		)
	);
	register_block_pattern(
		'md/spacer-mega',
		array(
			'title'         => esc_html__( 'Spacer Mega (240px)' ),
			'categories'    => array( 'md-spacers' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Spacer Mega (240px)', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/spacers/spacer-mega'),
		)
	);

	// Page Section with 2 columns
	register_block_pattern(
		'md/page-section-2-cols-offset-l',
		array(
			'title'         => esc_html__( 'Section with 2 columns with big gap' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with 2 columns with big gap', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-2-cols-offset-l'),
		)
	);
	register_block_pattern(
		'md/page-section-2-cols',
		array(
			'title'         => esc_html__( 'Section with 2 columns' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with 2 columns', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-2-cols'),
		)
	);
	register_block_pattern(
		'md/page-section-3-cols',
		array(
			'title'         => esc_html__( 'Section with 3 columns' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with 3 columns', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-3-cols'),
		)
	);
	// Page Section with Left Offset
	register_block_pattern(
		'md/page-section-offset-left',
		array(
			'title'         => esc_html__( 'Section with Left Offset' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Left Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-offset-left'),
		)
	);
	// Page Section with Medium Left Offset
	register_block_pattern(
		'md/page-section-offset-left-md',
		array(
			'title'         => esc_html__( 'Section with Medium Left Offset' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Medium Left Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-offset-left-md'),
		)
	);
	// Page Section with Large Left Offset
	register_block_pattern(
		'md/page-section-offset-left-lg',
		array(
			'title'         => esc_html__( 'Section with Large Left Offset' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Large Left Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-offset-left-lg'),
		)
	);
	// Page Section with Right Offset
	register_block_pattern(
		'md/page-section-offset-right',
		array(
			'title'         => esc_html__( 'Section with Right Offset' ),
			'categories'    => array( 'md-layout' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Section with Right Offset', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/layout/section-offset-right'),
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
	register_block_pattern(
		'md/home-blocks-row-2',
		array(
			'title'         => esc_html__( 'Home Blocks Row 2' ),
			'categories'    => array( 'md-home' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Home Blocks Row 2', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/home/blocks-row-2'),
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
	register_block_pattern(
		'md/title-with-tooltip',
		array(
			'title'         => esc_html__( 'Title with tooltip' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Title with tooltip', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/title-with-tooltip'),
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

	// Page Image 100% width
	register_block_pattern(
		'md/page-image-w-100',
		array(
			'title'         => esc_html__( 'Image 100% width' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Image 100% width', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/image-w-100'),
		)
	);
	// Page Image 100px height
	register_block_pattern(
		'md/page-image-h-100px',
		array(
			'title'         => esc_html__( 'Image svg height fix' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Image svg height fix', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/image-h-100px'),
		)
	);

	// Page Font Select
	register_block_pattern(
		'md/font-select',
		array(
			'title'         => esc_html__( 'Font Select' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Font Select', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/font-select'),
		)
	);
	// Color Palette
	register_block_pattern(
		'md/color-palette',
		array(
			'title'         => esc_html__( 'Color Palette' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Color Palette', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/color-palette'),
		)
	);
	// Page Type Scale
	register_block_pattern(
		'md/type-scale',
		array(
			'title'         => esc_html__( 'Type Scale' ),
			'categories'    => array( 'md-page' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'Type Scale', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/page/type-scale'),
		)
	);
	// Page From Browser To Parent Brand
	register_block_pattern(
		'md/from-browser-to-parent-brand',
		array(
			'title'         => esc_html__( 'From Browser To Parent Brand' ),
			'categories'    => array( 'md-ff' ),
			'viewportWidth' => $viewportWidth,
			'description'   => esc_html_x( 'From Browser To Parent Brand', 'Block pattern description' ),
			'content'       => md_return_get_template_part( '_partials/block-patterns/pages/firefox/from-browser-to-parent-brand'),
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
