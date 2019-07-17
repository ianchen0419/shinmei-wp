<?php 

function twentyfourteen_wp_title( $title) {
	if (is_home() || is_front_page()) {
		if(get_current_blog_id()==1){
			$title='産業用印字表示ソリューションのシンメイ';
		}else{
			$title='Shinmei Co.Ltd.: Marketing & Innovating for Industrial Printing Solution';
		}
	}else{
		$title = get_bloginfo( 'name', 'display' );
	}

	return $title;
}

add_filter( 'wp_title', 'twentyfourteen_wp_title', 10, 2 );

?>