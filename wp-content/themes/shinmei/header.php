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
	<link rel="icon" href="<?php bloginfo('template_directory') ?>/inc/img/top/favicon.ico" />
	<meta name="title" content="<?php bloginfo('title') ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="keywords" content="<?php echo (get_current_blog_id()==1)?'サーマルプリンター,オートラベラー,チェックスタンパー,フィーダー,スタッカー,包装機用サーマルプリンター,卓上型サーマルプリンター,ロールフィルムサーマルプリンター,オートラベリングシステム ,チェックスタンパー':'Industrial Thermal printer,Industrial Automatic labeler,Check Stamper,Feeder,Stacker,Packaging Machine Manufacturers,Thermal printer for packaging machine,Tabletop-type thermal printer,Packaging Priner,Egg Grating & Packaging center' ?>" />
	<title><?php bloginfo('title') ?></title>
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style.css" />
	<?php if(get_current_blog_id()==2){ ?>
		<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style-en.css" />
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
		<ul>
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'HOME' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution"><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solution' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/products"><?php echo (get_current_blog_id()==1)?'製品一覧':'Products' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company"><?php echo (get_current_blog_id()==1)?'会社案内':'Company' ?></a>
			</li>
			<?php if(get_current_blog_id()==1){ ?>
				<li>
					<a href="<?php bloginfo('url') ?>/recruit">採用情報</a>
				</li>
			<?php }else{ ?>
				<li>
					<a href="<?php bloginfo('url') ?>/inquiry">Contact Us</a>
				</li>
			<?php } ?>
			
			<li>
				<a href="<?php bloginfo('url') ?>/material"><?php echo (get_current_blog_id()==1)?'製品カタログ':'Catalog' ?></a>
			</li>
		</ul>
	</div>
	<div id="mobileMenu">
		<ul class="mobile-list">
			<li>
				<a href="<?php bloginfo('url') ?>">
					<i class="fa fa-home fa-fw"></i>
					<span><?php echo (get_current_blog_id()==1)?'ホーム':'HOME' ?></span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution">
					<i class="fa fa-book fa-fw"></i>
					<span><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solution' ?></span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/products">
					<i class="fa fa-cog fa-fw"></i>
					<span><?php echo (get_current_blog_id()==1)?'製品一覧':'Products' ?></span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company">
					<i class="fa fa-building-o fa-fw"></i>
					<span><?php echo (get_current_blog_id()==1)?'会社案内':'Company' ?></span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/recruit">
					<i class="fa fa-briefcase fa-fw"></i>
					<span>採用情報</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/material">
					<i class="fa fa-file-text-o fa-fw"></i>
					<span><?php echo (get_current_blog_id()==1)?'製品カタログ':'Catalog' ?></span>
				</a>
			</li>
			<li>
				<?php if(get_current_blog_id()==1){ ?>
					<a href="<?php echo get_blog_option(2, 'siteurl'); ?>">
						<i class="fa fa-font fa-fw"></i>
						<span>English</span>
					</a>
				<?php }else{ ?>
					<a href="<?php echo get_blog_option(1, 'siteurl'); ?>">
						<i class="fa fa-font fa-fw"></i>
						<span>日本語</span>
					</a>
				<?php } ?>
			</li>
		</ul>
		<div class="mobile-anchor-area">
			<div class="mobile-anchor-item">
				<a href="<?php bloginfo('url') ?>/sitemap">
					<i class="fa fa-caret-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></span>
				</a>
			</div>
			<div class="mobile-anchor-item">
				<a href="<?php bloginfo('url') ?>/privacy">
					<i class="fa fa-caret-right"></i>
					<span><?php echo (get_current_blog_id()==1)?'個人情報保護方針':'Privacy Policy' ?></span>
				</a>
			</div>
		</div>
	</div>
</nav>