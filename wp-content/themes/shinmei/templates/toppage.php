<?php /* Template Name: トップページ */ ?>
<?php get_header();?>

<div id="visual">
	<div class="slider-area">
		<div id="sliderWrapper">
			<div class="slider-item">
				<div class="slider-image image-1"></div>
				<a href="column/softpackaging" class="slider-text">
					<div class="catch-copy"><?php echo get_post_meta($post->ID, 'slide1-title', true); ?></div>
					<p><?php echo get_post_meta($post->ID, 'slide1-text', true); ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-2"></div>
				<a href="products" class="slider-text">
					<div class="catch-copy"><?php echo get_post_meta($post->ID, 'slide2-title', true); ?></div>
					<p><?php echo get_post_meta($post->ID, 'slide2-text', true); ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-3"></div>
				<a href="solution" class="slider-text">
					<div class="catch-copy"><?php echo get_post_meta($post->ID, 'slide3-title', true); ?></div>
					<p><?php echo get_post_meta($post->ID, 'slide3-text', true); ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-4"></div>
				<a href="column#qrcode" class="slider-text">
					<div class="catch-copy"><?php echo get_post_meta($post->ID, 'slide4-title', true); ?></div>
					<p><?php echo get_post_meta($post->ID, 'slide4-text', true); ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-1"></div>
				<a href="softpackaging" class="slider-text">
					<div class="catch-copy"><?php echo get_post_meta($post->ID, 'slide1-title', true); ?></div>
					<p><?php echo get_post_meta($post->ID, 'slide1-text', true); ?></p>
				</a>
			</div>
		</div>
		<div class="slider-buttons">
			<div class="dots">
				<button class="dot active" id="dot1"></button>
				<button class="dot" id="dot2"></button>
				<button class="dot" id="dot3"></button>
				<button class="dot" id="dot4"></button>
			</div>
		</div>
	</div>
</div>
<main id="contact">

	<?php
		while(have_posts()): the_post();
			the_content();
		endwhile;
	?>

	<div class="wp-block-cover has-white-background-color has-background-dim">
		<div class="wp-block-cover__inner-container">
			<div class="home-title">
				<p class="has-text-color has-text-align-center has-larger-font-size has-blue-color mar_btm0"><strong>News</strong></p>
				<p class="has-text-color has-text-align-center has-black-color mar_top0 en-hide"><strong>ニュース</strong></p>
			</div>
			<?php
				$args = array(
				'posts_per_page' => 6 // 表示件数の指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
			?>
			<div class="news-area">
				<div class="news-item">
					<div class="news-component">
						<div class="date"><?php the_time('Y.m.d') ?></div>
						<div class="tag"><?php echo strip_tags(get_the_tag_list()); ?></div>
					</div>
					<a href="<?php echo get_the_content() ? the_permalink(): "javascript:;"; ?>">
						<?php the_title(); ?>
					</a>
				</div>
			</div>
			<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
			<div class="all-news">
				<a href="news-all">
					<span><?php echo (get_current_blog_id()==1)?'過去のニュース一覧':'Past news' ?></span>
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>
			<?php
				edit_post_link('クリックして編集', '<div class="alignright mar_top40">', '</div>'); 
			?>
		</div>
	</div>
</main>


<?php get_footer(); ?>
<script>
	sliderShow();
</script>