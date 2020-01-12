<?php /* Template Name: sample */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php the_title(); ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<?php while(have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>