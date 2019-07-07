<?php /* Template Name: company */ ?>
<?php get_header();?>

<div id="visual" class="image-title">
	<picture> 
		<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/company/company_mobile.jpg" /> 
		<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company.jpg" alt="会社案内" width="100%" /> 
	</picture>
	<h1><?php echo (get_current_blog_id()==1)?'会社案内':'About Us' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company"><?php echo (get_current_blog_id()==1)?'会社案内':'About Us' ?></a>
			</li>
		</ol>

		<div class="company-wrapper">
			<div class="company-block">
				<a href="<?php bloginfo('url') ?>/company/about">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_1.jpg" alt="企業情報" width="400">
					<div class="company-text">
						<h2><?php echo (get_current_blog_id()==1)?'企業情報':'Company' ?></h2>
					</div>
				</a>
			</div>
			<div class="company-block">
				<a href="<?php bloginfo('url') ?>/company/network">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_2.jpg" alt="事業所一覧" width="400">
					<div class="company-text">
						<h2><?php echo (get_current_blog_id()==1)?'事業所一覧':'Officies' ?></h2>
					</div>
				</a>
			</div>
			<div class="company-block">
				<a href="<?php bloginfo('url') ?>/company/idea">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_3.jpg" alt="企業理念" width="400">
					<div class="company-text">
						<h2><?php echo (get_current_blog_id()==1)?'企業理念':'Values' ?></h2>
					</div>
				</a>
			</div>
			<div class="company-block">
				<a href="<?php bloginfo('url') ?>/company/history">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_4.jpg" alt="沿革" width="400">
					<div class="company-text">
						<h2><?php echo (get_current_blog_id()==1)?'沿革':'History' ?></h2>
					</div>
				</a>
			</div>
			<div class="company-block">
				<a href="<?php bloginfo('url') ?>/company/client">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_5.jpg" alt="取引先" width="400">
					<div class="company-text">
						<h2><?php echo (get_current_blog_id()==1)?'取引先':'Customers' ?></h2>
					</div>
				</a>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>