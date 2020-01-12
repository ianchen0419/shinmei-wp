<?php 

function twentyfourteen_wp_title( $title, $sep ) {
	global $paged, $page;
	if (is_home() || is_front_page() || is_404()) {
		if(get_current_blog_id()==1){
			$title='産業用印字表示ソリューションのシンメイ';
		}else{
			$title='Shinmei Co.Ltd.: Marketing & Innovating for Industrial Printing Solution';
		}
	}else{
		$title=get_bloginfo( 'name', 'display' );
	}

	return $title;
}
add_filter( 'wp_title', 'twentyfourteen_wp_title', 10, 2 );


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
    // wp_enqueue_style( 'block-style', get_stylesheet_directory_uri() . './block_style.css' );
    wp_enqueue_script( 'block-custom', get_stylesheet_directory_uri() . './block_custom.js',array(), "", true);
}
add_action( 'enqueue_block_editor_assets', 'add_my_assets_to_block_editor' );


?>