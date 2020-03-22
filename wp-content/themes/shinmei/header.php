<?php
	// 日本語：1
	// 英語：2
?>

<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="ja" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<?php wp_site_icon(); ?>
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="<?php echo (get_current_blog_id()==1)?'サーマルプリンター,オートラベラー,チェックスタンパー,フィーダー,スタッカー,包装機用サーマルプリンター,卓上型サーマルプリンター,ロールフィルムサーマルプリンター,オートラベリングシステム ,チェックスタンパー':'Industrial Thermal printer,Industrial Automatic labeler,Check Stamper,Feeder,Stacker,Packaging Machine Manufacturers,Thermal printer for packaging machine,Tabletop-type thermal printer,Packaging Priner,Egg Grating & Packaging center' ?>" />
	<title><?php wp_title(''); ?></title>
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style.css" />
	<?php if(get_current_blog_id()!==1){ ?>
		<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/english.css" />
	<?php } ?>
</head>
<body>

<header id="header">
	<div class="wrapper-size">
		<div class="logo-content">
			<h1><?php echo (get_current_blog_id()==1)?'株式会社シンメイ  産業用印字・表示の様々な問題を技術革新とマーケティングで解決します。':'Shinmei Co.Ltd. Marketing & Innovating for Industrial Printing Solution' ?></h1>
			<a href="<?php bloginfo('url') ?>">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/logo.png" alt="株式会社シンメイ" height="50" />
			</a>
		</div>
		<div class="contact-content">
			<?php if(get_current_blog_id()==1){ ?>
				<a href="<?php echo get_blog_option(2, 'siteurl'); ?>" class="english-area">English</a>
				<a href="<?php bloginfo('url') ?>/inquiry" class="contact-area">
					<span>お問い合わせ</span>
					<i class="fa fa-envelope"></i>
				</a>
			<?php }else{ ?>
				<a href="<?php echo get_blog_option(1, 'siteurl'); ?>" class="english-area">日本語</a>
				<div>
					<?php echo do_shortcode('[gtranslate]'); ?>
				</div>
			<?php } ?>
			
		</div>
		<div class="mobile-menu-bar">
			<i class="fa fa-bars fa-2x" onclick="openMobileMenu()"></i>
		</div>
	</div>
</header>
<nav id="menu">
	<div class="wrapper-size">
		<?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
	</div>
</nav>