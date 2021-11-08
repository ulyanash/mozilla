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
add_action( 'after_setup_theme', 'md_add_custom_gutenberg_color_palette' );