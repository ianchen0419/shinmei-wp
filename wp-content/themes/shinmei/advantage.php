<?php /* Template Name: advantage */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'シンメイの強み':'Shinmei\'s Advantages' ?></h1>
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
				<a href="<?php bloginfo('url') ?>/advantage"><?php echo (get_current_blog_id()==1)?'シンメイの強み':'Shinmei\'s Advantages' ?></a>
			</li>
		</ol>

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

		<div class="section-title strong">
			<h2>
				<?php echo (get_current_blog_id()==1)?'<span>不可能を可能にする</span>':'<strong>High techinical skills: </strong>' ?>
				<?php echo (get_current_blog_id()==1)?'<strong>技術力</strong>':'<span>make impossible to possible</span>' ?>
			</h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'開発にあたってのポリシーの一つに独創性があります。従来その市場における既存品の機構を真似することはできる限り排除し、シンプルとコンパクトを追求した新しい発想を取り入れることを常に意識しています。いまある技術力とチャレンジ精神。それが市場から多く受け入れられてきた理由です。':'One of the development policies is originality. We don\'t imitate the system of conventional product, but are always concious of adopting new ideas in pursuit of simplicity and compactness.<br>The reason we have been widely accepted from the market due to our technological strength and the spirit of challenge.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'シンメイだけのフィーダー技術':'Our unique feeder technology' ?></h3>
		</div>
		<div class="image-and-text">
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'実は、成体された袋を一枚一枚分離する機構、ここが一番難しいのです。':'The most difficult mechanism is to separate bags one by one.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'世間では、規格品と言われる袋がメーカーだけでも多くあり、また材質・厚み・サイズなど様々な袋が存在します。また規格外もあり、袋の種類は益々増えてきています。':'There are many types of bag that are said to be standard products, and there are various bags which are different from material, thickness and size.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'そんな中、シンメイではこれだけの多数ある袋を一つの供給部でカバーしようとは無理だと考え、今現在5種ある供給部の中から、お客様の袋にあった供給部をご提案します。選ばれた供給部も、もちろん袋の材質に応じた調整を施しお客様へお渡しします。':'We know it\'s not possible to cover many types of bag with one supply part. Therefore, we propose the best one from 5 supply parts. We make an adjustment to supply part before we hand to our customers.' ?></p>
			</div>
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/advantage1.jpg" alt="シンメイだけのフィーダー技術" width="200" />
			</div>
		</div>

		<div class="section-title strong">
			<h2>
				<?php echo (get_current_blog_id()==1)?'<span>お客様のニーズをすぐに具現化する</span>':'<strong>Application performance: </strong>' ?>
				<?php echo (get_current_blog_id()==1)?'<strong>対応力</strong>':'<span>emblody customers\' need</span>' ?>
			</h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'お客様からのご要望をいただくと、速やかに製品化の検証を行ないます。その結果、市場性・機能性などの具体的な条件が整えばすぐに開発に取りかかります。お客様のお手元に届くまでの時間をできる限り短縮することにより、他社が商品化する時には市場に確固たる実績を確立し、他の追随を許しません。':'We verify the commercialization right after we receive requests from customer. Therefore, we start working on the development immediately after we make sure the specific conditions such as marketability and functionality. Because of this system, we are able to deliver the product to our customers before other companies.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'お客様の要望から生まれる新しい製品':'New products from customer requests' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'いまご提供させて頂いている機械は決して完成形ではありません。お客様のニーズも時代とともに進化していくきますが、その現場の要望を素早く受け入れ、対応し、それが業界共通の要望だと判断したら、次の納品機から即対応された機械を納めていく。それを随時行ない続けてきました。そのスピーティーな対応に、業界最大手の会社様からは「シンメイさんは本当にすぐに対応してもらえる」とお褒めの言葉をいただきました。その事がそれぞれの業界から選んで頂いている大きな理由です。':'The machine we are currently offering is by no means complete.<br>Since customers\' need change with the times, we promptly accept the request.  If we think it is a common request in the industry, we add the feature and release the product.  Because of our speedy response, one of the leading companies praised us saying "Shinmei responds to customers request immediately."<br>This is the biggest reason why many companies choose us.' ?></p>

		<div class="section-title strong">
			<h2>
				<?php echo (get_current_blog_id()==1)?'<span>現場に即したシステムを組み合わせられる</span>':'<strong>Ability to make proposals: </strong>' ?>
				<?php echo (get_current_blog_id()==1)?'<strong>提案力</strong>':'<span>combine systems based on the site</span>' ?>
			</h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'当社は、各種ダイレクトサーマルプリンターやラベラーを中心に提案させていただいています。弊社の軟包装材に特化した各種印字・表示機械は、組み合わせ次第でいろいろなカスタムメードが可能となります。無論、何もかも可能という訳ではありませんが、親身になった対応で皆様のニーズに応えていきます。':'We mainly sell direct thermal printers and labelers.<br>Our printing and display machines specialized for soft packaging materials can be customized in various ways depending on the combination. We meet the needs of our customers.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'必要な機能やスペースに応える様々な製品':'Various products that meet the required functions and space' ?></h3>
		</div>
		<div class="image-and-text reverse">
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'当社の卓上型機は、フィーダー・プリンター・ラベラー・スタッカーでユニット毎に分かれていて、１本もしくは２本のケーブルをつなぐだけといったシンプルな構造になっています。貴社の用途に合致した組み合わせをご提案します。':'Our desktop machines are divided into units by feeders, printers, labelers and stackers, and have a simple structure such as connecting only one or two cables. We propose combinations that match your application.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'印字・ラベル貼りの事でお困りのことがありましたら、ご相談ください。':'Please contact us if you have any problems with printing / labeling.' ?></p>
			</div>
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/solution/advantage2.jpg" alt="必要な機能やスペースに応える様々な製品" width="200" />
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>