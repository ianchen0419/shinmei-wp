<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php _e('Are you sure it exists?'); ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
		</ol>
	</div>
</main>

<?php get_footer(); ?>