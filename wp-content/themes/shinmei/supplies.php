<?php /* Template Name: supplies */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'消耗品　サーマルリボン・シール＆ラベル・インク':'Consumables: Thermal ribbon, Seal&Label, Ink' ?></h1>
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
			<li>
				<a href="<?php bloginfo('url') ?>/products/supplies"><?php echo (get_current_blog_id()==1)?'消耗品　サーマルリボン・シール＆ラベル・インク':'Consumables: Thermal ribbon, Seal&Label, Ink' ?></a>
			</li>
		</ol>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'サーマルリボン':'Thermal Ribbon' ?></h2>
		</div>
		<div class="image-and-text">
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/products/supplies_01.jpg" alt="サーマルリボン" width="200" />
			</div>
			<div class="text-part">
				<p>
					<span><?php echo (get_current_blog_id()==1)?'純正リボンは、フィルム以外にもラベルや紙類に適した印字品質の高いリボンから耐擦過性、耐熱性（ボイルやレトルト）、耐冷凍性、耐油性に優れたリボン、カラーリボンまで様々なリボンを取り揃えています。印字や表示は、リボン品質、包装材の材質、後処理、その後の環境にも左右されます。状況や環境にあったリボンの選択と事前の充分なテストはとても大切です。':'We have a wide range of genuine ribbons as well as films. We have high print quality ribbons suitable for labels and papers, ribbons with excellent abrasion resistance, heat resistance (boil and retort), refrigeration resistance, oil resistance, and color ribbons.' ?></span>
					<a href="<?php bloginfo('url') ?>/column/266" class="link-text"><?php echo (get_current_blog_id()==1)?'リボンの選択についてはサーマルリボンの種類をご参考にしてください。':'' ?></a>
				</p>
			</div>
		</div>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'シール＆ラベル UL-USA認定':'Seal and Label (UL-USA certified)' ?></h2>
		</div>
		<div class="image-and-text">
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/products/supplies_02.jpg" alt="シール＆ラベル UL-USA認定" width="200" />
			</div>
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'シール＆ラベルの企画・制作':'Planning and production of stickers & labels' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'鶏卵ラベルやその他のシール・ラベルは自社松本工場で生産し、迅速・安価なご提供が可能です。お客様が安心してご使用いただけるラベル製造を行っています。（UL認定工場資格取得済み）デザインについては弊社提携企業の複数のデザイナーが担当し、お客様が満足いただけるデザインをご提供いたします。':'Chicken egg labels and other stickers / labels are manufactured at our own Matsumoto plant, and can be provided quickly and inexpensively. We manufacture labels that customers can use with confidence. (UL certified factory certified)<br>Designers from our partner companies handle the design, and provide the ones that satisfy our customers.' ?></p>
				<ul>
					<li><?php echo (get_current_blog_id()==1)?'鶏卵パック用ラベル・インナーラベル':'Label and inner label for chicken egg pack' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'シークレットシール・ワンポイントシール':'Secret seal / One point seal' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'POPシール・ファームタック':'POP seal / farm tack' ?></li>
					<li <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>品名シール・販促シール</li>
					<li><?php echo (get_current_blog_id()==1)?'表示シール・警告シール':'Display seal / Warning seal' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'豆シール・プリンター用ロール紙':'Roll paper for printer' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'シルク印刷銘板・銘板シール':'Silk printing nameplate / nameplate seal' ?></li>
				</ul>
			</div>
		</div>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'シルク印刷銘板・銘板シール':'Silk printing nameplate / nameplate seal' ?></h2>
		</div>
		<div class="image-and-text">
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/products/supplies_03.jpg" alt="インク" width="200" />
			</div>
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'純正インクは、捺印対象物であるラベルや紙に対して捺印に適した不揮発溶剤性インキをはじめとして用途や目的によって速乾性があるインキや優れた密着性、耐水性、耐光性を発揮するものまで多種のインキを取り揃えています。色は黒・赤・青が良く使われます。':'We have many types of genuine ink, including non-volatile solvent ink, quick-drying ink depending on the application and purpose, excellent adhesion, water resistance and light resistance.<br>Black, red and blue are often used.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'シンメイ製チェックスタンパーには純正のインクをお使いください。':'Please use genuine ink for Shinmei\'s check stamper.' ?></p>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>