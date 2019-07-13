<?php /* Template Name: idea */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'企業理念':'Values' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company"><?php echo (get_current_blog_id()==1)?'会社案内':'About Us' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/company/idea"><?php echo (get_current_blog_id()==1)?'企業理念':'Values' ?></a>
			</li>
		</ol>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'経営理念':'Management philosophy' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'モノづくりを通じ、「NEVER GIVE UP」の精神で、社員の幸福と世の中の発展に貢献する企業を目指す':'Aiming to become a company that contributes to the well-being of employees and the development of the world in the spirit of "NEVER GIVE UP" through manufacturing' ?></p>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'企業理念':'Corporate philosophy' ?></h2>
		</div>
		<ol>
			<li><?php echo (get_current_blog_id()==1)?'省人化、環境やコンプライアンスの問題など各業界における悩みを軽減させ、その業界の発展に寄与する':'Contribute to the development of the industry by reducing troubles in each industry such as labor saving, environmental and compliance issues.' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'新しい常識を創造し、「世の中を便利にする製品」をより多く開発し、市場に送り出す事を常に心がける':'Create new common sense, develop more products that make the world more convenient, and always try to bring them to market.' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'「自分に厳しく、人に優しく」を常に考え、相手の立場や気持ちにたって物事を考えられる人を育てる':'Always think about "Toughness to yourself, and kindness to others" and develop people who can think about things according to the other party\'s position and feelings.' ?></li>	
		</ol>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'開発理念':'Development philosophy' ?></h2>
		</div>
		<ol>
			<li><?php echo (get_current_blog_id()==1)?'他社に真似できないユニークな機器をすばやくかたちにすること':'Quickly form unique equipment that can not be imitated by other companies' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'類似の機種よりはるかに斬新で機能面でも優れていること':'Much more novel and functional than similar models' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'大手企業が市場に参加しづらいニッチなものであること':'Target niche market that is difficult for large companies to enter' ?></li>	
		</ol>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'挨拶':'Message from CEO' ?></h2>
		</div>
		<div class="image-and-text">
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'1964年（昭和39年）創業、株式会社リコー製複写機のアフターサービス事業を興したのが始まりです。':'Founded in 1964, Shinmei started from the after-sales service business of Ricoh Co., Ltd. copiers.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'当時は、株式会社リコー製品の下請け業務ということもあって、しばらくは順風漫帆に歩んでいました。しかし、いつまでも下請けですといつ仕事が無くなるかわかりません。そんな不透明な先行きに疑問を感じ、昭和56年から自社オリジナル製品の開発を進め、最初の製品は、主に「商品券・小切手・手形（有価証券）等の検印・計数機」を開発、多くの企業様の事務所にご採用して頂き、実績を積み重ねていきました。':'Since it was a subcontracting business of Ricoh Co., Ltd., we were stable.  However, we knew we were at the risk of losing work if we keep this subcontracting business. We were doubtful in such uncertain future, and started to develop our own original products from 1981. We released our first product "stamping and counting machine for such as gift certificate, checks, bills (marketable securities)" and many companies have installed at their work place.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'その後も一つの業種にこだわらないマーケティングにより、いま現在では様々な業種に向けてユニークな製品を市場に供給させて頂いています。':'Since then we have been marketing that does not stick to one industry. We now supply unique products to the market for various industries.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'今後において、市場のグローバル化が進む中、海外展開を進めています。':'As the market is becoming increasingly globalized, we are promoting overseas expansion.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'これからもメーカーとして、良い製品をより多く開発し、社会に貢献できる企業を目指すため、社員一丸となって取り組んでいきたいと思います。':'We develop more good products and aim to be a company that can contribute to society with a spirit of a manufacturer.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'今後のシンメイにご期待ください。':'' ?></p>
			</div>
			<div class="image-part">
				<figure>
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/president.jpg" alt="代表取締役 吉井貞夫" width="220" />
					<figcaption class="center-text"><?php echo (get_current_blog_id()==1)?'代表取締役 吉井貞夫':'CEO Sadao Yoshii' ?></figcaption>
				</figure>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>