<?php /* Template Name: network */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'事業所一覧':'Offices' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path">
			<li>
				<a href="<?php bloginfo('url') ?>"><?php echo (get_current_blog_id()==1)?'ホーム':'Home' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('template_directory') ?>/company"><?php echo (get_current_blog_id()==1)?'会社案内':'About Us' ?></a>
			</li>
			<li>
				<a href="<?php bloginfo('template_directory') ?>/company/network"><?php echo (get_current_blog_id()==1)?'事業所一覧':'Offices' ?></a>
			</li>
		</ol>
		<div class="image-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/company/network.png" alt="事業所一覧" width="800" />
		</div>
		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'事業所':'Office' ?></h2>
		</div>
		<table width="100%" class="fertilizer-table">
			<tbody>
				<tr>
					<th width="30%"><?php echo (get_current_blog_id()==1)?'東京本社':'Tokyo Headquarters' ?></th>
					<td width="70%">
						<p><?php echo (get_current_blog_id()==1)?'〒103-0002　東京都中央区日本橋馬喰町2-3-3<br>ファッションフェイスビル3F/4F<br>TEL: 03(3831)3921(代)<br>FAX: 03(3831)7541':'Fashion Face Building 3F/4F, 2-3-3 Nihonbashi Bakurocho, Chuo-ku, Tokyo, 103-0002<br>TEL: +81-3-3831-3921<br>FAX: +81-3-3831-7541' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/HjDx7J59MeLNVn8A8" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'大阪営業所':'Osaka Sales Office' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒540-0012　大阪府大阪市中央区谷町2-1-22<br>フェアーステージ大手前ビル8F<br>TEL：06(6942)7212 (代)<br>FAX：06(6946)8398':'Fair Stage Otemae Building 8F, 2-1-22 Tanimachi, Chuo-ku, Osaka-shi, Osaka, 540-0012<br>TEL: 06-6942-7212<br>FAX: 06-6846-8398' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/bAs7KPgyECYzfw4U8" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'名古屋営業所':'Nagoya Sales Office' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒454-0818　愛知県名古屋市中川区松葉町3−17−1<br>TEL：052(354)1014 (代)<br>FAX：052(354)1024':'3-17-1 Matsuba-machi, Nakagawa-ku, Nagoya-shi, Aichi, 454-0818<br>TEL: 052-354-1014<br>FAX: 052-354-1024' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/V27Ju46shDFopR1x8" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'九州営業所':'Kyushu Sales Office' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒818-0072　福岡県筑紫野市二日市中央5-2-1<br>佐々木ビル1F<br>TEL：092(924)2081 (代)<br>FAX：092(924)2087':'Sasaki Building 1F, 5-2-1 Chuo, Futsukaichi, Chikushino-shi, Fukuoka, 818-0072<br>TEL: 092-924-2081<br>FAX: 092-924-2087' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/BJyBFG1v8N3Z2Xe2A" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'東北営業所':'Tohoku Sales Office' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒983-0045　宮城県仙台市宮城野区宮城野1-25-17<br>しゅうようⅡビル<br>TEL：022(292)0477 (代)<br>FAX：022(292)0478':'Shunyo Ⅱ Building, 1-25-17 Miyagino, Miyagino-ku, Sendai-shi, Miyagi, 983-0045<br>TEL: 022-292-0477<br>FAX: 022-292-0478' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/dt4DP1WSroTWtkJC6" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'新潟営業所':'Niigata Sales Office' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒951-8142　新潟県新潟市中央区関屋大川前2-4-12<br>TEL：025(266)1519 (代)<br>FAX：025(23)2225':'2-4-12 Sekiya Ogawamae, Chuo-ku, Niigata-shi, Niigata, 951-8142<br>TEL: 025-266-1519<br>FAX: 025-233-2225' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/ZS1uoojaGZfwHEq48" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'松本営業所':'Matsumoto Sales Office' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒399-0034　長野県松本市野溝東1-1-25<br>TEL：0263(25)2111 (代)<br>FAX：0263(25)2553':'1-1-25, Nomizohigashi, Matsumoto-shi, Nagano, 399-0034<br>TEL: 0263-25-2111<br>FAX: 0263-25-2553' ?></p>
						<div class="button-area">
							<a href="https://goo.gl/maps/dQzHUTUZt2deEBLw7" target="_blank" class="light-button"><?php echo (get_current_blog_id()==1)?'地図':'Map' ?></a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'工場':'Factory' ?></h2>
		</div>
		<table width="100%" class="fertilizer-table">
			<tbody>
				<tr>
					<th width="30%"><?php echo (get_current_blog_id()==1)?'佐久工場':'Saku Factory' ?></th>
					<td width="70%">
						<p><?php echo (get_current_blog_id()==1)?'〒384-2201　長野県佐久市印内566':'566 Innai, Saku-shi, Nagano, 384-2201' ?></p>
					</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'長野工場':'Nagano Factory' ?></th>
					<td>
						<p><?php echo (get_current_blog_id()==1)?'〒399-0034　長野県松本市野溝東1-1-25':'1-1-25, Nomizohigashi, Matsumoto-shi, Nagano, 399-0034' ?></p>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'海外':'Overseas' ?></h2>
		</div>
		<table width="100%" class="fertilizer-table">
			<tbody>
				<tr>
					<th width="30%"><?php echo (get_current_blog_id()==1)?'中国事務所<br>（現地法人）':'China Office<br>(Local Corporation)' ?></th>
					<td width="70%">
						<p><?php echo (get_current_blog_id()==1)?'欣魅（上海）貿易有限公司<br>NO.12 Lane 65　Chenxiang road, Nanxiang town, SHANGHAI':'Yin Hing (Shanghai) Trading Co., Ltd.<br>NO.12 Lane 65　Chenxiang road, Nanxiang town, SHANGHAI' ?></p>
					</td>
				</tr>
			</tbody>
		</table>
		<p><?php echo (get_current_blog_id()==1)?'シンメイは軟包装に直接印字や表示するダイレクトサーマルプリンターやオートラベラー、チェックスタンパーの製造販売、保守メンテナンスをおこなっています。軟包装への直接印字や表示のことならどんなことでも最寄りの弊社事業所へご相談下さい。皆様からの様々なご相談を心からお待ちしています。':'Shinmei manufactures, sells, and supports direct thermal printers, automatic labelers, and check stampers that print and display directly on soft packaging.<br>Please contact our office for direct printing and labeling on flexible packaging. We sincerely look forward to hearing from you.' ?></p>
	</div>

</main>

<?php get_footer(); ?>