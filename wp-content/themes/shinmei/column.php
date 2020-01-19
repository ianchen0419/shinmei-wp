<?php /* Template Name: column */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'印字の種類':'Print Type' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/information"><?php echo (get_current_blog_id()==1)?'インフォメーション':'Information' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('url') ?>/column"><?php echo (get_current_blog_id()==1)?'印字の種類':'Print Type' ?></a>
			</li>
		</ol>
		
		<?php if(get_current_blog_id()==1){ ?>
		<!-- 日本語 -->
		<p>
			<span>軟包装やラベル、ラベルシール、パッケージに日付・時刻の製造年月日や消費期限、製造ロット・シリアルナンバー、識別マークなどの印字、成分・アレルギー・ブランド名・ロゴ等・商標・マーケティング情報・容器材質識別などの表示、可変情報の印字そしてRFIDに対応したプリンティングシステムは、食品加工業界をはじめコンシューマ向けパッケージ品、医薬品、工業用品、流通業界等の業界や産業で実証済みです。軟包装への印字や表示についてお困りの事があれば、ご相談ください。また、軟包装の種類については</span>
			<a href="<?php bloginfo('url') ?>/column/softpackaging" class="link-text">こちら</a>
			<span>をご参考にご覧ください</span>
		</p>
		<?php }else{ ?>
		<!-- 英語 -->
		<p>
			<span>軟包装やラベル、ラベルシール、パッケージに日付・時刻の製造年月日や消費期限、製造ロット・シリアルナンバー、識別マークなどの印字、成分・アレルギー・ブランド名・ロゴ等・商標・マーケティング情報・容器材質識別などの表示、可変情報の印字そしてRFIDに対応したプリンティングシステムは、食品加工業界をはじめコンシューマ向けパッケージ品、医薬品、工業用品、流通業界等の業界や産業で実証済みです。軟包装への印字や表示についてお困りの事があれば、ご相談ください。また、軟包装の種類については</span>
			<a href="<?php bloginfo('url') ?>/column/softpackaging" class="link-text">こちら</a>
			<span>をご参考にご覧ください</span>
		</p>
		<?php } ?>
		

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'日付':'Date' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'サーマルプリンターは、熱を加えることで印字するプリンターのことで熱転写式プリンターともサーマルトランスファーオーバープリント（TTO）ともいい、ホットスタンプやローラーコーダーなどのアナログ印字の技術から進化をしてきましたが、始まりは1970年代後期頃より業務用のファックスのプリンターとして普及が始まりました。<br>また、産業用としてはランニングコストとオンデマンドでの印字や繊細さから製造年月日や賞味期限、消費期限等の日付やバーコード用の印字プリンターとして広く使われてきていますが、その内容そして印字の役割や用途は広がってきています。':'サーマルプリンターは、熱を加えることで印字するプリンターのことで熱転写式プリンターともサーマルトランスファーオーバープリント（TTO）ともいい、ホットスタンプやローラーコーダーなどのアナログ印字の技術から進化をしてきましたが、始まりは1970年代後期頃より業務用のファックスのプリンターとして普及が始まりました。<br>また、産業用としてはランニングコストとオンデマンドでの印字や繊細さから製造年月日や賞味期限、消費期限等の日付やバーコード用の印字プリンターとして広く使われてきていますが、その内容そして印字の役割や用途は広がってきています。' ?></p>
		<div class="section-title" id="printing">
			<h2><?php echo (get_current_blog_id()==1)?'バーコード':'Barcode' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'世界で100種以上といわれるバーコードがありますが、バーとスペースの組合せにより構成され、物に関連する数字や文字などのデータを格納したコードで、専用の機械で読み取ることができます。食品、梱包、医療、医薬品、電子機器、自動車、航空宇宙などの様々な産業で使われています。':'There are over 100 types of barcodes in the world.  They are composed of a combination of bars and spaces, and are codes that store data such as numbers and characters related to objects that can be read by a special machine.<br>It is used in various industries such as food, packaging, medicine, medicine, electronics, automobiles and aerospace.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'JANコード（13桁・短縮8桁）・EANコード':'JAN code (13 digits, reduced 8 digits), EAN code' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'バーコードとしてもっともよく見かけるタイプです。JANは商工会議所に申請して取得する流通用の商品コードを表示するバーコードです。EANは海外の流通用バーコードです。商品用の流通コードとして表示され、販売情報管理（POSシステム）、受発注管理、棚卸、在庫管理などのシステムに利用されています。':'This type is most commonly found. JAN is a bar code that displays the product code acquired by applying to the Chamber of Commerce.<br>EAN is a bar code for overseas distribution. It is displayed as a distribution code for products, and is used in systems such as sales information management (POS system), order management, inventory, and inventory management.' ?></p>
		<div class="deco-title">
			<h3>CODE39</h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'Code39は主に工業製品の製造番号ラベルやIEIAJの納品伝票などで使用されているバーコードです。数字のほかに英語大文字A~Zや一部の記号を利用できます。工業用バーコードとして多く使われています。JANやITFと違い数字以外の文字にも対応しています。':'Code 39 is a bar code mainly used for industrial product serial number labels and delivery documents for IEIAJ. In addition to the numbers, you can use English capital letters A ~ Z and some symbols. It is widely used as an industrial bar code. Unlike JAN and ITF, it supports non-numeric characters.' ?></p>
		<div class="deco-title">
			<h3>CODE128</h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'Code128は数字、英語大文字、英語小文字、記号などを表示できるバーコードです。ASCIIの128文字を全てバーコード化できるので、Code128と呼ばれています。他のバーコードに比べて寸法が小さくなる特徴があります。そのため、小型の電子機器のラベルなどによく使用されています。':'Code 128 is a barcode that can display numbers, upper case letters, lower case letters, symbols, etc.<br>It is called Code 128 because it can barcode all 128 ASCII characters, and becomes smaller dimensions compared to other barcodes. Therefore, it is often used for labels of small electronic devices.' ?></p>
		<div class="deco-title">
			<h3>NW-7</h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'NW-7は宅配便の送り状や図書館でよく使用されているバーコードです。海外ではCodabarというのが一般的ですが日本ではNW-7と呼ぶことが定着しています。1つのキャラクタが7本のエレメントで構成され、細エレメント（Narrow）と太エレメント（Wide）があることが由来です。NW-7はCODABARとも呼ばれます。ナロー（細い幅）とワイド（太い幅）の2種類の幅を使い、4本のバーと3つのスペースの合計7つのエレメントで構成されているのでNW-7と呼ばれています。':'NW-7 is a barcode often used in courier invoices and libraries. Although it is well known to call it Codebar, it\'s called NW-7 in Japan.  The reason is that one character consists of seven elements, and there are narrow elements (Narrow) and thick elements (Wide).' ?></p>
		<p><?php echo (get_current_blog_id()==1)?'血液銀行、宅配便の配送伝票、図書館の貸し出し管理、会員カード、書き留め郵便の管理用など、数字の連番印刷が必要なものに広く利用されています。数字のみのバーコードとして使われ、構成が単純なので、印刷精度が要求できないようなときに利用されます。':'NW-7 is also called CODABAR. It is called NW-7 because it uses two types of widths, narrow (thin) and wide (thick), and consists of 7 elements, 4 bars and 3 spaces.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'GS1-128（旧称UCC/EAN-128）':'GS1-128 (formerly called UCC / EAN-128)' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'GS1-128はCode128を元に、一定の規則で表示したバーコード規格です。以前はUCC/EAN-128と呼ばれていました。コンビニの代金支払伝票や医療用医薬品・医療機器の物流用ラベルに使用されています。GS1-128は、CODE128をもとに商品流通用に標準化されたバーコード規格です。UCC/EAN-128とも呼ばれます。GS1-128では、産業ごとに決められた識別子(AI)を指定することで、商品コードだけではなく有効期限やロットナンバーなど、商品流通用に必要な情報を標準化することができます。 また、数字だけで構成されたバーコードは、ITFよりも効率よく省スペースで表現することができます。医療用医薬品、医療機器、食肉標準物流用、コンビニエンスストアの料金収納代行の支払い伝票などに利用されています。':'GS1-128 is a barcode standard based on Code 128 and displayed according to a certain rule.<br>Formerly called UCC / EAN-128. It is used for payment slips for convenience stores and labels for the distribution of pharmaceuticals and medical devices.<br>GS1-128 is standardized for product distribution based on CODE128. It\'s also known as UCC / EAN-128. By using GS1-128, it can standardize not only the product code but also the information necessary for product distribution, such as the expiration date and lot number by specifying an identifier (AI) determined for each industry.<br>In addition, barcodes consisting only of numbers can be represented more efficiently and space-saving than ITF. It is used for medical supplies, medical devices, meat standard logistics, and payment slips for convenience store fee storage agents.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'GS1 データバー (旧称RSS)':'GS1 data bar (formerly called RSS)' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'GS1 Databar(ジーエスワンデータバー)は従来RSS(Reduced Space Symbology)と呼ばれていたバーコードです。2007年2月に改称されました。GS1（流通コードなどの標準化機構）主導のもと、国際的な流通コード（商品番号）の標準化や追跡管理を目的として普及がすすめられています。日本では厚生労働省が医薬品のJANコードに変わる新しいバーコードとして採用し普及をすすめています。':'GS1 Databar is a barcode that was formerly called RSS (Reduced Space Symbology), and it was renamed in February 2007.<br>Under the initiative of GS1, it is promoted for the purpose of standardization and tracking management of international distribution code (product number).<br>In Japan, the Ministry of Health, Labor and Welfare is adopting and promoting the use as a new barcode that will replace the JAN code for pharmaceuticals.' ?></p>
		<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
			<span>【参考】</span>
			<a href="http://www.dsri.jp/code/" class="link-text" target="_blank">一般財団法人流通システム開発センター</a>
			<span>、</span>
			<a href="https://www.keyence.co.jp/ss/products/autoid/codereader/" class="link-text" target="_blank">株式会社キーエンスバーコード講座</a>
		</p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'GS1 データマトリックス':'GS1 データマトリックス' ?></h3>
		</div>
		<div class="image-and-text">
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'GS1データマトリックスは、GS1のアプリケーション識別子（AI：Application identifier）を利用して、データマトリックスと呼ばれる2次元バーコードシンボル体系で表現したものです。一般的なデータマトリックスと区別するため、「GS1データマトリックス」と呼びます。':'GS1データマトリックスは、GS1のアプリケーション識別子（AI：Application identifier）を利用して、データマトリックスと呼ばれる2次元バーコードシンボル体系で表現したものです。一般的なデータマトリックスと区別するため、「GS1データマトリックス」と呼びます。' ?></p>
			</div>
			<figure class="image-part">
				<figcaption><?php echo (get_current_blog_id()==1)?'GS1データマトリックスシンボル表示例':'GS1データマトリックスシンボル表示例' ?></figcaption>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/information/GS1_1.png" alt="GS1 データマトリックス" width="200" />
			</figure>
		</div>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'GS1データマトリックスにエンコードする情報と順序':'GS1データマトリックスにエンコードする情報と順序' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'データの先頭には、GS1のデータであることを示す記号であるFNC1を置きます。FNC1の後のデータの大まかな順序はAIを利用する他のGS1標準のバーコードと同様で、通常は、商品識別コード（GTIN）、属性情報の順となります。属性情報に固定長、可変長がある場合は、固定長データを先とします。可変長データの後ろに他のデータが続く場合は、可変長データの項目区切りとしてFNC1が必要となります。GS1データマトリックスにはGS1-128で使用されるような、スタート、ストップを示すキャラクタはありません。数字、アルファベットの他、ISO/IEC 646国際基準の内、GS1標準で規定された一部の記号が使用できます。':'データの先頭には、GS1のデータであることを示す記号であるFNC1を置きます。FNC1の後のデータの大まかな順序はAIを利用する他のGS1標準のバーコードと同様で、通常は、商品識別コード（GTIN）、属性情報の順となります。属性情報に固定長、可変長がある場合は、固定長データを先とします。可変長データの後ろに他のデータが続く場合は、可変長データの項目区切りとしてFNC1が必要となります。GS1データマトリックスにはGS1-128で使用されるような、スタート、ストップを示すキャラクタはありません。数字、アルファベットの他、ISO/IEC 646国際基準の内、GS1標準で規定された一部の記号が使用できます。' ?></p>
		<div class="image-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/information/GS1_2.png" width="400" alt="GS1データマトリックスにエンコードする情報と順序" />
		</div>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'GS1データマトリックスのサイズ':'GS1データマトリックスのサイズ' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'GS1データマトリックスのサイズはモジュール幅によって決定されます。モジュール幅は、シンボルの作成、読み取り装置の対応能力などを勘案し、使用目的などによって定められています。':'GS1データマトリックスのサイズはモジュール幅によって決定されます。モジュール幅は、シンボルの作成、読み取り装置の対応能力などを勘案し、使用目的などによって定められています。' ?></p>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'正方形と長方形のフォーマット':'正方形と長方形のフォーマット' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'GS1データマトリックスには、正方形と長方形のフォーマットがあります。正方形フォーマットには、10 x 10モジュールから144 x 144モジュールまでの24種のサイズがあり、最大で数字3,116桁をエンコードすることができます。一方、長方形フォーマットには8×18モジュールから16×48モジュールまでの6種類のサイズがあり、最大で数字98桁をエンコードすることができます。正方形フォーマットの方が利用できるサイズの範囲が広く、大量のデータをエンコードすることも可能なので、通常、正方形フォーマットが使われます。':'GS1データマトリックスには、正方形と長方形のフォーマットがあります。正方形フォーマットには、10 x 10モジュールから144 x 144モジュールまでの24種のサイズがあり、最大で数字3,116桁をエンコードすることができます。一方、長方形フォーマットには8×18モジュールから16×48モジュールまでの6種類のサイズがあり、最大で数字98桁をエンコードすることができます。正方形フォーマットの方が利用できるサイズの範囲が広く、大量のデータをエンコードすることも可能なので、通常、正方形フォーマットが使われます。' ?></p>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'海外での利用例':'海外での利用例' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'アメリカ、ヨーロッパをはじめ海外の多くの国では、医療用医薬品、医療機器などの規制ヘルスケア製品について、GS1データマトリックスの利用が始まっています。':'アメリカ、ヨーロッパをはじめ海外の多くの国では、医療用医薬品、医療機器などの規制ヘルスケア製品について、GS1データマトリックスの利用が始まっています。' ?></p>
		<div class="image-area">
			<figure>
				<figcaption><?php echo (get_current_blog_id()==1)?'長方形と正方形のGS1データマトリックスシンボル例':'長方形と正方形のGS1データマトリックスシンボル例' ?></figcaption>
				<img src="<?php bloginfo('template_directory') ?>/inc/img/information/GS1_3.png" width="400" alt="長方形と正方形のGS1データマトリックスシンボル例" />
			</figure>
			
		</div>


		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'トレーサビリティ':'Traceability' ?></h2>
		</div>

		<?php if(get_current_blog_id()==1){ ?>
		<!-- 日本語 -->
		<p>
			<span>不当表示、産地偽装、コピー品の増加、異物混入など昨今のこれらの問題は、製品に対する信頼を根本から揺るがすものとなってきています。そうした中で、印字や表示の役割は、製造者と取引先そして消費者間における製品の安全や信頼そして安心を約束する証明としてその重要度は増す一方です。製品の安全性に対する消費者の要求が厳しくなるなか、印字や表示には品質や内容を証明をするという役割が課され、その社会的な責務も大きくなってきたといえます。また、万が一、製品事故が発生した場合、いつ、どこで、どれくらい生産されたかが分かれば、原因究明や迅速な製品回収が可能となります。消費者の製品に対する信頼が揺らぐなか、このような、生産・加工・流通の一つまたは複数の段階を通じて、ひとつひとつの製品の移動（履歴）を把握できるトレーサビリティの仕組みができていれば被害を最小限にまたは未然にすることが可能になります。印字や表示は中身や品質に対する証明に加え履歴としての役割も担っていくことが要求されてきています。コード印字や可変印字そしてそのコードを使ったシステムの構築で製品を管理するトレーサビリティシステムの構築も容易になります。トレーサビリティの構築については</span>
			<a href="traceability" class="link-text">こちら</a>
			<span>をご覧ください。トレーサビリティシステムの構築を可能にする製品管理クラウドサービスについては</span>
			<a href="<?php bloginfo('template_directory') ?>/inc/img/information/tracing-i.pdf" target="_blank" class="link-text">こちらのpdf</a>
			<span>をご覧ください。</span>	
		</p>
		<?php }else{ ?>
		<!-- 英語 -->
		<p>
			<span>不当表示、産地偽装、コピー品の増加、異物混入など昨今のこれらの問題は、製品に対する信頼を根本から揺るがすものとなってきています。そうした中で、印字や表示の役割は、製造者と取引先そして消費者間における製品の安全や信頼そして安心を約束する証明としてその重要度は増す一方です。製品の安全性に対する消費者の要求が厳しくなるなか、印字や表示には品質や内容を証明をするという役割が課され、その社会的な責務も大きくなってきたといえます。また、万が一、製品事故が発生した場合、いつ、どこで、どれくらい生産されたかが分かれば、原因究明や迅速な製品回収が可能となります。消費者の製品に対する信頼が揺らぐなか、このような、生産・加工・流通の一つまたは複数の段階を通じて、ひとつひとつの製品の移動（履歴）を把握できるトレーサビリティの仕組みができていれば被害を最小限にまたは未然にすることが可能になります。印字や表示は中身や品質に対する証明に加え履歴としての役割も担っていくことが要求されてきています。コード印字や可変印字そしてそのコードを使ったシステムの構築で製品を管理するトレーサビリティシステムの構築も容易になります。トレーサビリティの構築については</span>
			<a href="<?php bloginfo('template_directory') ?>/inc/img/information/tracing-i.pdf" target="_blank" class="link-text">こちらのpdf</a>
			<span>をご覧ください。</span>	
		</p>
		<?php } ?>
		
		<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
			<span>【参考】</span>
			<a href="http://www.maff.go.jp/j/syouan/seisaku/trace/" class="link-text" target="_blank">農林水省トレーサビリティ</a>
		</p>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'食品表示':'Food display' ?></h2>
		</div>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'食品表示法切り替え（2020年4月1日～）':'Change of food labeling method (April 1, 2020-)' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'食品を取り巻く印字や表示の状況は、2015年4月から「食品表示法」によりルールが一本化され、経過措置期間、生鮮食品の表示は1年6か月、既に適用、加工食品と添加物のすべての表示は5年、2020年4月1日から適用され、移行のための猶予期間食品表示法にそった表示へと移行することになります。中食（惣菜、弁当等）の製造現場を含めたすべての加工食品会社は対応が急務となります。消費者の安全・安心を守る表示として食品表示法で義務となっている表示項目は、義務化される「栄養成分表示」、消費期限と賞味期限（期限表示）、アレルゲンの表示、小包装の食品の表示、製造所固有記号、機能性表示、表示レイアウトの改善などその表示義務内容は多くなっています。正しい食品表示に対応したものを毎日間違いなく提供する事業者であるためには、印字システム機械の導入といった食品表示法への対策を検討することも必要です。':'The rules for printing and labeling on food have been standardized by the Food Labeling Act since April 2015.  During transition period, fresh food labeling is applied one year and six months, and processed food and additives will be applied 5 years from April 1, 2020.<br>It is urgently required for all processed food companies, including production sites for prepared meals (such as prepared foods and lunch boxes).<br>The display items that are obligated by the Food Labeling Act are increasing such as nutrient component labeling, expiration date and shelf life (duration display), allergen labeling, small packaging for food, factory specific symbols, functionality display, display layout improvement etc.<br>labeling, small packaging for food, factory specific symbols, functionality display, display layout improvement etc.<br>In order to provide food products that meet the accurate food labeling, it\'s necessary to consider the installation of priting system.' ?></p>
		<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
			<span>【参考】</span>
			<a href="https://www.caa.go.jp/policies/policy/food_labeling/food_labeling_act/" class="link-text" target="_blank">食品表示法等(法令及び一元化情報)</a>
		</p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'加工食品の原料原産地表示制度（2022年4月１日～）':'Raw material origin indication system of processed food (April 1, 2022~)' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'平成29年9月に食品表示基準が改正・施行され、国内で作られたすべての加工食品に対して、原料原産地表示を行うことが義務付けられました。本制度の経過措置期間は2022年3月までですので、それまでの間に新たな原料原産地表示にご対応いただかなければなりません。これは、消費者が、原料原産地を商品選択の基準に利用しているためです。原料原産地表示は、輸入品を除くすべての加工品が対象となり、使用した原材料に占める重量割合が最も高い原材料がその表示の対象になり、原則、国別重量準表示です。また、対象の原材料が加工食品の場合は、製造地表示を行います。また、業務用についても必要な産地情報の伝達が必要です。正しい原料原産地情報を毎日間違いなく表示、伝達するためには、印字システム機械の導入といった原料原産地表示への対策を検討することも必要です。':'The food labeling standards were revised and enforced in September 2017, and it was obliged to carry out raw material labeling for all processed foods made in Japan.<br>Since the transition period of this system is until March 2022, it is necessary for you to meet the new raw material origin indication until then.<br>This is because consumers need the information of the raw material origin. <br>Raw material origin indication applies to all processed products except for imported products, and the raw material with the highest ratio of weight to raw material is subject to the indication, and in principle, it is national weight quasi-indication.<br>In addition, the place of production is displayed in case the target raw material is processed food,<br>It is also necessary to transmit the information of production area for business use.<br>In order to provide the information of raw material origin, it\'s necessary to consider the installation of printing system.' ?></p>
		<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
			<span>【参考】</span>
			<a href="http://www.maff.go.jp/j/syouan/hyoji/gengen_hyoji.html" class="link-text" target="_blank">加工食品の原料原産地表示制度について</a>
		</p>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'商標・ブランド名':'Trademark / Brand Name' ?></h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'ブランド力を高め、強固なブランドを築くことは、商標やブランド名の表示をあらゆるところで適切に徹底して表示を行うことが重要です。':'It is important to properly display trademark and brand names.' ?></p>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'地域団体商標':'Local group trademark' ?></h3>
		</div>
		<figure class="trademark-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/information/local.jpg" alt="地域団体商標" width="200" />
			<figcaption>
				<p><?php echo (get_current_blog_id()==1)?'地域団体商標制度は、地域ブランドを適切に保護することにより、信用力の維持による競争力の強化と地域経済の活性化を支援することを目的とし、平成１８年４月に創設されました。':'The local group trademark system was created in April 2006 for the purpose of strengthening competitiveness by maintaining creditworthiness and revitalizing the regional economy by appropriately protecting regional brands.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'地域の事業協同組合や農業協同組合等の団体、商工会、商工会議所、NPO 法人が、「地名＋商品（サービス）名」からなる商標を、その地域との密接な関連性を有する商品（サービス）に使用して一定の地理的範囲で周知となっている場合には、地域団体商標として商標登録を受けることができる制度です。':'Local business cooperatives, groups such as agricultural cooperatives, Chamber of Commerce, NPO can apply. They can receive a trademark registration consisting of "location name + product (service) name" for a product that has a close relationship with the area.' ?></p>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
					<span>【参考】</span>
					<a href="http://www.meti.go.jp/press/2017/03/20180307001/20180307001.html" class="link-text" target="_blank">経済産業省地域団体商標ガイドブック</a>
				</p>
			</figcaption>
		</figure>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'GI日本地理的表示':'GI Japan geographical display' ?></h3>
		</div>
		<figure class="trademark-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/information/gi.jpg" alt="GI日本地理的表示" width="200" />
			<figcaption>
				<p><?php echo (get_current_blog_id()==1)?'地域で育まれた伝統と特性を有する農林水産物・食品等のうち、品質等の特性が地域と結び付いている産品について、その名称を知的財産として保護することを目的とした「特定農林水産物等の名称の保護に関する法律（地理的表示法）」が平成27 年6 月に施行されました。':'The Law on the Protection of Names of Specified Agriculture, Forestry, and Fishery Products (Geographical Display Act) came into effect in June 2015.<br>The purpose of this law is to protect the name of the product whose characteristics are linked with the area as intellectual property.' ?></p>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
					<span>【参考】</span>
					<a href="http://www.maff.go.jp/j/shokusan/gi_act/index.html" class="link-text" target="_blank">地理的表示制度(GI)</a>
					<span>、</span>
					<a href="http://www.fmric.or.jp/gidesk/" class="link-text" target="_blank">GIサポートデスク</a>
				</p>
			</figcaption>
		</figure>

		<div class="section-title" id="qrcode">
			<h2>QRコード</h2>
		</div>
		<figure class="trademark-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/information/qrcode.jpg" alt="QRコード" width="200" />
			<figcaption>
				<p><?php echo (get_current_blog_id()==1)?'必要な時に必要なだけ1個からその場で印字ができるオンデマンドのサーマルプリンターでのコード印字は、QRコードの用途を更に広げています。':'必要な時に必要なだけ1個からその場で印字ができるオンデマンドのサーマルプリンターでのコード印字は、QRコードの用途を更に広げています。' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'QRコード（キューアールコード）は、1994年にデンソーの開発部門（現在は分離しデンソーウェーブ）が開発したマトリックス型二次元コード である。なお、QRコードはデンソーウェーブの登録商標（第4075066号[1]）である[注 1]。':'QRコード（キューアールコード）は、1994年にデンソーの開発部門（現在は分離しデンソーウェーブ）が開発したマトリックス型二次元コード である。なお、QRコードはデンソーウェーブの登録商標（第4075066号[1]）である[注 1]。' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'QRはQuick Responseに由来し、高速読み取りができるように開発された。当初は自動車部品工場や配送センターなどでの使用を念頭に開発され、現在ではスマートフォンの普及などにより日本に限らず世界的に普及している。出典: フリー百科事典『ウィキペディア（Wikipedia）』':'QRはQuick Responseに由来し、高速読み取りができるように開発された。当初は自動車部品工場や配送センターなどでの使用を念頭に開発され、現在ではスマートフォンの普及などにより日本に限らず世界的に普及している。出典: フリー百科事典『ウィキペディア（Wikipedia）』' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'QRコードはいろいろな現場の『便利』に役立っています。チラシや名刺といった印刷物だけでなく、決済システムなど身の回りの生活環境から工場や流通といったビジネスに至るまでの幅広い範囲で使われ、もはや暮らしに欠かせない存在であるQRコードになっています。':'QRコードはいろいろな現場の『便利』に役立っています。チラシや名刺といった印刷物だけでなく、決済システムなど身の回りの生活環境から工場や流通といったビジネスに至るまでの幅広い範囲で使われ、もはや暮らしに欠かせない存在であるQRコードになっています。' ?></p>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
					<span>【参考】</span>
					<a href="https://www.denso-wave.com/ja/adcd/katsuyou/" class="link-text" target="_blank">デンソーウェーブ活用シーン</a>
				</p>
			</figcaption>
		</figure>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'QRコードのモデル1':'QRコードのモデル1' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'最初に作られたQRコードで、最大バージョンは14 (73×73セル)で数字1167桁まで扱うことができます。':'最初に作られたQRコードで、最大バージョンは14 (73×73セル)で数字1167桁まで扱うことができます。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'QRコードのモデル2':'QRコードのモデル2' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'コードが歪んでしまった場合でもスムーズに読取りが出来るように、モデル1を改良したコードです。コードが曲面に印字されたり、読み取り時の角度でコードが歪んだ状態でも、コード内部に配置したアライメントパターンによって、性能良く読み取ることができます。最大バージョンは40 (177×177セル)で、数字7089桁まで扱うことができます。':'コードが歪んでしまった場合でもスムーズに読取りが出来るように、モデル1を改良したコードです。コードが曲面に印字されたり、読み取り時の角度でコードが歪んだ状態でも、コード内部に配置したアライメントパターンによって、性能良く読み取ることができます。最大バージョンは40 (177×177セル)で、数字7089桁まで扱うことができます。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'マイクロQRコード':'マイクロQRコード' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'マイクロQRコードの大きな特長は、切り出しシンボルが一つである事です。QRコードの場合、3つの角に切り出しシンボルを配置しているので、ある程度の大きさを必要とします。また、QRコードでは最低4セル分のマージンがコードの周りに必要でしたが、マイクロQRコードの場合、2セル分のマージンが確保できれば十分です。このような構造により、マイクロQRコードは、QRコードよりもさらに小さなスペースへの印字を可能としています。':'マイクロQRコードの大きな特長は、切り出しシンボルが一つである事です。QRコードの場合、3つの角に切り出しシンボルを配置しているので、ある程度の大きさを必要とします。また、QRコードでは最低4セル分のマージンがコードの周りに必要でしたが、マイクロQRコードの場合、2セル分のマージンが確保できれば十分です。このような構造により、マイクロQRコードは、QRコードよりもさらに小さなスペースへの印字を可能としています。' ?></p>
		<div class="image-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/information/micro-QR.png" width="400" alt="マイクロQRコード" />
		</div>
		<p><?php echo (get_current_blog_id()==1)?'マイクロQRコードは、格納できるデータ量はそれほど多くありません。(数字で最大35文字)QRコードと比べると、コードサイズに対して効率よくデータを収納できるため、データ量が増えてもそれほどコードが大きくなりません。':'マイクロQRコードは、格納できるデータ量はそれほど多くありません。(数字で最大35文字)QRコードと比べると、コードサイズに対して効率よくデータを収納できるため、データ量が増えてもそれほどコードが大きくなりません。' ?></p>
		<p><?php echo (get_current_blog_id()==1)?'マイクロQRコードは、バージョンM1〜M4までの4つのバージョンがあります。最大バージョンのM4でもQRコードバージョン1よりも格納できるデータ量は少なくなっています。':'マイクロQRコードは、バージョンM1〜M4までの4つのバージョンがあります。最大バージョンのM4でもQRコードバージョン1よりも格納できるデータ量は少なくなっています。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'iQRコード':'iQRコード' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'コードの位置や大きさが簡単に読み取れるマトリックス方式の2次元コードです。従来のQRコードやマイクロQRコードより更に小さいコードから、より多くのデータを格納できる大型コードまで広範囲に渡るコードを生成できます。また、長方形にしたり、表裏反転・白黒反転・ドットパターン(ダイレクトパーツマーキング)で印字することも可能なため、幅広いフィールドで活用することができる最小サイズのQRコードです。':'コードの位置や大きさが簡単に読み取れるマトリックス方式の2次元コードです。従来のQRコードやマイクロQRコードより更に小さいコードから、より多くのデータを格納できる大型コードまで広範囲に渡るコードを生成できます。また、長方形にしたり、表裏反転・白黒反転・ドットパターン(ダイレクトパーツマーキング)で印字することも可能なため、幅広いフィールドで活用することができる最小サイズのQRコードです。' ?></p>

		<div class="section-title" id="qrcode">
			<h2>RFID</h2>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'電波を用いてRFタグのデータを非接触で読み書きするシステムです。バーコードでの運用では、レーザなどでタグを1枚1枚スキャンするのに対し、RFIDの運用では、電波でタグを複数一気にスキャンすることができます。電波が届く範囲であれば、タグが遠くにあっても読み取りが可能です。':'電波を用いてRFタグのデータを非接触で読み書きするシステムです。バーコードでの運用では、レーザなどでタグを1枚1枚スキャンするのに対し、RFIDの運用では、電波でタグを複数一気にスキャンすることができます。電波が届く範囲であれば、タグが遠くにあっても読み取りが可能です。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'RFタグ':'RFタグ' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'RFタグは、メモリが内蔵された記憶媒体です。数ミリ程度の大きさですが、メモリには電子情報を入力したり消去したり書き換えたりすることが可能で、これらは電波（電磁波の一種）を用いて行います。RFタグはICタグと呼ばれることもあります。また、バッテリーが内蔵されている「アクティブ型」もありタグから発信される電波をリーダライターが受信することで情報をよみとります。':'RFタグは、メモリが内蔵された記憶媒体です。数ミリ程度の大きさですが、メモリには電子情報を入力したり消去したり書き換えたりすることが可能で、これらは電波（電磁波の一種）を用いて行います。RFタグはICタグと呼ばれることもあります。また、バッテリーが内蔵されている「アクティブ型」もありタグから発信される電波をリーダライターが受信することで情報をよみとります。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'リーダライタ':'リーダライタ' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'RFタグに入力されている電子情報を読み取る機器です。読取は、リーダをRFタグのほうにかざしてスイッチを押すだけで、読み取り（スキャン）は終了します。RFIDは、電波を使って情報の保管と引き出しができるシステムです。すでに日常生活に浸透していて、交通機関で使われているSuicaやプリペイド型電子マネー楽天EdyなどもRFIDを利用しています。':'RFタグに入力されている電子情報を読み取る機器です。読取は、リーダをRFタグのほうにかざしてスイッチを押すだけで、読み取り（スキャン）は終了します。RFIDは、電波を使って情報の保管と引き出しができるシステムです。すでに日常生活に浸透していて、交通機関で使われているSuicaやプリペイド型電子マネー楽天EdyなどもRFIDを利用しています。' ?></p>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'POSレジの効率化':'POSレジの効率化' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'一括スキャンすることによってレジ作業が効率化するため、1人の客にかかる会計時間を削減することができます。':'一括スキャンすることによってレジ作業が効率化するため、1人の客にかかる会計時間を削減することができます。' ?></p>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'在庫管理作業の効率化':'在庫管理作業の効率化' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'「いまの在庫」が常にリアルタイムで把握でき発注業務もスムーズに進みます。':'「いまの在庫」が常にリアルタイムで把握でき発注業務もスムーズに進みます。' ?></p>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'賞味期限・消費期限の管理':'賞味期限・消費期限の管理' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'RFタグには食品の賞味期限や消費期限のデータを入力することもできます。すべての商品にRFタグを貼り付ければ、それらの消費期限・賞味期限をパソコン上で把握することができるので賞味期限が近づいた商品を管理しやすくなります。食品廃棄を減らし利益向上につなげることも可能になります。':'RFタグには食品の賞味期限や消費期限のデータを入力することもできます。すべての商品にRFタグを貼り付ければ、それらの消費期限・賞味期限をパソコン上で把握することができるので賞味期限が近づいた商品を管理しやすくなります。食品廃棄を減らし利益向上につなげることも可能になります。' ?></p>

		<h4 class="blue-title"><?php echo (get_current_blog_id()==1)?'製造小売業での生産から消費者販売まで一括した管理':'製造小売業での生産から消費者販売まで一括した管理' ?></h4>
		<p><?php echo (get_current_blog_id()==1)?'製品や食品を製造するメーカーがRFIDを導入すれば、生産から販売まで1個の商品・食品を追跡することができます。トレーサビリティを実現することができます。すぐに原因を追究でき、改善に取り組むことができます。責任の所在が明らかになるので、メーカー、卸会社、運送会社、販売会社などのバリューチェーンの関係各社が無駄なく対策を講じることが可能になります。また、これまで製品を「ロット」で管理するしかありませんでしたが、RFIDによって製品を「1個ごと」に管理・追跡することが可能になり、製品管理に関わる労力を減らすことも可能になります。':'製品や食品を製造するメーカーがRFIDを導入すれば、生産から販売まで1個の商品・食品を追跡することができます。トレーサビリティを実現することができます。すぐに原因を追究でき、改善に取り組むことができます。責任の所在が明らかになるので、メーカー、卸会社、運送会社、販売会社などのバリューチェーンの関係各社が無駄なく対策を講じることが可能になります。また、これまで製品を「ロット」で管理するしかありませんでしたが、RFIDによって製品を「1個ごと」に管理・追跡することが可能になり、製品管理に関わる労力を減らすことも可能になります。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'RFIDの周波数':'RFIDの周波数' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'日本国内ではLF帯（中波帯）：120～130kHz、HF帯（短波帯）：13.56MHｚ、UHF帯（極超短波）：900MHｚ帯、マイクロ波：2.45GHｚ帯が主に使用されています。LF帯（中波帯）、HF帯（短波帯）、マイクロ波：2.45GHｚは世界的にほぼ同一規格になっていますが、UHF帯（極超短波）は国によって規格が異なります。':'日本国内ではLF帯（中波帯）：120～130kHz、HF帯（短波帯）：13.56MHｚ、UHF帯（極超短波）：900MHｚ帯、マイクロ波：2.45GHｚ帯が主に使用されています。LF帯（中波帯）、HF帯（短波帯）、マイクロ波：2.45GHｚは世界的にほぼ同一規格になっていますが、UHF帯（極超短波）は国によって規格が異なります。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'バーコードとタグ':'バーコードとタグ' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'ID、個体識別の分野では、RFタグ（RFIDタグ、ICタグ、無線タグ）はバーコードと比較されますが、バーコードの利点はコストです。印字できる印字エリアがあれば大量に安く個体の識別が行えます。また社会インフラとして整っており、現在は商品にはバーコードがつけられ、各店舗でバーコードリーダーが普及しています。しかし、バーコードは一定の貼付エリアが必要であり、かつ汚れに弱い、データ量が少ない、データの書き換えができないといった点があります。QRコードやタグがそれらの欠点を補い、更に利用用途により選択の幅が広がっています。':'ID、個体識別の分野では、RFタグ（RFIDタグ、ICタグ、無線タグ）はバーコードと比較されますが、バーコードの利点はコストです。印字できる印字エリアがあれば大量に安く個体の識別が行えます。また社会インフラとして整っており、現在は商品にはバーコードがつけられ、各店舗でバーコードリーダーが普及しています。しかし、バーコードは一定の貼付エリアが必要であり、かつ汚れに弱い、データ量が少ない、データの書き換えができないといった点があります。QRコードやタグがそれらの欠点を補い、更に利用用途により選択の幅が広がっています。' ?></p>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'RFIDとバーコードの違い':'RFIDとバーコードの違い' ?></h3>
		</div>
		<table class="type-table combo-table" width="100%">
			<thead>
				<tr>
					<th width="20%"></th>
					<th width="40%">RFID</th>
					<th width="40%">
						<?php echo (get_current_blog_id()==1)?'バーコード':'バーコード' ?>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>
						<?php echo (get_current_blog_id()==1)?'通信距離':'通信距離' ?>
					</th>
					<td>
						<?php echo (get_current_blog_id()==1)?'長い（～数十m以上）':'長い（～数十m以上）' ?>
					</td>
					<td>
						<?php echo (get_current_blog_id()==1)?'短い（数cm）':'短い（数cm）' ?>
					</td>
				</tr>
				<tr>
					<th>
						<?php echo (get_current_blog_id()==1)?'同時読込':'同時読込' ?>
					</th>
					<td>
						<?php echo (get_current_blog_id()==1)?'◯可能':'◯可能' ?>
					</td>
					<td>
						<?php echo (get_current_blog_id()==1)?'×不可能':'×不可能' ?>
					</td>
				</tr>
				<tr>
					<th>
						<?php echo (get_current_blog_id()==1)?'記憶容量':'記憶容量' ?>
					</th>
					<td>
						<?php echo (get_current_blog_id()==1)?'大':'大' ?>
					</td>
					<td>
						<?php echo (get_current_blog_id()==1)?'小（QRコード 中）':'小（QRコード 中）' ?>
					</td>
				</tr>
				<tr>
					<th>
						<?php echo (get_current_blog_id()==1)?'書込み':'書込み' ?>
					</th>
					<td>
						<?php echo (get_current_blog_id()==1)?'◯可能':'◯可能' ?>
					</td>
					<td>
						<?php echo (get_current_blog_id()==1)?'×不可能':'×不可能' ?>
					</td>
				</tr>
				<tr>
					<th>
						<?php echo (get_current_blog_id()==1)?'汚れ':'汚れ' ?>
					</th>
					<td>
						<?php echo (get_current_blog_id()==1)?'◯強い':'◯強い' ?>
					</td>
					<td>
						<?php echo (get_current_blog_id()==1)?'×弱い':'×弱い' ?>
					</td>
				</tr>
				<tr>
					<th>
						<?php echo (get_current_blog_id()==1)?'コスト':'コスト' ?>
					</th>
					<td>
						<?php echo (get_current_blog_id()==1)?'△高い':'△高い' ?>
					</td>
					<td>
						<?php echo (get_current_blog_id()==1)?'◯安い':'◯安い' ?>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'IoTとタグ':'IoTとタグ' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'IoT とは Internet of Things の略で、モノのインターネット、つまり、いろいろなモノがインターネットにつながり、クラウドにデータが保管されることをいいます。電子タグ（RFID）はIoTにおいて、センサーなどと同じように情報を収集する仕組みの一つになります。例えば、アパレル業の場合、商品である服に電子タグをつけることで、工場での製造工程から、物流、小売、販売までの全てのサプライチェーンのトレーサビリティ（製品の管理）を行うことができます。 今、どこに、何が、どれくらいあるか、どういったお客様が買われたのか等の全ての情報はクラウドにビックデータとして蓄積されます。アパレル会社は、それらのデータをもとに、売れ筋商品の生産、流通在庫の低減、オペレーションの効率化、新商品の開発などに活用しています。':'IoT とは Internet of Things の略で、モノのインターネット、つまり、いろいろなモノがインターネットにつながり、クラウドにデータが保管されることをいいます。電子タグ（RFID）はIoTにおいて、センサーなどと同じように情報を収集する仕組みの一つになります。例えば、アパレル業の場合、商品である服に電子タグをつけることで、工場での製造工程から、物流、小売、販売までの全てのサプライチェーンのトレーサビリティ（製品の管理）を行うことができます。 今、どこに、何が、どれくらいあるか、どういったお客様が買われたのか等の全ての情報はクラウドにビックデータとして蓄積されます。アパレル会社は、それらのデータをもとに、売れ筋商品の生産、流通在庫の低減、オペレーションの効率化、新商品の開発などに活用しています。' ?></p>

		<div class="section-title" id="qrcode">
			<h2><?php echo (get_current_blog_id()==1)?'規格':'Standard' ?></h2>
		</div>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'JASマーク':'JASマーク' ?></h3>
		</div>
		<div class="image-and-text">
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'JASマークは、しょうゆや木材などに表示され、広く知られているいわゆる丸JASマークと、「地鶏肉」や「熟成ハム」など、特色のある規格のマークに大きく分けられます。':'JASマークは、しょうゆや木材などに表示され、広く知られているいわゆる丸JASマークと、「地鶏肉」や「熟成ハム」など、特色のある規格のマークに大きく分けられます。' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'この特色のある規格のマークを統一し、国内、海外市場において特色をアピールできる新たなJASマークが決定されました。':'この特色のある規格のマークを統一し、国内、海外市場において特色をアピールできる新たなJASマークが決定されました。' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'国内外において、「信頼の日本品質」を一目でイメージしていただくため、日本を象徴する「富士山」と、日の丸を連想させる「太陽」を組み合わせ、シンプルにデザインしました。それぞれの規格の内容を富士山の裾野部分に記載します。なお、配色の指定はしない予定です。':'国内外において、「信頼の日本品質」を一目でイメージしていただくため、日本を象徴する「富士山」と、日の丸を連想させる「太陽」を組み合わせ、シンプルにデザインしました。それぞれの規格の内容を富士山の裾野部分に記載します。なお、配色の指定はしない予定です。' ?></p>
				<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
					<span>【参考】</span>
					<a href="http://www.maff.go.jp/j/press/shokusan/syoku_kikaku/181019.html" class="link-text" target="_blank">新JASマーク</a>
				</p>
			</div>
			<figure class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/information/jas.jpg" alt="規格" width="200" />
			</figure>
		</div>

		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'有機JASマーク':'有機JASマーク' ?></h3>
		</div>
		<p><?php echo (get_current_blog_id()==1)?'（農水省ページより抜粋）':'（農水省ページより抜粋）' ?></p>
		<p><?php echo (get_current_blog_id()==1)?'有機JASマークは、太陽と雲植物をイメージしたマークです。農薬や化学肥料などの化学物質に頼らないで、自然界の力で生産された食品を表しており、農産物、加工食品、飼料および畜産物に付けられます。':'有機JASマークは、太陽と雲植物をイメージしたマークです。農薬や化学肥料などの化学物質に頼らないで、自然界の力で生産された食品を表しており、農産物、加工食品、飼料および畜産物に付けられます。' ?></p>
		<p <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
			<span>【参考】</span>
			<a href="https://www.maff.go.jp/j/jas/jas_kikaku/yuuki.html" class="link-text" target="_blank">参考有機食品の検査認証制度</a>
		</p>

		<div class="contact-box">
			<div class="contact-content">
				<div class="title"><?php echo (get_current_blog_id()==1)?'印字テストについてのお問い合わせ':'Inquiry about printing test' ?></div>
				<p><?php echo (get_current_blog_id()==1)?'印字・表示内容や軟包装（包材）の検討に伴う印字テストが必要な場合はお気軽にご相談下さい。':'Please feel free to contact us if you need a printing test for your consideration.' ?></p>
				<a href="<?php bloginfo('url') ?>/material/inquiry-010" class="contact-button"><?php echo (get_current_blog_id()==1)?'お問い合わせ':'Contact Us' ?></a>
			</div>
		</div>
		
	</div>
</main>
<?php get_footer(); ?>