<?php
/* gutenberg color palette */
function md_add_custom_gutenberg_color_palette() {
  add_theme_support(
      'editor-color-palette',
      [
          [
              'name'  => esc_html__( 'Black' ),
              'slug'  => 'black',
              'color' => '#000',
          ],
          [
              'name'  => esc_html__( 'White' ),
              'slug'  => 'white',
              'color' => '#fff',
          ],
          [
              'name'  => esc_html__( 'Heading' ),
              'slug'  => 'heading',
              'color' => '#212529',
          ],
          [
              'name'  => esc_html__( 'Light Yellow' ),
              'slug'  => 'light-yellow',
              'color' => '#ffff98',
          ],
          [
              'name'  => esc_html__( 'Lemon Yellow' ),
              'slug'  => 'lemon-yellow',
              'color' => '#fff44f',
          ],
          [
              'name'  => esc_html__( 'Light Blue' ),
              'slug'  => 'light-blue',
              'color' => '#00ddff',
          ],
          [
              'name'  => esc_html__( 'Neon Blue' ),
              'slug'  => 'neon-blue',
              'color' => '#00ffff',
          ],
          [
              'name'  => esc_html__( 'Warm Red' ),
              'slug'  => 'warm-red',
              'color' => '#ff4f5e',
          ],
          [
            'name'  => esc_html__( 'Neon Green' ),
            'slug'  => 'neon-green',
            'color' => '#54ffbd',
          ],
          [
              'name'  => esc_html__( 'Dark Purple' ),
              'slug'  => 'dark-purple',
              'color' => '#6e008b',
          ],
          [
              'name'  => esc_html__( 'Dark Green' ),
              'slug'  => 'dark-green',
              'color' => '#005E5E',
          ],
          [
              'name'  => esc_html__( 'Dark Blue' ),
              'slug'  => 'dark-blue',
              'color' => '#00458b',
          ],
          [
              'name'  => esc_html__( 'Dark Grey' ),
              'slug'  => 'dark-grey',
              'color' => '#959595',
          ],
          [
              'name'  => esc_html__( 'Light Grey' ),
              'slug'  => 'light-grey',
              'color' => '#e7e5e2',
          ],

      ]
  );
}

/* gutenberg font sizes */
function md_add_custom_gutenberg_font_sizes() {
    // Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small' ),
					'shortName' => esc_html_x( 'XS', 'Font size' ),
					'size'      => 12,
					'slug'      => 'xs',
				),
				array(
					'name'      => esc_html__( 'Small' ),
					'shortName' => esc_html_x( 'S', 'Font size' ),
					'size'      => 14,
					'slug'      => 'sm',
				),
				array(
					'name'      => esc_html__( 'Bigger' ),
					'shortName' => esc_html_x( '18', 'Font size' ),
					'size'      => 18,
					'slug'      => 'lg',
				),
				array(
					'name'      => esc_html__( 'Heading XXXS' ),
					'shortName' => esc_html_x( '16', 'Font size' ),
					'size'      => 16,
					'slug'      => 'h-xxxs',
				),
				array(
					'name'      => esc_html__( 'Heading XXS' ),
					'shortName' => esc_html_x( '20', 'Font size' ),
					'size'      => 20,
					'slug'      => 'h-xxs',
				),
				array(
					'name'      => esc_html__( 'Heading XS' ),
					'shortName' => esc_html_x( '24', 'Font size' ),
					'size'      => 24,
					'slug'      => 'h-xs',
				),
				array(
					'name'      => esc_html__( 'Heading SM' ),
					'shortName' => esc_html_x( '32', 'Font size' ),
					'size'      => 32,
					'slug'      => 'h-sm',
				),
				array(
					'name'      => esc_html__( 'Heading MD' ),
					'shortName' => esc_html_x( '40', 'Font size' ),
					'size'      => 40,
					'slug'      => 'h-md',
				),
				array(
					'name'      => esc_html__( 'Heading LG' ),
					'shortName' => esc_html_x( '48', 'Font size' ),
					'size'      => 48,
					'slug'      => 'h-lg',
				),
				array(
					'name'      => esc_html__( 'Heading XL' ),
					'shortName' => esc_html_x( '56', 'Font size' ),
					'size'      => 56,
					'slug'      => 'h-xl',
				),
				array(
					'name'      => esc_html__( 'Heading XXL' ),
					'shortName' => esc_html_x( '64', 'Font size' ),
					'size'      => 64,
					'slug'      => 'h-xxl',
				),
				array(
					'name'      => esc_html__( 'Heading Mega' ),
					'shortName' => esc_html_x( '180', 'Font size' ),
					'size'      => 152,
					'slug'      => 'h-mega',
				),
			)
		);
}
add_action( 'after_setup_theme', 'md_add_custom_gutenberg_color_palette' );
add_action( 'after_setup_theme', 'md_add_custom_gutenberg_font_sizes' );

add_action('admin_head', 'md_custom_editor_style');

function md_custom_editor_style() {
  echo '<style>
    .block-editor-block-patterns-list__item .editor-styles-wrapper {min-height: 150px !important;}
	[aria-label^="Spacer"] .block-editor-block-patterns-list__item .editor-styles-wrapper {min-height: 0px !important;}
  </style>';
}