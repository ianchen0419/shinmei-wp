<?php /* Template Name: pamphlet */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'【旅行業界・流通百貨店様用】<br>押印システム　チェックスタンパー':'[For Travel and Department Stores]<br>Imprint System and Check Stamper' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>/index"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution"><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solutions' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution/pamphlet"><?php echo (get_current_blog_id()==1)?'【旅行業界・流通百貨店様用】押印システム　チェックスタンパー':'[For Travel and Department Stores] Imprint System and Check Stamper' ?></a>
			</li>
		</ol>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'チェックスタンパー導入で、ルーチンで発生する単純作業を自動化し、生産性をアップ':'Introduction of check stamper automates routine simple tasks and improves productivity.' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'日常発生するスタンプを押す作業。<br>数枚程度なら手押し作業で良いかもしれませんが、増えれば増えるほど気が遠くなる作業です。<br>例えば、Ａ４サイズの旅行パンフレット類や各種金券類（商品券など）への無効印、受取りを証明する受領印、書類へ会社印、担当者印など様々な枚葉書類に押印するといった用途で使用されています。<br>とにかく数が増えてきたなと感じたら自動スタンパーです。':'About the stamping work;<br>It may be no problem to do by hand if it\'s only a few sheets, but it becomes a huge task as it increases.<br>For example, it is necessary to seal various sheet-fed documents such as A4 size travel brochures, invalid certificates on various kinds of vouchers (such as gift certificates), and receipts certifying receipt.<br>Automatic stamper improves work efficiency.' ?></p>
		<p><?php echo (get_current_blog_id()==1)?'パンフレットスタンパーでは、ある程度厚み調整がラフにできるよう設計されていたり、その他枚葉スタンパーには、細かく厚み調整ができるように設計されていたりと工夫しています。<br>また押印作業ではなく、計数作業をしたいといった場合でも計数機仕様に変更することで対応可能です。※計数機仕様は、計数のみで押印はされません。':'The pamphlet stamper is designed to be able to roughly adjust the thickness to some extent, and other single-wafer stampers are designed to be able to finely adjust the thickness.<br>Moreover, you can easily change the function by changing the settings when you want to count the numbers of documents.<br>*Counter only works for counting numbers and not stamping.' ?></p>
		<div class="wrap-image-area">
			<figure>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/account_01.png" alt="手作業からスタンパーへ" />
				<figcaption><?php echo (get_current_blog_id()==1)?'手作業からスタンパーへ':'Manual to Stamper' ?></figcaption>
			</figure>
		</div>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'様々なサイズ、厚さの冊子に対応可能':'Applicable to booklets of various sizes and thickness' ?></h2>
		</div>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'A4サイズの1枚チラシから、最大6mm厚のパンフレットまで幅広く、用途にあった対応機が用意されています':'A wide range of A4 size leaflets to brochures up to 6 mm thick, compatible machines are available for your application.' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'以下の３タイプの対応が標準機としてあります。<br>これらに合わないサイズの紙に押印・計数したい…。<br>シンメイは、お客様の困った！に真剣に取り組みます。':'The following 3 types are available as standard machines.' ?></p>
		<table class="type-table" width="100%">
			<caption>チェックスタンパー</caption>
			<thead>
				<tr>
					<th width="30%"><?php echo (get_current_blog_id()==1)?'型式':'Model' ?></th>
					<th width="70%"><?php echo (get_current_blog_id()==1)?'用途':'Use' ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>CS-85ATⅡ</td>
					<td><?php echo (get_current_blog_id()==1)?'幅90mmまでの比較的小さい紙への用途':'Application to relatively small paper up to 90 mm in width' ?></td>
				</tr>
				<tr>
					<td>CS-220ATⅡ</td>
					<td><?php echo (get_current_blog_id()==1)?'A4サイズ縦流し程度までの用途':'Application to A4 size vertical sink level' ?></td>
				</tr>
				<tr>
					<td>CS-350ATⅡ</td>
					<td><?php echo (get_current_blog_id()==1)?'A4サイズ横流し程度までの用途':'Application to A4 size vertical sink level' ?></td>
				</tr>
			</tbody>
		</table>
		<div class="link-area">
			<a href="<?php bloginfo('url') ?>/products/stamper" class="link-item">
				<i class="fa fa-caret-right"></i>
				<span><?php echo (get_current_blog_id()==1)?'チェックスタンパー':'Check Stamper' ?></span>
			</a>
		</div>
	</div>
</main>

<?php get_footer(); ?>