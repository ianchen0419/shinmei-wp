<?php /* Template Name: カバーテンプレート */ ?>
<?php get_header();?>

<div id="visual" class="image-title">
	<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" width="100%" /> 
	<h1><?php the_title(); ?></h1>
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