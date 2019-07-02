<?php /* Template Name: sitemap */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">サイトマップ</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>">ホーム</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/sitemap">サイトマップ</a>
			</li>
		</ol>

		<div class="sitemap-wrapper">
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>">
					<span class="deco-title">
						<h2>ホーム</h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/information" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>インフォメーション</span>
						</a>
						<ul class="sitemap-sub">
							<li>
								<a href="<?php bloginfo('url') ?>/column" class="link-text">印字の種類</a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/column/softpackaging" class="link-text">軟包装の種類</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/news-all" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>ニュース</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/products">
					<span class="deco-title">
						<h2>製品一覧</h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/products/thermal" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>産業用包装機対応ダイレクトサーマル プリンター</span>
						</a>
						<ul class="sitemap-sub">
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/wrap" class="link-text">産業用包装機対応ダイレクトサーマル プリンターSCS</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/desktop-thermal" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>卓上型ダイレクトサーマルプリンター</span>
						</a>
						<ul class="sitemap-sub">
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/single" class="link-text">卓上型 片面ダイレクトサーマル プリンター</a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/double" class="link-text">卓上型 両面ダイレクトサーマルプリンター</a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/onebox" class="link-text">卓上型 一体ダイレクトサーマル プリンター</a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/handy" class="link-text">卓上型 手差ダイレクトサーマル プリンター</a>
							</li>
							<li>
								<a href="<?php bloginfo('url') ?>/products/thermal/rps" class="link-text">卓上型 ロール フィルム ダイレクトサーマルプリンター</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/labeler" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>産業用オート ラベラー</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/stamper" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>チェックスタンパー</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/feeder" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>フィーダー・スタッカー</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/others" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>その他製品</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/products/supplies" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>消耗品</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/solution">
					<span class="deco-title">
						<h2>業種別ソリューション</h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/advantage" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>シンメイの強み</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/thermal" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>全業種向け</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/food" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>食品加工メーカー向け</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/wrap" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>包装機メーカー向け</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/egg" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>鶏卵GPセンター向け</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/fertilizer" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>肥料堆肥メーカー</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/account" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>金融・経理部門向け</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/solution/pamphlet" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>旅行業界・流通百貨店向け</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/company">
					<span class="deco-title">
						<h2>会社案内</h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/company/about" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>企業情報</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/network" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>事業所一覧</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/idea" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>企業理念</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/history" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>沿革</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/company/client" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>取引先</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="<?php bloginfo('url') ?>/inquiry">
					<span class="deco-title">
						<h2>お問い合わせ</h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/inquiry" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>お問い合わせ</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/material" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>資料ダウンロード</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="sitemap-item">
				<a href="javascript:;">
					<span class="deco-title">
						<h2>その他</h2>
					</span>
				</a>
				<ul class="sitemap-main">
					<li>
						<a href="<?php bloginfo('url') ?>/recruit" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>採用情報</span>
						</a>
					</li>
					<li>
						<a href="<?php bloginfo('url') ?>/privacy" class="link-item">
							<i class="fa fa-caret-right"></i>
							<span>個人情報保護方針</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>