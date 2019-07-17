<?php /* Template Name: sitemap */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/sitemap"><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></a>
			</li>
		</ol>

		<div class="sitemap-wrapper">
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>">
					<span class="deco-title">
						<h2><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/information" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'インフォメーション':'Information' ?></span>
						</a>
						<ul class="sitemap-sub">
							<li>
								<a href="<?php bloginfo('url') ?>/column" class="link-text"><?php echo (get_current_blog_id()==1)?'印字の種類':'Print Type' ?></a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/column/softpackaging" class="link-text"><?php echo (get_current_blog_id()==1)?'軟包装の種類':'Type of soft packaging' ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/news-all" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'ニュース':'News' ?></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/products">
					<span class="deco-title">
						<h2><?php echo (get_current_blog_id()==1)?'製品一覧':'Products' ?></h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/products/thermal" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'産業用包装機対応ダイレクトサーマル プリンター':'Direct Thermal Printer for Packaging Machine' ?></span>
						</a>
						<ul class="sitemap-sub">
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/wrap" class="link-text"><?php echo (get_current_blog_id()==1)?'産業用包装機対応ダイレクトサーマル プリンターSCS':'Direct Thermal Printer for Packaging Machine SCS' ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/desktop-thermal" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'卓上型ダイレクトサーマルプリンター':'Desktop Type Direct Thermal Printer' ?></span>
						</a>
						<ul class="sitemap-sub">
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/single" class="link-text"><?php echo (get_current_blog_id()==1)?'卓上型 片面ダイレクトサーマル プリンター':'Desktop Type Single-Sided Direct Thermal Printer' ?></a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/double" class="link-text"><?php echo (get_current_blog_id()==1)?'卓上型 両面ダイレクトサーマルプリンター':'Desktop Type Duplex Direct Thermal Printer' ?></a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/onebox" class="link-text"><?php echo (get_current_blog_id()==1)?'卓上型 一体ダイレクトサーマル プリンター':'Desktop Type Integrated Direct Thermal Printer' ?></a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/handy" class="link-text"><?php echo (get_current_blog_id()==1)?'卓上型 手差ダイレクトサーマル プリンター':'Desktop Type Manual Feed Direct Thermal Printer' ?></a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/rps" class="link-text"><?php echo (get_current_blog_id()==1)?'卓上型 ロール フィルム ダイレクトサーマルプリンター':'Desktop Type Roll Film Direct Thermal Printer' ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/labeler" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'産業用オート ラベラー':'Industrial Auto Labeler' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/stamper" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'チェックスタンパー':'Check Stamper' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/feeder" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'フィーダー・スタッカー':'Feeder / Stacker' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/others" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'その他製品':'Other Products' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/supplies" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'消耗品':'Consumables' ?></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/solution">
					<span class="deco-title">
						<h2><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solutions' ?></h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/advantage" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'シンメイの強み':'Shinmei\'s Advantages' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/thermal" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'全業種向け':'All Industries' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/food" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'食品加工メーカー向け':'Food Processing Manufacturers' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/wrap" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'包装機メーカー向け':'Packaging Machine Manufacturers' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/egg" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'鶏卵GPセンター向け':'Egg GP Center' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/fertilizer" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'肥料堆肥メーカー':'Fertilizer compost maker' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/account" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'金融・経理部門向け':'Financial and Accounting department' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/pamphlet" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'旅行業界・流通百貨店向け':'Travel and Department Stores' ?></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/company">
					<span class="deco-title">
						<h2><?php echo (get_current_blog_id()==1)?'会社案内':'About Us' ?></h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/company/about" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'企業情報':'Company' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/network" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'事業所一覧':'Offices' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/idea" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'企業理念':'Values' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/history" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'沿革':'History' ?></span>
						</a>
					</li>
					<li style="display: none">
						<a href="<?php bloginfo('url') ?>/company/client" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'取引先':'Customers' ?></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/inquiry">
					<span class="deco-title">
						<h2><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact Us' ?></h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/inquiry" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact Us' ?></span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/material" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'資料ダウンロード':'Catalog Download' ?></span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="javascript:;">
					<span class="deco-title">
						<h2><?php echo (get_current_blog_id()==1)?'その他':'Others' ?></h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
						<a href="<?php bloginfo('url') ?>/recruit" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>採用情報</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/privacy" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span><?php echo (get_current_blog_id()==1)?'個人情報保護方針':'Privacy Policy' ?></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>