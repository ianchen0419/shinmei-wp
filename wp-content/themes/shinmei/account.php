<?php /* Template Name: account */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'【金融機関・経理部門様用】<br>手形押印システム　チェック スタンパー':'[For Financial and Accounting Department]<br>Hand stamping system and Check Stamper' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution"><?php echo (get_current_blog_id()==1)?'業種別ソリューション':'Solutions' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/solution/account"><?php echo (get_current_blog_id()==1)?'【金融機関・経理部門様用】手形押印システム　チェック スタンパー':'[For Financial and Accounting Department] Hand stamping system and Check Stamper' ?></a>
			</li>
		</ol>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'手形押印システム導入で、ルーチンで発生する単純作業を自動化し、生産性をアップ':'The introduction of a bill sealing system automates simple tasks that occur in the routine and improves productivity.' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'昨今、手形の電子化で押印作業は少なくはなっていますが…、全くゼロにはなりません。<br>数枚程度なら手押し作業で良いかもしれませんが、増えれば増えるほど気が遠くなる作業です。<br>そんな貴社に、シンメイからひとつのご提案です。':'The number of manual imprinting work has decreased due to the digitization of bills, but it doesn\'t become zero.<br>It may be no problem to do by hand if it\'s only a few sheets, but it becomes a huge task as it increases.<br>We have one suggestion.' ?></p>
		<p><?php echo (get_current_blog_id()==1)?'各企業様での経理部門で、毎月締め日に約束手形や小切手を発行するにあたり、捺印事務作業は重要な仕事のひとつです。また、関連作業として回収手形を取立、または割引に出す際に同じく手形裏書に捺印事務作業が必要です。シンメイの「チェックスタンパー」は、これらの作業を代行し、効率的に完了させます。':'The thumbprint work when issuing promissory notes and the checks at the closing date every month in the accounting department are important tasks. In addition, it is also necessary to carry out clerical work on the bill endorsement.<br>You\'ll complete these tasks efficiently with Shinmei\'s "Check Stamper."' ?></p>
		<div class="wrap-image-area">
			<figure>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/account_01.png" alt="手作業からスタンパーへ" />
				<figcaption><?php echo (get_current_blog_id()==1)?'手作業からスタンパーへ':'Manual to Stamper' ?></figcaption>
			</figure>
			<figure>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/account_02.png" alt="手形押印システム" />
			</figure>
		</div>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'手形裏書・手形振出の押印に対応':'Corresponds to imprinting of bills endorsement / bill exit' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'よりコンパクトに、より安価に！<br>手形押印対応機は、以下の３タイプがあります。':'More compact, less expensive!<br>There are three types of hand-stamping-compatible machines as follows.' ?></p>
		<div class="image-and-text">
			<div class="text-part">
				<table class="type-table" width="100%">
					<thead>
						<tr>
							<th width="30%"><?php echo (get_current_blog_id()==1)?'型式':'Model' ?></th>
							<th width="70%"><?php echo (get_current_blog_id()==1)?'用途':'Use' ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>CS-858 Ⅱ</td>
							<td><?php echo (get_current_blog_id()==1)?'手形裏書専用':'Bill endorsement only' ?></td>
						</tr>
						<tr>
							<td>CS-350B Ⅱ</td>
							<td><?php echo (get_current_blog_id()==1)?'手形振出・裏書兼用':'Draft billing and endorsement' ?></td>
						</tr>
						<tr>
							<td>CS-SAPⅡ</td>
							<td><?php echo (get_current_blog_id()==1)?'手形裏書専用（押印位置自動読取機能付き）、<br>サーマルプリンター搭載で版が不要':'Bill endorsement only (with seal position automatic reading function)<br>A direct thermal printer is installed and a version is unnecessary.' ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/account_03.png" alt="チェックスタンパー" width="200" />
			</div>
		</div>
		<div class="link-area">
			<a href="<?php bloginfo('url') ?>/products/stamper" class="link-item">
				<i class="fa fa-caret-right"></i>
				<span><?php echo (get_current_blog_id()==1)?'チェックスタンパー':'Check Stamper' ?></span>
			</a>
		</div>
	</div>
</main>

<?php get_footer(); ?>