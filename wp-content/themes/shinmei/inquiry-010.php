<?php /* Template Name: inquiry-010 */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">印字テストのご依頼</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active">入力</li>
			<li>確認</li>
			<li>完了</li>
		</ol>
		<p>お問い合わせフォームのご利用ありがとうございます。<br>下記項目にご記入の上、「入力内容を確認する」ボタンを押してください。</p>

		<form action="<?php bloginfo('url') ?>/material/inquiry-010/conf" method="POST" class="mar_top40">
			<div class="form-center">
				<div class="contact-item">
					<div class="title">お問い合わせ内容</div>
					<p>印字テストのご依頼</p>
				</div>
				<div class="contact-item">
					<div class="title">印字・表示内容</div>
					<textarea name="print_content" cols="30" rows="10" placeholder="バーコード、賞味期限など日付、原材料など食品表示、商標、ブランド、QRコードなど印字や表示内容について"></textarea>
				</div>
				<div class="contact-item">
					<div class="title">印字・表示のサイズ</div>
					<input type="text" name="print_size" placeholder="縦  mm・横  mm" />
				</div>
				<div class="contact-item">
					<div class="title">印字・表示の色</div>
					<input type="text" name="print_color" placeholder="黒、白、赤、白ベタに黒等" />
				</div>
				<div class="contact-item">
					<div class="title">包装（印字対象）の材質</div>
					<input type="text" name="package_material" placeholder="＊袋：ポリ、アルミ等　＊ラベル：コード紙、合成紙等　＊その他" />
				</div>
				<div class="contact-item">
					<div class="title">包装（印字対象）のサイズ・厚さ</div>
					<input type="text" name="package_size" placeholder="縦  mm・横  mm" />
				</div>
				<div class="contact-item">
					<div class="title">包装（印字対象）の機能</div>
					<input type="text" name="package_function" placeholder="チェック付きなど" />
				</div>
				<div class="contact-item">
					<div class="title">充填から出荷までの工程</div>
					<input type="text" name="engineer_flow" placeholder="高温殺菌（ボイル、スチーム等）、常温、チルド、冷凍" />
				</div>
				<div class="contact-item">
					<div class="title">化学物質等の付着</div>
					<input type="text" name="chemical_element" placeholder="充填および出荷後の油・アルコールなど化学物質が付着する可能性" />
				</div>
				<div class="contact-item">
					<div class="title">印字サンプル用意枚数</div>
					<input type="text" name="sample_amount" placeholder="印字サンプルとしてご用意いただける包装の枚数（20枚以上をご用意ください）" />
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
			</div>
			
			<div class="button-area">
				<input type="submit" value="入力内容を確認する" class="submit-button" />
			</div>
		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption>このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。</figcaption>
		</figure>

	</div>

</main>
<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>