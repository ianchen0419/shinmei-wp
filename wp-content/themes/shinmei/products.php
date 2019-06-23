<?php /* Template Name: products */ ?>
<?php get_header();?>

<div id="visual" class="image-title">
	<picture> 
		<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/products/products_mobile.jpg" /> 
		<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products.jpg" alt="製品一覧" width="100%" /> 
	</picture>
	<h1>製品一覧</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>">ホーム</a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/products">製品一覧</a>
			</li>
		</ol>
		<a href="<?php bloginfo('url') ?>/products/thermal" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_01.jpg" alt="包装機用サーマル プリンター" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>産業用包装機対応ダイレクトサーマル プリンター</h2>
				</div>
				<p>産業用包装機対応ダイレクトサーマルプリンターは発売以来、産業用のプリンターとしてコンパクトなサイズとメンテナンスの手軽さから食品をはじめ医薬、化学、工業などの業界での多くの工場等でご愛用頂いております。</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/desktop-thermal" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_02.jpg" alt="卓上型サーマル プリンター" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>産業用卓上型ダイレクトサーマル プリンター</h2>
				</div>
				<p>産業用卓上型ダイレクトサーマルプリンターは発売以来、空袋に直接印字する産業用ダイレクトサーマルプリンターとして設置とメンテナンスの手軽さから食品をはじめ医薬、化学、工業などの業界での多くの工場等でご愛用頂いております。</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/labeler" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_03.jpg" alt="産業用オート ラベラー" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>産業用オート ラベラー</h2>
				</div>
				<p>様々な対象に対し、自動でラベルを貼り付けます。簡易型、卓上型やライン設置型など、用途に応じたバリエーションがございます。</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/stamper" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_04.jpg" alt="チェックスタンパー" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>チェックスタンパー</h2>
				</div>
				<p>押印したい箇所に自動で押印を行います。卵パックに入っているサイズや日付が表記されている比較的小さなラベルからA3サイズのような大きなサイズの用紙まで幅広く押印業務を効率化します。<br>数量が増え手押しには限界を感じた方、常に安定したきれいな押印がしたい方におすすめです。</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/feeder" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_05.jpg" alt="フィーダー/スタッカー" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>フィーダー/スタッカー</h2>
				</div>
				<p>ダイレクトサーマルプリンターやオートラベラーと連結し、軟包装の空袋の供給とストックを自動で行います。用途に合わせた様々なバリエーションをご用意しています。</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/others" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_06.jpg" alt="その他製品" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>その他製品</h2>
				</div>
				<p>その他シンメイが取り扱っている製品です。<br>鶏卵中身有無検査装置、ボトルラベラー、チケットプリンター</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/supplies" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_07.jpg" alt="消耗品" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2>消耗品</h2>
				</div>
				<p>ラベル、インク、サーマルリボンなどの各種消耗品の取り扱いはこちらです。</p>
				<div class="products-button">
					<button>詳細</button>
				</div>
			</div>
		</a>
	</div>
</main>

<?php get_footer(); ?>