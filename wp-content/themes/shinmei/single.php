<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>
<div id="visual">
	<h1 class="visual-title"><?php the_title(); ?></h1>
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
			<li>
				<a href="javascript:;"><?php the_title(); ?></a>
			</li>
		</ol>

		<div class="single-news-date">
			<i class="fa fa-calendar"></i>
			<span><?php the_time('Y.m.d') ?></span>
		</div>

		<div class="single-news-content-area">
			<?php the_content(); ?>
		</div>
	</div>
</main>
<?php endwhile; ?>

<?php get_footer(); ?>