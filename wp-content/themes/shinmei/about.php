<?php /* Template Name: about */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'企業情報':'Company' ?></h1>
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
				<a href="<?php bloginfo('url') ?>/company/about"><?php echo (get_current_blog_id()==1)?'企業情報':'Company' ?></a>
			</li>
		</ol>

		<table width="100%" class="fertilizer-table">
			<tbody>
				<tr>
					<th width="20%"><?php echo (get_current_blog_id()==1)?'商号':'Company Name' ?></th>
					<td width="80%"><?php echo (get_current_blog_id()==1)?'株式会社シンメイ':'Shinmei Co., Ltd.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'本社住所':'Headquarters' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'〒103-0002<br>東京都中央区日本橋馬喰町2-3-3　ファッションフェイスビル3F/4F':'Fashion Face Building 3F/4F, 2-3-4 Nihonbashi Bakurocho, Chuo-ku, Tokyo, 103-0002, JAPAN' ?></td>
				</tr>
				<tr>
					<th>URL</th>
					<td>https://www.co-shinmei.com/</td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'設立':'Establishment' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'昭和39年10月19日':'October 19, 1964' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'資本金':'Capital' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'4,200万円':'JPY 42 million' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'代表取締役':'CEO' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'吉井　貞夫':'Sadao Yoshii' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'従業員数':'Number of employees' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'56名（平成26年6月現在）':'64 (As of March, 2017)' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'決算期':'End of fiscal period' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'3月（年1回）':'March (Once a year)' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'取締役':'Director' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'井上　孝治<br>金井　博明<br>神田　竜一<br>山野　茂明':'Kouji Inoue<br>Hiroaki Kanai<br>Ryuichi Kanda<br>Shigeru Yamano' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'主要取引銀行':'Bank' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'三井住友銀行<br>みずほ銀行<br>城南信用金庫':'SMBC<br>Mizuho Bank<br>Johnan Shinkin Bank' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'事業内容':'Business' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ダイレクトサーマルプリンター、オートラベラー、チェックスタンパー、消耗品等の製造、販売、保守':'Manufacturing, sales and support of direct thermal printer, auto labeler, check stamper, consumables etc.' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'営業所':'Sales office' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'東京・大阪・名古屋・九州・東北・新潟・松本':'Tokyo, Osaka, Nagoya, Kyushu, Tohoku, Niigata, Matsumoto' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'工場':'Factory' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'佐久・長野':'Saku, Nagano' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'海外':'Overseas' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'中国（現地法人）':'China (Local corporation)' ?></td>
				</tr>
			</tbody>
		</table>
		<div class="image-area">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/company/about.jpg" alt="企業情報" width="600" />
		</div>
	</div>

</main>

<?php get_footer(); ?>