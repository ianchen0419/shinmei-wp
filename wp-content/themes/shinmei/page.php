<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php the_title(); ?></h1>
</div>
<main id="contact">
	<?php 
		while(have_posts()): the_post(); 
			the_content();
		endwhile;
		edit_post_link('クリックして編集', '<div class="alignright mar_top40">', '</div>'); 
	?>
</main>

<?php get_footer(); ?>