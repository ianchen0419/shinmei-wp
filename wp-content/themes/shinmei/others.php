<?php /* Template Name: others */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'その他製品':'Other Products' ?></h1>
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
				<a href="<?php bloginfo('url') ?>/products/others"><?php echo (get_current_blog_id()==1)?'その他製品':'Other Products' ?></a>
			</li>
		</ol>

		<div class="section-title full-line">
			<h2><?php echo (get_current_blog_id()==1)?'鶏卵中身有無検査装置':'Egg content detection device' ?></h2>
			<div class="tag">鶏卵GPセンター様向け</div>
		</div>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'従来の卵抜け検出と比べ、より高精度にたまごの有無・中身落ちを検出します！':'Compared to the conventional egg loss detection, it detects the presence / absence and content loss of eggs with higher accuracy!' ?></h3>
		</div>
		<div class="image-and-text">
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/products/others_01.jpg" alt="鶏卵中身有無検査装置" width="200" />
			</div>
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'マイクロ波という微弱な電波を利用し、より正確にたまごの有無の検査を行います。いままでの透過センサーと違いマイクロ波センサーは、たまごの中の水分をチェックするという全く新しい検査方式です。インパックラベル、上貼りシール、豆シールの有無などの他、容器形状の影響を受けずに検査可能です。':'This device uses the weak radio waves of microwaves to more accurately check for the presence of eggs. Unlike conventional transmission sensors, microwave sensors are a completely new inspection method that checks moisture in eggs. It enables you to inspect without the influence of the container shape, in addition to the presence of in-pack label, top paste seal, bean seal etc.' ?></p>
				<p><?php echo (get_current_blog_id()==1)?'透明パック、モールドパック問わずフタを閉めたままで、卵自体の有無も同時にチェックできますし、より高精度な玉抜け検査装置として貴社GPラインの末端に設備されることをおすすめいたします。':'You can check the presence of the egg while closed the lid regardless of the transparent pack and the mold pack. In addition, we recommend you to install at the end of your GP line as an accurate ball drop inspection device.' ?></p>
			</div>
		</div>

		<div class="section-title full-line">
			<div class="type"><?php echo (get_current_blog_id()==1)?'チケットプリンター':'Ticket printer' ?></div>
			<h2>SP-1800</h2>
			<div class="tag">金融・経理部門様向け</div>
		</div>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'窓口業務がスムーズになる発券機':'Ticketing machine that helps counter services' ?></h3>
		</div>
		<div class="image-and-text">
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/products/others_04.jpg" alt="SP-1800" width="200" />
			</div>
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'病院・薬局や、銀行などの順番待ちに最適！<br>他、工場内の商品管理の札や、図書館などの返却期限の表示チケットにも使用されています。':'Best solution for hospitals, pharmacies, banks, etc.!<br>It is also used as a tag for product management in the factory, and a display ticket for return deadlines at libraries.' ?></p>
				<ul type="square">
					<li><?php echo (get_current_blog_id()==1)?'高速印字':'High speed printing' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'チケットが自動で２枚出しが可能。(1～99枚)':'It prints two tickets automatically. (1 to 99 sheets)' ?></li>
					<li><?php echo (get_current_blog_id()==1)?'日々のデータが集計できますので、スタッフの作業効率アップが図られます。':'You can summarize daily data, and it helps improve work efficiency.' ?></li>
				</ul>
			</div>
		</div>

		<div class="section-title full-line">
			<div class="type"><?php echo (get_current_blog_id()==1)?'鶏卵ライン用　日付検査カメラ':'Date inspection camera for egg line' ?></div>
			<h2>PC-10</h2>
			<div class="tag">鶏卵GPセンター様向け</div>
		</div>
		<div class="image-and-text">
			<div class="image-part">
				<img src="<?php bloginfo('template_directory') ?>/inc/img/products/others_05.jpg" alt="PC-10" width="200" />
			</div>
			<div class="text-part">
				<p><?php echo (get_current_blog_id()==1)?'本機は卵パックラベルに印字した「賞味期限」・「パック日」の日付不良印字の間違いを高精度カメラでチェックするシステムです。':'This machine is equipped with a system that uses a high-precision camera and checks for errors in the date printouts of "Expiration date" and "Packed date" printed on egg pack labels.' ?></p>
			</div>
		</div>

		<div class="section-title">
			<h2><?php echo (get_current_blog_id()==1)?'仕様一覧（出荷国により電源など製品仕様は異なる場合があります。）':'Specifications (It may be different depending on the destination country.)' ?></h2>
		</div>
		<div class="deco-title">
			<h3><?php echo (get_current_blog_id()==1)?'鶏卵中身有無装置':'Egg content check device' ?></h3>
		</div>
		<table width="100%" class="fertilizer-table">
			<tbody>
				<tr>
					<th width="25%"><?php echo (get_current_blog_id()==1)?'処理能力':'Capacity' ?></th>
					<td width="75%"><?php echo (get_current_blog_id()==1)?'最大80パック/分':'Max. 80 packs/min' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'コンベア速度':'Conveyor speed' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'最大30M/分':'Max. 30M/min' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'対応ワーク':'Work' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'S～LLサイズ ミックス対応可能':'S-LL size mix available' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'対応包装形態':'Packing type' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'透明パック・モールドパック供用<br>(上貼りシール、インパックラベル、豆シール貼付後も検査可能)':'Transparent pack / mold pack<br>(Applicable to after pasting seal, in-pack label, and bean seal)' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'対応包装個数':'Number of packages' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'10，8，6，4個入<br>12個対応はコンベア長1,500mmとなります':'10,8,6,4 pieces<br>Conveyor length: 1,500 mm for 12 pieces' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'操作表示部':'Operation display' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'4型タッチパネル':'4 type touch panel' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'電源':'Power supply' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'AC100V 3A (コンベア別)':'AC100V 3A (without conveyor)' ?></td>
				</tr>
			</tbody>
		</table>

		<div class="deco-title">
			<h3>SP-1800</h3>
		</div>
		<table class="type-table combo-table" width="100%">
			<thead>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'型式':'Model' ?></th>
					<th>SP-1800</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字方式':'Printing method' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'感熱サーマル':'Thermal' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'ドット密度（ドット／mm）':'Dot density (Dots/mm)' ?></th>
					<td>8</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'ドット総数（ドット）':'Total number of dots (dots)' ?></th>
					<td>432</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字速度':'Print speed' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'max 200mm/秒':'max 200mm/sec' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'最大印字有効幅（mm）':'Maximum printing effective width (mm)' ?></th>
					<td>54</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字有効長（mm）':'Effective printing length (mm)' ?></th>
					<td>40～140</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'紙幅（mm）':'Paper width (mm)' ?></th>
					<td>58</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'指定記録紙':'Designated recording paper' ?></th>
					<td>JR-221</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'カッター寿命':'Cutter life' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'50万カット':'500,000 cuts' ?></td>
				</tr>
				<tr>
					<th width="10%" rowspan="2"><?php echo (get_current_blog_id()==1)?'ヘッド寿命':'Head life' ?></th>
					<th width="15%"><?php echo (get_current_blog_id()==1)?'耐パルス性 ※1':'Pulse resistance ※1' ?></th>
					<td width="75%"><?php echo (get_current_blog_id()==1)?'10000万パルス':'100 million pulses' ?></td>
				</tr>
				<tr>
					<th><?php echo (get_current_blog_id()==1)?'耐摩耗性 ※1':'Wear resistance ※1' ?></th>
					<td>100Km</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字内容':'Print contents' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'受付番号・受付時間バーコード・任意文字線・イメージ・QRｺｰﾄﾞ(固定)':'Reception number, reception time barcode, arbitrary character<br>Line, image, QR code (fixed)' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字文字 ※2':'Print character ※2' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ANK 160文字8×16 ﾄﾞｯﾄ 16×16 ﾄﾞｯﾄ<br>16×24 ﾄﾞｯﾄ 24×24 ﾄﾞｯﾄ<br>32×32 ﾄﾞｯﾄ 56×56 ﾄﾞｯﾄ<br>漢字<br>16×16 ﾄﾞｯﾄ 24×24 ﾄﾞｯﾄ':'ANK 160 characters 8×16 dots 16×16 dots<br>16×24 dots 24×24 dots<br>32×32 dots 56x56 dots<br>Chinese characters<br>16×16 dots 24×24 dots' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'文字拡大機能':'Text enlargement' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'縦・横 各4倍':'Vertical and horizontal 4 times each' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字方向':'Print direction' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'リスタ／テキスタ':'Lister / Texter' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'バーコード種類':'Barcode type' ?></th>
					<td>2of7(NW7), 3of9(CODE39),CODE128,JAN,ITF,QR</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'カッター':'Cutter' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'フルカット／1点残し':'Full cut / 1 point left' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'印字データ':'Print data' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'SD・SDHCカードに記憶 (8GBまで対応)':'Store on SD / SDHC card (support up to 8GB)' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'表示':'Display' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'LCD 16桁 2行 ｷｬﾗｸﾀ':'LCD 16 digit 2 line character' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'入力、表示、その他機能':'Input, display, other functions' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'発券ボタン磁気カード(JIS-Ⅱ)<br>順番待ち機能 (表示器連動)<br>番号リセット時間設定<br>2枚出し設定<br>2タイプ印字<br>スキップNO.機能<br>発券（呼出）集計印刷<br>集計履歴CSV保存':'Ticketing button magnetic card (JIS-II)<br>Waiting-to-order function (Indicator link)<br>Number reset time setting<br>Two sheet out setting<br>2 type printing<br>Skip NO. Function<br>Ticketing (calling) tabulation printing<br>Summary history save as CSV' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'外部インターフェース':'External interface' ?></th>
					<td>LAN(TCP/IP) or RS-232C</td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'外形寸法':'External dimensions' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'214.2mm（幅）×195.6mm（高さ）×245.6mm（奥行）':'214.2 mm (width) × 195.6 mm (height) × 245.6 mm (depth)' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'電源、消費電力':'Power supply, power consumption' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'AC85～132V 50/60HZ 待機時 6W 印字時 54W (KCのみ76W) ※3':'AC 85 to 132 V 50/60 Hz   Standby 6W Print 54W (KC only 76W) ※3' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'使用環境 ※4':'Operating environment ※4' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'温度 5℃～40℃湿度 35％～80％RH（結露なきこと）':'Temperature 5°C~40°C  Humidity 35%!80% RH (no condensation)' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'重量':'Weight' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'約4.6kg':'Approx. 4.6kg' ?></td>
				</tr>
				<tr>
					<th colspan="2"><?php echo (get_current_blog_id()==1)?'付属品':'Accessories' ?></th>
					<td><?php echo (get_current_blog_id()==1)?'ﾛｰﾙ紙(JR-221) 1巻 ｸﾘｰﾆﾝｸﾞﾍﾟﾝ 1本 SDｶｰﾄﾞ 1枚':'Roll paper (JR-221) Volume 1 cleaning pen 1 SD card 1 sheet' ?></td>
				</tr>
			</tbody>
			<caption class="bottom"><?php echo (get_current_blog_id()==1)?'※1 ゴミ・異物による損傷がない場合（及び駆動条件による）<br>※2 専用PCｿﾌﾄと書体は異なります。略字、非対応等、PC上表示と一部異なる場合があります。<br>※3 黒字率40%<br>※4 印字品質は除く<br>':'※1 In the situation there is no damage due to dust or foreign matter (and depending on the driving conditions)<br>※2 Fonts are different from designated PC software. Some abbreviations, non-correspondence, etc. may differ from those displayed on the PC.<br>※3 Black character rate 40%<br>※4 Print quality excluded' ?></caption>
		</table>
		
	</div>
</main>

<?php get_footer(); ?>