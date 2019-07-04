<?php get_header();?>

<div id="visual">
	<div class="slider-area">
		<div id="sliderWrapper">
			<div class="slider-item">
				<div class="slider-image image-1"></div>
				<a href="column/softpackaging" class="slider-text">
					<div class="catch-copy"><?php echo (get_current_blog_id()==1)?'軟包装への直接印字や表示、印刷の事ならシンメイへ':'Direct print and display on soft packaging' ?></div>
					<p><?php echo (get_current_blog_id()==1)?'ダイレクトサーマルプリンター・オートラベラー・チェックスタンパーのシンメイ':'Shinmei\'s industrial direct thermal printer, auto labeler, and check stamper' ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-2"></div>
				<a href="products" class="slider-text">
					<div class="catch-copy"><?php echo (get_current_blog_id()==1)?'世界に羽ばたく卓越した技術で、シンメイは新たなステージへ':'Step up to a new stage with our outstanding technology.' ?></div>
					<p><?php echo (get_current_blog_id()==1)?'現場に即したシステムを組み合わせ様々なニーズに対応':'Combination of on-site systems to meet the needs.' ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-3"></div>
				<a href="solution" class="slider-text">
					<div class="catch-copy"><?php echo (get_current_blog_id()==1)?'今後益々求められる社会や企業の様々な課題への対応':'Responding to various social and corporate issues' ?></div>
					<p><?php echo (get_current_blog_id()==1)?'製品ロスの削減、海外進出、生産の効率化、多品種少量生産等への対応':'Reduce product loss, expand overseas business, improve production efficiency, respond to high-mix low-volume production.' ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-4"></div>
				<a href="column#qrcode" class="slider-text">
					<div class="catch-copy"><?php echo (get_current_blog_id()==1)?'今後益々必要とされる技術にも積極的に対応':'Actively respond to technologies that are increasingly required.' ?></div>
					<p><?php echo (get_current_blog_id()==1)?'QRコード、トレサビリティ等への対応':'Support QR code and traceability.' ?></p>
				</a>
			</div>
			<div class="slider-item">
				<div class="slider-image image-1"></div>
				<a href="softpackaging" class="slider-text">
					<div class="catch-copy"><?php echo (get_current_blog_id()==1)?'軟包装への直接印字や表示、印刷の事ならシンメイへ':'Direct print and display on soft packaging' ?></div>
					<p><?php echo (get_current_blog_id()==1)?'ダイレクトサーマルプリンター・オートラベラー・チェックスタンパーのシンメイ':'Shinmei\'s industrial direct thermal printer, auto labeler, and check stamper' ?></p>
				</a>
			</div>
		</div>
		<div class="slider-buttons">
			<div class="dots">
				<button class="dot active" id="dot1"></button>
				<button class="dot" id="dot2"></button>
				<button class="dot" id="dot3"></button>
				<button class="dot" id="dot4"></button>
			</div>
		</div>
	</div>
</div>
<main id="contact" class="font-bold">
	<section>
		<div class="wrapper-size">
			<div class="home-title">
				<div class="en">Products</div>
				<h2>製品</h2>
			</div>
			<div class="product-area">
				<a href="<?php bloginfo('url') ?>/products/thermal">
					<figure class="product-block">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/thermal.jpg" alt="産業用包装機対応ダイレクトサーマルプリンター" width="90%" />
						<figcaption>
							<h4><?php echo (get_current_blog_id()==1)?'産業用包装機対応ダイレクトサーマルプリンター':'Industrial Direct Thermal Printer for Packaging Machine' ?></h4>
							<p><?php echo (get_current_blog_id()==1)?'各種包装機にジャストインサイズ。':'Just size for various packing machines' ?></p>
						</figcaption>
						<div class="detail-button">
							<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
						</div>
					</figure>
				</a>
				<a href="<?php bloginfo('url') ?>/products/desktop-thermal">
					<figure class="product-block">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/desktop-thermal.jpg" alt="産業用卓上型ダイレクトサーマルプリンター" width="90%" />
						<figcaption>
							<h4><?php echo (get_current_blog_id()==1)?'産業用卓上型ダイレクトサーマルプリンター':'Industrial Desktop-Type Direct Thermal Printer' ?></h4>
							<p><?php echo (get_current_blog_id()==1)?'効率的な空袋印刷を可能に。':'Enables efficient empty bag printing.' ?></p>
						</figcaption>
						<div class="detail-button">
							<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
						</div>
					</figure>
				</a>
				<a href="<?php bloginfo('url') ?>/products/labeler">
					<figure class="product-block">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/labeler.jpg" alt="産業用オートラベラー" width="90%" />
						<figcaption>
							<h4><?php echo (get_current_blog_id()==1)?'産業用オートラベラー':'Industrial Auto Labeler' ?></h4>
							<p><?php echo (get_current_blog_id()==1)?'直感的な操作で作業効率大幅アップ。':'Greatly improves work efficiency by intuitive operation.' ?></p>
						</figcaption>
						<div class="detail-button">
							<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
						</div>
					</figure>
				</a>
				<a href="<?php bloginfo('url') ?>/products/stamper">
					<figure class="product-block">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/stamper.jpg" alt="チェックスタンパー" width="90%" />
						<figcaption>
							<h4><?php echo (get_current_blog_id()==1)?'チェックスタンパー':'Check Stamper' ?></h4>
							<p><?php echo (get_current_blog_id()==1)?'手作業の煩わしさをぐっと解消。':'Eliminate the trouble of manual work.' ?></p>
						</figcaption>
						<div class="detail-button">
							<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
						</div>
					</figure>
				</a>
				<a href="<?php bloginfo('url') ?>/products/feeder">
					<figure class="product-block">
						<img src="<?php bloginfo('template_directory') ?>/inc/img/top/feeder.jpg" alt="フィーダー・スタッカー" width="90%" />
						<figcaption>
							<h4><?php echo (get_current_blog_id()==1)?'フィーダー・スタッカー':'Feeder / Stacker' ?></h4>
							<p><?php echo (get_current_blog_id()==1)?'軟包装の供給をスムーズにサポート。':'Support for soft packaging supply smoothly.' ?></p>
						</figcaption>
						<div class="detail-button">
							<button><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></button>
						</div>
					</figure>
				</a>
			</div>
		</div>
	</section>
	<section class="slide-up gray">
		<div class="wrapper-size">
			<div class="home-title">
				<div class="en">Solutions</div>
				<h2>業種別ソリューション</h2>
			</div>
			<div class="solution-area">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/top/solutions.jpg" alt="業種別ソリューション" width="400" />
				<div class="solution-text">
					<p><?php echo (get_current_blog_id()==1)?'導入実績4,000社以上。<br>正確、安心、使いやすい製品は幅広い業種で活用いただいています。':'More than 4,000 companies have installed our products.<br>Because it\'s accurate, secure, and easy to use, they are used in a wide range of industries.' ?></p>
					<div class="solution-links">
						<a href="solution/thermal"><?php echo (get_current_blog_id()==1)?'全業種向け':'All Industries' ?></a>
						<a href="solution/food"><?php echo (get_current_blog_id()==1)?'包装機メーカー向け':'Packaging Machine Manufacturers' ?></a>
						<a href="solution/wrap"><?php echo (get_current_blog_id()==1)?'金融・経理部門向け':'Financial and Accounting Department' ?></a>
						<a href="solution/egg"><?php echo (get_current_blog_id()==1)?'食品加工メーカー向け':'Food Processing Manufacturers' ?></a>
						<a href="solution/account"><?php echo (get_current_blog_id()==1)?'鶏卵GPセンター向け':'Chicken Egg GP Center' ?></a>
						<a href="solution/pamphlet"><?php echo (get_current_blog_id()==1)?'旅行業界・流通百貨店向け':'Travel and Department Stores' ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="slide-up">
		<div class="wrapper-size">
			<div class="home-title">
				<div class="en">Information</div>
				<h2>インフォメーション</h2>
			</div>
			<div class="infomation-area">
				<a class="infomation-block" href="information#printing">
					<h4><?php echo (get_current_blog_id()==1)?'包装印字':'Package printing' ?></h4>
					<i class="fa fa-caret-right fafw fa-2x"></i>
				</a>
				<a class="infomation-block" href="information#industry">
					<h4><?php echo (get_current_blog_id()==1)?'農林漁業の<br>「6次産業化」':'"Sixth industrialization" of agriculture, forestry and fisheries' ?></h4>
					<i class="fa fa-caret-right fafw fa-2x"></i>
				</a>
				<a class="infomation-block" href="information#merit">
					<h4><?php echo (get_current_blog_id()==1)?'リース契約での<br>導入メリット':'Advantages of a lease agreement' ?></h4>
					<i class="fa fa-caret-right fafw fa-2x"></i>
				</a>
				<a class="infomation-block" href="information#food">
					<h4><?php echo (get_current_blog_id()==1)?'食品表示法切り替え<br>（2020年4月1日〜）':'Change of food labeling method (April 1, 2020-)' ?></h4>
					<i class="fa fa-caret-right fafw fa-2x"></i>
				</a>
				<a class="infomation-block" href="information#origin">
					<h4><?php echo (get_current_blog_id()==1)?'加工食品の原料原産地<br>表示（2022年4月1日〜）':'Raw material indication of processed food (April 1, 2022)' ?></h4>
					<i class="fa fa-caret-right fafw fa-2x"></i>
				</a>
				<a class="infomation-block" href="information#export">
					<h4><?php echo (get_current_blog_id()==1)?'「GFP」農林水産物<br>食品輸出プロジェクト':'"GFP" Agriculture, Forestry and Fisheries Food Export Project' ?></h4>
					<i class="fa fa-caret-right fafw fa-2x"></i>
				</a>
			</div>
		</div>
	</section>
	<section class="slide-up gray">
		<div class="wrapper-size">
			<div class="home-title">
				<div class="en">News</div>
				<h2>ニュース</h2>
			</div>
			<?php
				$args = array(
				'posts_per_page' => 6 // 表示件数の指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
			?>
			<div class="news-area">
				<div class="news-item">
					<div class="news-component">
						<div class="date"><?php the_time('Y.m.d') ?></div>
						<div class="tag"><?php echo strip_tags(get_the_tag_list()); ?></div>
					</div>
					<a href="<?php echo get_the_content() ? the_permalink(): "javascript:;"; ?>">
						<?php the_title(); ?>
					</a>
				</div>
			</div>
			<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
			<div class="all-news">
				<a href="news-all">
					<span><?php echo (get_current_blog_id()==1)?'過去のニュース一覧':'Past news' ?></span>
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>