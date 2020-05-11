<?php 

function my_plugin_block_categories( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'shinmei',   //ブロックカテゴリーのスラッグ
                'title' => 'シンメイ様用',  //ブロックカテゴリーの表示名
            ),
        )
    );
}
add_filter( 'block_categories', 'my_plugin_block_categories', 10, 2 );


function add_my_assets_to_block_editor() {
    wp_enqueue_style( 'block-style', get_stylesheet_directory_uri() . '/custom.css' );
    wp_enqueue_script( 'block-custom', get_stylesheet_directory_uri() . '/custom.js',array(), "", true);
}
add_action( 'enqueue_block_editor_assets', 'add_my_assets_to_block_editor' );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 */
function shinmei_get_color_for_area( $area = 'content', $context = 'text' ) {

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content'       => array(
				'black'     => '#333',
				'blue'      => '#0844A4',
				'lightblue' => '#D4E3FC',
				'gray'      => '#EBEBEB',
				'white'     => '#FFF',
			),
			'header-footer' => array(
				'black'     => '#333',
				'blue'      => '#0844A4',
				'lightblue' => '#D4E3FC',
				'gray'      => '#EBEBEB',
				'white'     => '#FFF',
			),
		)
	);

	// If we have a value return it.
	if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
		return $settings[ $area ][ $context ];
	}

	// Return false if the option doesn't exist.
	return false;
}

function shinmei_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( '黒色', 'shinmei' ),
			'slug'  => 'black',
			'color' => shinmei_get_color_for_area( 'content', 'black' ),
		),
		array(
			'name'  => __( '青色', 'shinmei' ),
			'slug'  => 'blue',
			'color' => shinmei_get_color_for_area( 'content', 'blue' ),
		),
		array(
			'name'  => __( '水色', 'shinmei' ),
			'slug'  => 'lightblue',
			'color' => shinmei_get_color_for_area( 'content', 'lightblue' ),
		),
		array(
			'name'  => __( '灰色', 'shinmei' ),
			'slug'  => 'gray',
			'color' => shinmei_get_color_for_area( 'content', 'gray' ),
		),
		array(
			'name'  => __( '白色', 'shinmei' ),
			'slug'  => 'white',
			'color' => shinmei_get_color_for_area( 'content', 'white' ),
		),
	);


	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'shinmei' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'shinmei' ),
				'size'      => 14,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'shinmei' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'shinmei' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'shinmei' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'shinmei' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'shinmei' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'shinmei' ),
				'size'      => 40,
				'slug'      => 'larger',
			),
		)
	);

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( shinmei_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}

}
add_action( 'after_setup_theme', 'shinmei_block_editor_settings' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1800, 360 );

add_filter( 'edit_post_link', function( $link, $post_id, $text )
{
    // Add the target attribute 
    if( false === strpos( $link, 'target=' ) )
        $link = str_replace( '<a ', '<a target="_blank" ', $link );

    return $link;
}, 10, 3 );

function register_my_menu() {
  register_nav_menu('new-menu',__( 'New Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'align-wide' );

?>