<?php /* Template Name: solution */ ?>
<?php get_header();?>

<div id="visual" class="image-title">
	<picture> 
		<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/solution/solution_mobile.jpg" /> 
		<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution.jpg" alt="業種別ソリューション" width="100%" /> 
	</picture>
	<h1><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solution' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution"><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solution' ?></a>
			</li>
		</ol>
		<p><?php echo (get_current_blog_id()==1)?'今後益々求められる社会や企業の様々な課題として製品や包材ロスの大幅な削減、海外を含めた地球規模での生産システムの構築、ロボットの導入を含めた大胆な生産性のアップ、多品種少量生産や変品種変量生産といった多様なこれまでとは違ったアプローチからの生産システムの構築が求められています。':'Substantial reduction of product and packaging loss, construction of global scale production system including overseas, productivity improvement including introduction of robot, high-mix low-volume production and variable production have become more important. It is needed to build a production system based on a different approach.' ?></p>
		<div class="deco-title line">
			<h2><?php echo (get_current_blog_id()==1)?'シンメイの強み':'Shinmei\'s Advantages' ?></h2>
		</div>
		<div class="advantage-area">
			<div class="advantage-circle">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/advantage-icon1.png" width="80" alt="技術力" />
				<h4><?php echo (get_current_blog_id()==1)?'技術力':'Technological edge' ?></h4>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>Technological edge</p>
			</div>
			<div class="advantage-circle">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/advantage-icon2.png" width="80" alt="対応力" />
				<h4><?php echo (get_current_blog_id()==1)?'対応力':'Excellent support' ?></h4>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>Excellent support</p>
			</div>
			<div class="advantage-circle">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/advantage-icon3.png" width="80" alt="提案力" />
				<h4><?php echo (get_current_blog_id()==1)?'提案力':'Innovative ideas' ?></h4>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>Innovative ideas</p>
			</div>
		</div>
		<ul class="advantage-list">
			<li><?php echo (get_current_blog_id()==1)?'①不可能を可能にする「技術力」':'①High techinical skills: make impossible to possible' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'②お客様のニーズを具現化する「対応力」':'②Application performance: emblody customers\' need' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'③現場に即したシステムを組み合わせられる「提案力」':'③Ability to make proposals: combine systems based on the site' ?></li>
		</ul>
		<div class="advantage-button">
			<a href="<?php bloginfo('url') ?>/advantage"><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></a>
		</div>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution1.jpg" alt="ラベルからサーマルプリントへのリプレイスソリューション" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title"><?php echo (get_current_blog_id()==1)?'【全業種様用】<br>ラベルからサーマルプリントへのリプレイスソリューション':'[All Industries] <br>Replacement solution from label to thermal print' ?></h3>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'すでにラベラーをご利用のお客様、これから導入をご検討されているお客様に、軟包装の空袋に直接印刷をするダイレクトサーマルプリンターをご紹介いたします。':'We introduce direct thermal printers that print directly on empty soft packaging bags to those who already use labelers and consider the future installation.' ?></p>
				<ul>
					<li><?php echo (get_current_blog_id()==1)?'ラベルが不要でランニングコストを削減':'Reduce the running costs with no need for labels' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'必要な枚数をその場で印刷':'Print the required number on the spot' ?></li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/thermal"><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></a>
				</div>
			</div>
		</figure>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution2.jpg" alt="サーマルプリンター・ラベリングソリューション" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title"><?php echo (get_current_blog_id()==1)?'【食品加工メーカー様用】<br>ダイレクトサーマルプリンター・ラベリングソリューション':'[Food Processing Manufacturers]<br>Thermal Printer · Labeling Solution' ?></h3>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'軟包装へ印字をするダイレクトサーマルプリンターと食品加工の相性はとても良いです。日付などの可変データも、システムで自動設定してプリントできます。':'It has a high compatibility between food processing and direct thermal printer which print on soft packaging. It enables to set automatically and print variable data such as dates.' ?></p>
				<ul>
					<li><?php echo (get_current_blog_id()==1)?'印字する日付の自動設定が可能':'Make it possible to set the dates automatically' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'ラベルが必要なら、ラベル貼りを自動化':'Automatic labeling system' ?></li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/food"><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></a>
				</div>
			</div>
		</figure>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution3.jpg" alt="サーマルプリンター・ラベリングソリューション" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title"><?php echo (get_current_blog_id()==1)?'【包装機メーカー様用】<br>ダイレクトサーマルプリンター導入ソリューション':'[Packaging Machine Manufacturers] <br>Thermal printer installation solution' ?></h3>
				</div>
				<p><?php echo (get_current_blog_id()==1)?'包装機のラインにダイレクトサーマルプリンターを設置しませんか。コンパクトサイズなので、ラインの様々な工程に設置が可能です。':'Would you like to install a thermal printer on the packaging machine line? Due to its compact size, it can be installed in various processes of the line.' ?></p>
				<ul>
					<li><?php echo (get_current_blog_id()==1)?'貴社製品のオプションに':'As an option of your product' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'導入するお客様の利便性もアップ':'Improve the convenience of customer' ?></li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/wrap"><?php echo (get_current_blog_id()==1)?'詳細':'Details' ?></a>
				</div>
			</div>
		</figure>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution4.jpg" alt="チェックプリンター・ラベリングソリューション" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title">【鶏卵GPセンター様用】<br>チェックプリンター・ラベリングソリューション</h3>
				</div>
				<p>チェックスタンパーをはじめ、チェクプリンター、ラベラーを多くのGPセンター様に採用いただいています。ラベルだけにとどまらない、現場の作業を補助する多数のチェック機能もご提供しています。</p>
				<ul>
					<li>ラベリングとチェックを同時に実現</li>
					<li>負担の少ない簡単オペレーション</li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/egg">詳細</a>
				</div>
			</div>
		</figure>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution5.jpg" alt="肥料袋専用プリンター" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title">【肥料堆肥メーカー様用】肥料袋専用プリンター</h3>
				</div>
				<p>無地の袋に必要最低限の肥料名と成分説明する保証票を印字。</p>
				<ul>
					<li>小ロット商品向け</li>
					<li>1枚10円安(20Kg当たり)でロスを解消</li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/fertilizer">詳細</a>
				</div>
			</div>
		</figure>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution6.jpg" alt="手形押印システム" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title">【金融・経理部門様用】手形押印システム</h3>
				</div>
				<p>ルーチンの単純作業を自動化し、社内の生産性を向上。効率的かつ、一定のクオリティで作業を進めることができます。</p>
				<ul>
					<li>単純な押印作業を自動化</li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/account">詳細</a>
				</div>
			</div>
		</figure>
		<figure class="solutions">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/solution7.jpg" alt="押印システム" width="300" />
			<div class="solutions-content">
				<div>
					<h3 class="solutions-title">【旅行業界・流通百貨店様用】押印システム</h3>
				</div>
				<p>様々な押印作業に対応し、自動化。厚みのある冊子へのスタンプも可能で、生産性が大幅に向上します。</p>
				<ul>
					<li>単純な押印作業の自動化</li>
				</ul>
				<div class="solutions-button">
					<a href="<?php bloginfo('url') ?>/solution/pamphlet">詳細</a>
				</div>
			</div>
		</figure>
	</div>
</main>
<?php get_footer(); ?>