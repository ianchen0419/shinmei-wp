<?php /* Template Name: news */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'ニュース一覧':'News' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/news-all"><?php echo (get_current_blog_id()==1)?'ニュース一覧':'News' ?></a>
			</li>
		</ol>
		<div class="news-area mar_top40">
			<?php
				$args = array(
				'posts_per_page' => -1 // 表示件数の指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
			?>
			<div class="news-item">
				<div class="news-component">
					<div class="date"><?php the_time('Y.m.d') ?></div>
					<div class="tag"><?php echo strip_tags(get_the_tag_list()); ?></div>
				</div>
				<a href="<?php echo get_the_content() ? the_permalink(): "javascript:;"; ?>">
					<?php the_title(); ?>
				</a>
			</div>
			<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
		</div>
	</div>

</main>

<?php get_footer(); ?>