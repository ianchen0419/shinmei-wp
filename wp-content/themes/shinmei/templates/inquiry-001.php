<?php /* Template Name: inquiry-001 */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'製品についてのお問い合わせ':'Product inquiry' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active"><?php echo (get_current_blog_id()==1)?'入力':'Input' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'確認':'Confirmation' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'完了':'Complete' ?></li>
		</ol>
		<?php if(get_current_blog_id()!==1){ ?>
		<!-- 英語用 -->
		<p class="red-text">Please fill in the form in English.</p>
		<?php } ?>

		<p><?php echo (get_current_blog_id()==1)?'お問い合わせフォームのご利用ありがとうございます。<br>下記項目にご記入の上、「入力内容を確認する」ボタンを押してください。':'Thank you for your interest in our company.<br>Please fill in the required items and press the "Next" button.' ?></p>

		<form action="<?php bloginfo('url') ?>/material/inquiry-001/conf" method="POST" class="mar_top40">
			<div class="form-center">
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'製品名':'Product Name' ?></div>
					<p><?php echo (get_current_blog_id()==1)?'包装機用 超小型ダイレクトサーマルプリンター SCS':'Direct Thermal Printer for Packaging Machine SCS' ?></p>
				</div>
				<div class="contact-item threerow-checkbox">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'導入ご希望予定時期':'Schedule' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule1" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'すぐにでも':'Soon' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule2" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'1ヶ月以内':'Within 1 month' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule3" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'3ヶ月以内':'Within 3 months' ?></span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule4" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'半年以内':'Within half a year' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule5" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'1年以内':'Within 1 year' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule6" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'2年以内':'Within 2 years' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule7" />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'未定':'Undecided' ?></span>
						</label>
					</div>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'内容':'Purpose' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<label class="checkbox">
						<input type="checkbox" name="ask_type1" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'ご購入希望':'Purchase' ?></span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="ask_type2" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'お見積り希望':'Quotation' ?></span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="ask_type3" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'ご質問':'Question' ?></span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="ask_type4" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'その他':'Other' ?></span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'補足内容':'Message' ?></div>
					<textarea name="add_content" cols="30" rows="10" placeholder="<?php echo (get_current_blog_id()==1)?'補足事項があればご記入ください。':'' ?>"></textarea>
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'包装する製品の種類':'Type of product to be packaged' ?></div>
					<input type="text" name="package_type" />
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'包装機明細':'Packaging machine specifications' ?></div>
					<input type="text" name="machine_detail" placeholder="<?php echo (get_current_blog_id()==1)?'メーカー名・形式名':'' ?>" />
				</div>
				<div class="contact-item less-checkbox">
					<div class="title"><?php echo (get_current_blog_id()==1)?'包装機ピロー種類':'Packaging machine pillow type' ?></div>
					<label class="checkbox">
						<input type="checkbox" name="pillow_type1" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'縦ピロー':'Vertical pillow' ?></span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="pillow_type2" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'横ピロー':'Horizontal pillow' ?></span>
					</label>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title"><?php echo (get_current_blog_id()==1)?'包装機稼働方法':'Packaging machine operation method' ?></div>
					<label class="checkbox">
						<input type="checkbox" name="operate_method1" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'連続式':'Continuous type' ?></span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="operate_method2" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'間欠式':'Intermittent type' ?></span>
					</label>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title"><?php echo (get_current_blog_id()==1)?'印字内容':'Print contents' ?></div>
					<label class="checkbox">
						<input type="checkbox" name="print_content1" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'日付専用':'Date only' ?></span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="print_content2" />
						<i class="fa fa-check"></i>
						<span><?php echo (get_current_blog_id()==1)?'製造者、原材料などその他の一括表示':'Other collective display of manufacturers, raw materials, etc.' ?></span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'印字ピッチ':'Printing pitch' ?></div>
					<input type="text" name="print_pitch" placeholder="<?php echo (get_current_blog_id()==1)?'　mm〜　mm':'' ?>" />
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'印字ショット数':'Number of print shots' ?></div>
					<input type="text" name="print_short" placeholder="<?php echo (get_current_blog_id()==1)?'　回 / 　分':'' ?>" />
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'充填から出荷までの工程':'Process from filling to shipping' ?></div>
					<input type="text" name="engineer_flow" placeholder="<?php echo (get_current_blog_id()==1)?'高温殺菌（ボイル、スチーム等）、常温、チルド、冷凍':'' ?>" />
				</div>
				<div class="contact-item">
					<div class="title"><?php echo (get_current_blog_id()==1)?'化学物質等の付着':'Adhesion of chemical substances' ?></div>
					<input type="text" name="chemical_element" placeholder="<?php echo (get_current_blog_id()==1)?'充填および出荷後の油・アルコールなど化学物質が付着する可能性':'' ?>" />
				</div>

				<div class="contact-item less-checkbox" <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
					<div class="title">ご希望回答方法</div>
					<label class="checkbox">
						<input type="checkbox" name="your_answer1" />
						<i class="fa fa-check"></i>
						<span>訪問</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="your_answer2" />
						<i class="fa fa-check"></i>
						<span>電話</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="your_answer3" />
						<i class="fa fa-check"></i>
						<span>メール</span>
					</label>
				</div>
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

<script>
	var Acheckbox_first=document.querySelectorAll('input[name*="hope_schedule"]')[0];
	var Bchcekbox_first=document.querySelectorAll('input[name*="ask_type"]')[0];

	var allInputs=document.querySelectorAll('form input');

	var mustChecked='';
	if(location.href.indexOf('/en/')!==-1){
		mustChecked='Please select at least one.';
	}else{
		mustChecked='チェックボックスを最低一つ選んでください';
	}

	for(i=0;i<allInputs.length;i++){
		allInputs[i].addEventListener('change', function(){
			var Acheckbox_checked=document.querySelectorAll('input[name*="hope_schedule"]:checked');
			var Bcheckbox_checked=document.querySelectorAll('input[name*="ask_type"]:checked');
			if(Acheckbox_checked.length<1){
				Acheckbox_first.setCustomValidity(mustChecked);
			}else{
				Acheckbox_first.setCustomValidity("");
			}

			if(Bcheckbox_checked.length<1){
				Bchcekbox_first.setCustomValidity(mustChecked);
			}else{
				Bchcekbox_first.setCustomValidity("");
			}


		})
	}
</script>

<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>