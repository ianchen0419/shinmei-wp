<?php /* Template Name: inquiry-004 */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">製品についてのお問い合わせ</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active">入力</li>
			<li>確認</li>
			<li>完了</li>
		</ol>
		<p>お問い合わせフォームのご利用、誠にありがとうございます。<br>必要な項目をご記入の上、「記入内容を確認」ボタンをクリックしてください。</p>

		<form action="<?php bloginfo('url') ?>/material/inquiry-004/conf" method="POST" class="mar_top40">
			<div class="contact-item">
				<div class="title">製品名</div>
				<textarea id="inquiry004" class="product-name" name="product_name" rows="3"></textarea>
			</div>
			<div class="contact-item threerow-checkbox">
				<div class="title">
					<span>導入ご希望予定時期</span>
					<div class="badge">必須</div>
				</div>
				<div class="mar_top10">
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule1" />
						<i class="fa fa-check"></i>
						<span>すぐにでも</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule2" />
						<i class="fa fa-check"></i>
						<span>1ヶ月以内</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule3" />
						<i class="fa fa-check"></i>
						<span>3ヶ月以内</span>
					</label>
				</div>
				<div>
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule4" />
						<i class="fa fa-check"></i>
						<span>半年以内</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule5" />
						<i class="fa fa-check"></i>
						<span>1年以内</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule6" />
						<i class="fa fa-check"></i>
						<span>2年以内</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="hope_schedule7" />
						<i class="fa fa-check"></i>
						<span>未定</span>
					</label>
				</div>
			</div>
			<div class="contact-item less-checkbox">
				<div class="title">
					<span>内容</span>
					<div class="badge">必須</div>
				</div>
				<label class="checkbox">
					<input type="checkbox" name="ask_type1" />
					<i class="fa fa-check"></i>
					<span>ご購入希望</span>
				</label>
				<label class="checkbox">
					<input type="checkbox" name="ask_type2" />
					<i class="fa fa-check"></i>
					<span>お見積り希望</span>
				</label>
				<label class="checkbox">
					<input type="checkbox" name="ask_type3" />
					<i class="fa fa-check"></i>
					<span>ご質問</span>
				</label>
				<label class="checkbox">
					<input type="checkbox" name="ask_type4" />
					<i class="fa fa-check"></i>
					<span>その他</span>
				</label>
			</div>
			<div class="contact-item">
				<div class="title">補足内容</div>
				<textarea name="add_content" cols="30" rows="10" placeholder="補足事項があればご記入ください。"></textarea>
			</div>
			<div class="contact-item">
				<div class="title">現在の方法</div>
				<input type="text" name="now_method" placeholder="手貼り（シート・ロール状）、自動貼りなど" />
			</div>
			<div class="contact-item">
				<div class="title">印字対象の1日の使用量</div>
				<input type="text" name="print_amount" placeholder="何枚" />
			</div>
			<div class="contact-item">
				<div class="title">被写体の種類</div>
				<input type="text" name="copy_type" placeholder="＊袋：ポリ、アルミ　＊チェック付き　＊立体物（箱・ボトル等）" />
			</div>
			<div class="contact-item">
				<div class="title">ラベルの種類</div>
				<input type="text" name="label_type" placeholder="コート紙・合成紙・その他" />
			</div>
			<div class="contact-item">
				<div class="title">ラベルのサイズ・厚さ</div>
				<input type="text" name="label_size" placeholder="縦　mm・横　mm・厚さ　mm" />
			</div>
			<div class="contact-item">
				<div class="title">充填から出荷までの工程</div>
				<input type="text" name="engineer_flow" placeholder="高温殺菌（ボイル、スチーム等）、常温、チルド、冷凍" />
			</div>
			<div class="contact-item">
				<div class="title">化学物質等の付着</div>
				<input type="text" name="chemical_element" placeholder="充填および出荷後の油・アルコールなど化学物質が付着する可能性" />
			</div>

			<div class="contact-item less-checkbox">
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
					<span>貴社名</span>
					<div class="badge">必須</div>
				</div>
				<input type="text" name="your_company" class="short" required />
				<input type="text" name="your_company_furigana" placeholder="フリガナ" class="short" required />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>業種</span>
					<div class="badge">必須</div>
				</div>
				<input type="text" name="your_career_type" required />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>部署名</span>
					<div class="badge">必須</div>
				</div>
				<input type="text" name="your_division" required />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>役職名</span>
					<div class="badge">必須</div>
				</div>
				<input type="text" name="your_job_title" required />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>ご担当者名</span>
					<div class="badge">必須</div>
				</div>
				<input type="text" name="your_name" class="short" required />
				<input type="text" name="your_name_furigana" class="short" required placeholder="フリガナ" />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>所在地</span>
					<div class="badge">必須</div>
				</div>
				<div>
					<input type="number" name="your_postcode" id="postcode" class="short" required placeholder="例:1500047" maxlength="7" />
					<button class="blue-button" id="postButton" type="button" onclick="jsonp(postcode.value)">
						<i class="fa fa-search"></i>
						<span>郵便番号から<br>住所を自動入力</span>
					</button>
				</div>
				<div>
					<div id="dropdownWrapper">
						<div class="dropdown-bar" tabindex=0 onclick="dropdownWrapper.classList.toggle('show')">
							<input id="dropdownInput" type="text" autocomplete="new-password" name="your_address1" required="required" placeholder="都道府県を選択してください"/>
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
			<div class="contact-item">
				<div class="title">
					<span>電話番号</span>
					<div class="badge">必須</div>
				</div>
				<input type="tel" name="your_phone" required />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>メールアドレス</span>
					<div class="badge">必須</div>
				</div>
				<input type="email" name="your_mail" required oninput="confirmMail.disabled=false" />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>メールアドレス（確認用）</span>
					<div class="badge">必須</div>
				</div>
				<input type="email" name="your_mail_confirm" id="confirmMail" required onblur="checkEmail(this)" oninput="checkEmail(this)" disabled />
			</div>
			<div class="contact-item">
				<div class="title">
					<span>ホームページアドレス</span>
				</div>
				<input type="url" name="your_website" />
			</div>

			<label class="checkbox agree-checkbox">
				<input type="checkbox" name="your_agree" required />
				<i class="fa fa-check"></i>
				<span>「</span><a href="privacy.html" target="_blank" class="link-text">個人情報保護方針</a><span>」に同意する</span>
			</label>
			<div class="badge agree-badge">必須</div>
			
			<div class="button-area">
				<input type="submit" value="入力内容を確認する" class="submit-button" />
			</div>
		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/download/jprs.png" alt="jprs" />
			<figcaption>このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。</figcaption>
		</figure>

	</div>

</main>

<script>
	var Acheckbox_first=document.querySelectorAll('input[name*="hope_schedule"]')[0];
	var Bchcekbox_first=document.querySelectorAll('input[name*="ask_type"]')[0];

	var allInputs=document.querySelectorAll('form input');

	for(i=0;i<allInputs.length;i++){
		allInputs[i].addEventListener('change', function(){
			var Acheckbox_checked=document.querySelectorAll('input[name*="hope_schedule"]:checked');
			var Bcheckbox_checked=document.querySelectorAll('input[name*="ask_type"]:checked');
			if(Acheckbox_checked.length<1){
				Acheckbox_first.setCustomValidity("チェックボックスを最低一つ選んでください");
			}else{
				Acheckbox_first.setCustomValidity("");
			}

			if(Bcheckbox_checked.length<1){
				Bchcekbox_first.setCustomValidity("チェックボックスを最低一つ選んでください");
			}else{
				Bchcekbox_first.setCustomValidity("");
			}


		})
	}

	//製品名を代入
	if(window['inquiry004']){
		inquiry004.value=localStorage['inquiry004'];
	}else{
		localStorage['inquiry004']='';
	}
</script>


<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>