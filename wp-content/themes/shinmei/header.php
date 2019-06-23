<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="ja" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="icon" href="<?php bloginfo('template_directory') ?>/inc/img/top/favicon.ico" />
	<meta name="title" content="サーマルプリンター・オートラベラー・チェックスタンパーのシンメイ" />
	<meta name="description" content="シンメイは、産業用サーマルプリンター・オートラベラー・チェックスタンパーの製造販売、保守メンテナンスを提供しています。" />
	<meta name="keywords" content="サーマルプリンター,オートラベラー,チェックスタンパー,フィーダー,スタッカー,包装機用サーマルプリンター,卓上型サーマルプリンター,ロールフィルムサーマルプリンター,オートラベリングシステム ,チェックスタンパー" />
	<title>サーマルプリンター・オートラベラー・チェックスタンパーのシンメイ</title>
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style.css" />
</head>
<body>

<header id="header">
	<div class="wrapper-size">
		<div class="logo-content">
			<h1>株式会社シンメイ  産業用印字・表示の様々な問題を技術革新とマーケティングで解決します。</h1>
			<a href="<?php bloginfo('url') ?>">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/logo.png" alt="株式会社シンメイ" height="50" />
			</a>
		</div>
		<div class="contact-content">
			<a href="javascript:;" class="english-area">English</a>
			<a href="<?php bloginfo('url') ?>/inquiry" class="contact-area">
				<span>お問い合わせ</span>
				<i class="fa fa-envelope"></i>
			</a>
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
				<a href="<?php bloginfo('url') ?>">ホーム</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution">業種別ソリューション</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/products">製品一覧</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company">会社案内</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/recruit">採用情報</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/material">製品カタログ</a>
			</li>
		</ul>
	</div>
	<div id="mobileMenu">
		<ul class="mobile-list">
			<li>
				<a href="<?php bloginfo('url') ?>">
					<i class="fa fa-home fa-fw"></i>
					<span>ホーム</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution">
					<i class="fa fa-book fa-fw"></i>
					<span>業種別ソリューション</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/products">
					<i class="fa fa-cog fa-fw"></i>
					<span>製品一覧</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company">
					<i class="fa fa-building-o fa-fw"></i>
					<span>会社案内</span>
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
					<span>製品カタログ</span>
				</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/javascript:;">
					<i class="fa fa-font fa-fw"></i>
					<span>English</span>
				</a>
			</li>
		</ul>
		<div class="mobile-anchor-area">
			<div class="mobile-anchor-item">
				<a href="<?php bloginfo('url') ?>/sitemap">
					<i class="fa fa-caret-right"></i>
					<span>サイトマップ</span>
				</a>
			</div>
			<div class="mobile-anchor-item">
				<a href="<?php bloginfo('url') ?>/privacy">
					<i class="fa fa-caret-right"></i>
					<span>個人情報保護方針</span>
				</a>
			</div>
		</div>
	</div>
</nav>