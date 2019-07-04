<?php /* Template Name: products */ ?>
<?php get_header();?>

<div id="visual" class="image-title">
	<picture> 
		<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/products/products_mobile.jpg" /> 
		<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products.jpg" alt="製品一覧" width="100%" /> 
	</picture>
	<h1><?php echo (get_current_blog_id()==1)?'製品一覧':'Products' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/products"><?php echo (get_current_blog_id()==1)?'製品一覧':'Products' ?></a>
			</li>
		</ol>
		<a href="<?php bloginfo('url') ?>/products/thermal" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_01.jpg" alt="包装機用サーマル プリンター" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'産業用包装機対応ダイレクトサーマル プリンター':'Industrial Direct Thermal Printer' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'産業用包装機対応ダイレクトサーマルプリンターは発売以来、産業用のプリンターとしてコンパクトなサイズとメンテナンスの手軽さから食品をはじめ医薬、化学、工業などの業界での多くの工場等でご愛用頂いております。':'Since its release, thermal printers for packaging machines have been used in many factories such as food, pharmaceuticals, chemicals, industrial, etc. due to their compact size and easy maintenance.' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/desktop-thermal" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_02.jpg" alt="卓上型サーマル プリンター" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'産業用卓上型ダイレクトサーマル プリンター':'Desktop Direct Thermal Printer' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'産業用卓上型ダイレクトサーマルプリンターは発売以来、空袋に直接印字する産業用ダイレクトサーマルプリンターとして設置とメンテナンスの手軽さから食品をはじめ医薬、化学、工業などの業界での多くの工場等でご愛用頂いております。':'Since its release, desktop direct thermal printers have been used in many factories such as food, pharmaceutical, chemical, industrial and etc. due to easy installation and maintenance as an industrial direct thermal printer that prints directly on empty packaging.' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/labeler" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_03.jpg" alt="産業用オート ラベラー" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'産業用オート ラベラー':'Industrial Auto Labeler' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'様々な対象に対し、自動でラベルを貼り付けます。簡易型、卓上型やライン設置型など、用途に応じたバリエーションがございます。':'Automatically apply labels to various objects. We have various kinds of machines according to the application, such as simple type, desktop type and line installation type.' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/stamper" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_04.jpg" alt="チェックスタンパー" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'チェックスタンパー':'Check Stamper' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'押印したい箇所に自動で押印を行います。卵パックに入っているサイズや日付が表記されている比較的小さなラベルからA3サイズのような大きなサイズの用紙まで幅広く押印業務を効率化します。<br>数量が増え手押しには限界を感じた方、常に安定したきれいな押印がしたい方におすすめです。':'Stamp automatically on the targeted part. We improve the efficiency of stamping widely from relatively small labels that indicate the size and date in the egg pack to large-size paper such as A3 size.<br>It is recommended for those who exceed the capacity and want to have a stable and secure stamping.' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/feeder" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_05.jpg" alt="フィーダー/スタッカー" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'フィーダー/スタッカー':'Feeder / Stacker' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'ダイレクトサーマルプリンターやオートラベラーと連結し、軟包装の空袋の供給とストックを自動で行います。用途に合わせた様々なバリエーションをご用意しています。':'Automatically feed empty soft packaging by connecting with direct thermal printer or auto labeler.<br>We offer various types suitable for your application.' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/others" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_06.jpg" alt="その他製品" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'その他製品':'Other Products' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'その他シンメイが取り扱っている製品です。<br>鶏卵中身有無検査装置、ボトルラベラー、チケットプリンター':'Shinmei\'s other products: chicken egg content inspection device, bottle labeler, and ticket printer' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
		<a href="<?php bloginfo('url') ?>/products/supplies" class="products-item">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/products/products_07.jpg" alt="消耗品" width="200" />
			<div class="products-content">
				<div class="deco-title">
					<h2><?php echo (get_current_blog_id()==1)?'消耗品':'Consumables' ?></h2>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'ラベル、インク、サーマルリボンなどの各種消耗品の取り扱いはこちらです。':'Various consumables such as labels, inks, and thermal ribbons.' ?></p>
				<div class="products-button">
					<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
				</div>
			</div>
		</a>
	</div>
</main>

<?php get_footer(); ?>