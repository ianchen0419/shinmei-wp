<?php /* Template Name: material */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'資料ダウンロード':'Product Brochure Download' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active"><?php echo (get_current_blog_id()==1)?'入力':'Input' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'確認':'Confirmation' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'資料ダウンロード':'Download' ?></li>
		</ol>

		<?php if(get_current_blog_id()!==1){ ?>
		<!-- 英語用 -->
		<p class="red-text">Please fill in the form in English.</p>
		<?php } ?>
		
		<p><?php echo (get_current_blog_id()==1)?'この度は資料ダウンロードのご希望をいただき、誠にありがとうございます。<br>必要な項目をご記入の上、「入力内容を確認する」ボタンをクリックしてください。<br>情報入力後に資料ダウンロードページが表示されます。':'Thank you for your interest in downloading Shinmei\'s product brochure.<br>Please fill in the required items and press the "Next" button.<br>After entering the information, the document download page is displayed.' ?></p>
		<form action="<?php bloginfo('url') ?>/material/conf" method="POST">
			
			<table width="100%" class="single-table">
				<tbody>
					<?php if(get_current_blog_id()!==1){ ?>
					<!-- 英語用 -->
					<tr>
						<th width="20%">Product Brochure</th>
						<td width="80%">
							<h4>General</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data1"/>
								<i class="fa fa-check"></i>
								<span>Total Product Brochure</span>
							</label>
							<h4>Direct Thermal Printer</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data2"/>
								<i class="fa fa-check"></i>
								<span>Desktop Direct Thermal Printer</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data3"/>
								<i class="fa fa-check"></i>
								<span>Direct Thermal Printer for Packaging Machine</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data4"/>
								<i class="fa fa-check"></i>
								<span>Desktop Type Roll Film Direct Thermal Printer</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data5"/>
								<i class="fa fa-check"></i>
								<span>Desktop Type Semi Auto Printer</span>
							</label>
							<h4>Auto Labeler</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data6"/>
								<i class="fa fa-check"></i>
								<span>Auto Labeler ALS-350 Series</span>
							</label>
						</td>
					</tr>
					<?php }else{ ?>
					<!-- 日本語用 -->
					<tr>
						<th width="20%">
							<span>ご希望の資料</span>
						</th>
						<td width="80%">
							<h4>サーマルダイレクトプリンター</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data1"/>
								<i class="fa fa-check"></i>
								<span>卓上型ダイレクトサーマルプリンター<br>ＳＭＰ-３５０シリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data2"/>
								<i class="fa fa-check"></i>
								<span>卓上型一体ダイレクトサーマルプリンター<br>ＡＦＢ-３５０シリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data3"/>
								<i class="fa fa-check"></i>
								<span>両面同時ダイレクトサーマルプリンター<br>ＣＰＳ-ＵＢシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data4"/>
								<i class="fa fa-check"></i>
								<span>小袋用ダイレクトサーマルプリンター<br>ＣＰＳ-８５Ｅシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data5"/>
								<i class="fa fa-check"></i>
								<span>ロールフィルムプリントシステム<br>ＲＰＳシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data6"/>
								<i class="fa fa-check"></i>
								<span>包装機対応ダイレクトサーマルプリンター<br>ＳＣＳ-４１０シリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data7"/>
								<i class="fa fa-check"></i>
								<span>大袋用ダイレクトサーマルプリンター<br>ＳＭＰ-６５０シリーズ</span>
							</label>
							<h4>オートラベラー</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data8"/>
								<i class="fa fa-check"></i>
								<span>卓上型空袋ラベラー<br>ＡＬＳ-３５０Ｎシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data9"/>
								<i class="fa fa-check"></i>
								<span>インラインオートラベリングシステム<br>ＡＬＳ-１００Ⅱシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data10"/>
								<i class="fa fa-check"></i>
								<span>ボトルラベラーK.I.2001</span>
							</label>
							<h4>鶏卵用</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data11"/>
								<i class="fa fa-check"></i>
								<span>鶏卵パック上貼り機<br>ＡＬＳ-１０００ＳＣＳシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data12"/>
								<i class="fa fa-check"></i>
								<span>インパックラベル日付印字プリンター<br>ＣＰＳ-８５ＥⅢシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data13" />
								<i class="fa fa-check"></i>
								<span>鶏卵中身有無装置</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data14" />
								<i class="fa fa-check"></i>
								<span>鶏卵ライン用日付検査カメラ</span>
							</label>
							<h4>フィーダー・スタッカー</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data15" />
								<i class="fa fa-check"></i>
								<span>フィーダー・スタッカー</span>
							</label>
							<h4>チェックスタンパー</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data16" />
								<i class="fa fa-check"></i>
								<span>自動汎用計数押印機<br>ＣＳシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data17" />
								<i class="fa fa-check"></i>
								<span>手形振出・裏書用押印機<br>ＣＳ-ＢⅡシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data18" />
								<i class="fa fa-check"></i>
								<span>パンフレットスタンパー</span>
							</label>
							<h4>その他</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data19" />
								<i class="fa fa-check"></i>
								<span>ラベル / シール</span>
							</label>
						</td>
					</tr>
					<?php } ?>
					
					<tr>
						<th>
							<span><?php echo (get_current_blog_id()==1)?'資料入手の目的':'Purpose' ?></span>
							<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
						</th>
						<td>
							<label class="radio">
								<input type="radio" name="your_purpose" required value="<?php echo (get_current_blog_id()==1)?'新規導入の検討':'New introduction' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'新規導入の検討':'New introduction' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_purpose" required value="<?php echo (get_current_blog_id()==1)?'入れ替え導入の検討':'Replacement' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'入れ替え導入の検討':'Replacement' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_purpose" required value="<?php echo (get_current_blog_id()==1)?'試験導入の検討':'Test introduction' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'試験導入の検討':'Test introduction' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_purpose" required value="<?php echo (get_current_blog_id()==1)?'情報収集':'Collecting information' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'情報収集':'Collecting information' ?></span>
							</label>
						</td>
					</tr>
					<tr>
						<th>
							<span><?php echo (get_current_blog_id()==1)?'導入ご希望予定時期':'Schedule' ?></span>
							<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
						</th>
						<td>
							<label class="radio">
								<input type="radio" name="your_schedule" required value="<?php echo (get_current_blog_id()==1)?'すぐにでも':'Soon' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'すぐにでも':'Soon' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_schedule" required value="<?php echo (get_current_blog_id()==1)?'1ヶ月以内':'Within 1 month' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'1ヶ月以内':'Within 1 month' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_schedule" required value="<?php echo (get_current_blog_id()==1)?'3ヶ月以内':'Within 3 months' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'3ヶ月以内':'Within 3 months' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_schedule" required value="<?php echo (get_current_blog_id()==1)?'半年以内':'Within half a year' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'半年以内':'Within half a year' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_schedule" required value="<?php echo (get_current_blog_id()==1)?'1年以内':'Within a year' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'1年以内':'Within a year' ?></span>
							</label>
							<label class="radio">
								<input type="radio" name="your_schedule" required value="<?php echo (get_current_blog_id()==1)?'未定':'Undecided' ?>" />
								<div class="radio-widget"></div>
								<span><?php echo (get_current_blog_id()==1)?'未定':'Undecided' ?></span>
							</label>
						</td>
					</tr>
				</tbody>
			</table>
			
			<div class="form-center">
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'貴社名':'Company' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="text" name="your_company" class="short" required />
					<input type="text" name="your_company_furigana" placeholder="フリガナ" class="short" required <?php echo (get_current_blog_id()==1)?'':'hidden disabled' ?> />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'業種':'Industry' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="text" name="your_career_type" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'部署名':'Department / Section' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="text" name="your_division" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'役職名':'Position' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="text" name="your_job_title" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'ご担当者名':'Name' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="text" name="your_name" class="short" required />
					<input type="text" name="your_name_furigana" class="short" required placeholder="フリガナ" <?php echo (get_current_blog_id()==1)?'':'hidden disabled' ?> />
				</div>
				<?php if(get_current_blog_id()!==1){ ?>
				<!-- 英語用 -->
				<div class="contact-item">
					<div class="title">
						<span>Address</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_address" required />
				</div>
				<?php }else{ ?>
				<!-- 日本語用 -->
				<div class="contact-item">
					<div class="title">
						<span>所在地</span>
						<div class="badge">必須</div>
					</div>
					<div>
						<input type="number" name="your_postcode" id="postcode" class="short" required placeholder="例:1500047" maxlength="7" />
						<button class="blue-button" id="postButton" type="button" onclick="jsonp()">
							<i class="fa fa-search"></i>
							<span>郵便番号から<br>住所を自動入力</span>
						</button>
					</div>
					<div>
						<div id="dropdownWrapper">
							<div class="dropdown-bar" tabindex=0 onclick="dropdownWrapper.classList.toggle('show')">
								<input id="dropdownInput" type="text" autocomplete="new-password" name="your_address1" tabindex="-1" required="required" placeholder="都道府県を選択してください" />
							</div>
							<div class="dropdown-content">
								<div class="dropdown-option" onclick="choose(this.innerText)">北海道</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">青森県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">岩手県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">宮城県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">秋田県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">山形県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">福島県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">茨城県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">栃木県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">群馬県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">埼玉県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">千葉県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">東京都</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">神奈川県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">新潟県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">富山県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">石川県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">福井県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">山梨県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">長野県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">岐阜県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">静岡県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">愛知県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">三重県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">滋賀県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">京都府</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">大阪府</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">兵庫県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">奈良県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">和歌山県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">鳥取県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">島根県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">岡山県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">広島県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">山口県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">徳島県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">香川県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">愛媛県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">高知県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">福岡県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">佐賀県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">長崎県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">熊本県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">大分県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">宮崎県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">鹿児島県</div>
								<div class="dropdown-option" onclick="choose(this.innerText)">沖縄県</div>
							</div>
						</div>
						<input type="text" name="your_address2" id="address2" class="short" required placeholder="市区町村" />
					</div>
					<div>
						<input type="text" name="your_address3" required placeholder="番地、建物、フロア/部屋番号等" />
					</div>
					<p>＊代理店の方は、顧客の所在地を選択してください。<br>不明な場合は、貴社の所在地を選択してください。</p>
				</div>
				<?php } ?>

				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'電話番号':'Phone number' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="tel" name="your_phone" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'メールアドレス':'Email Address' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="email" name="your_mail" required oninput="confirmMail.disabled=false" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'メールアドレス（確認用）':'Email Address (Again)' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="email" name="your_mail_confirm" id="confirmMail" required onblur="checkEmail(this)" oninput="checkEmail(this)" disabled />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'ホームページアドレス':'URL' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input type="url" name="your_website" required />
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required />
					<i class="fa fa-check"></i>
					<span><?php echo (get_current_blog_id()==1)?'「':'I agree with' ?></span><a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text"><?php echo (get_current_blog_id()==1)?'個人情報保護方針':'&nbsp;privacy policy' ?></a><span><?php echo (get_current_blog_id()==1)?'」に同意する':'.' ?></span>
				</label>
				<div class="badge agree-badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
			</div>
				
			<div class="button-area">
				<input type="submit" value="<?php echo (get_current_blog_id()==1)?'入力内容を確認する':'Next' ?>" class="submit-button" />
			</div>

		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption><?php echo (get_current_blog_id()==1)?'このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。':'This site is certified by JPRS. Information transmission is protected by encryption.' ?></figcaption>
		</figure>

	</div>

</main>

<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>