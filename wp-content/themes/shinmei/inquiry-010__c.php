<?php /* Template Name: inquiry-010__c */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">印字テストのご依頼</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>入力</li>
			<li class="active">確認</li>
			<li>完了</li>
		</ol>
		<p>ご記入内容をお確かめの上、送信ボタンを押してください。</p>

		<?php 	
		if ($_SESSION['conf']!=true){ ?>
		<form action="" method="POST" hidden>
		<?php }else{ ?>
		<form action="<?php bloginfo('url') ?>/material/inquiry-010/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">お問い合わせ内容</div>
					<p>印字テストのご依頼</p>
				</div>
				<div class="contact-item">
					<div class="title">印字・表示内容</div>
					<textarea name="print_content" cols="30" rows="10" readonly disabled><?php echo $_POST['print_content'] ?></textarea>
				</div>
				<div class="contact-item">
					<div class="title">印字・表示のサイズ</div>
					<input type="text" name="print_size" readonly disabled value="<?php echo $_POST['print_size'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">印字・表示の色</div>
					<input type="text" name="print_color" readonly disabled value="<?php echo $_POST['print_color'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">包装（印字対象）の材質</div>
					<input type="text" name="package_material" readonly disabled value="<?php echo $_POST['package_material'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">包装（印字対象）のサイズ・厚さ</div>
					<input type="text" name="package_size" readonly disabled value="<?php echo $_POST['package_size'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">包装（印字対象）の機能</div>
					<input type="text" name="package_function" readonly disabled value="<?php echo $_POST['package_function'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">充填から出荷までの工程</div>
					<input type="text" name="engineer_flow" readonly disabled value="<?php echo $_POST['engineer_flow'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">化学物質等の付着</div>
					<input type="text" name="chemical_element" readonly disabled value="<?php echo $_POST['chemical_element'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">印字サンプル用意枚数</div>
					<input type="text" name="sample_amount" readonly disabled value="<?php echo $_POST['sample_amount'] ?>" />
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">ご希望回答方法</div>
					<label class="checkbox">
						<input type="checkbox" name="your_answer[]" reaonly disabled <?php echo isset($_POST['your_answer1'])?'checked':''; ?> value="訪問" />
						<i class="fa fa-check"></i>
						<span>訪問</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="your_answer[]" reaonly disabled <?php echo isset($_POST['your_answer2'])?'checked':''; ?> value="電話" />
						<i class="fa fa-check"></i>
						<span>電話</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="your_answer[]" reaonly disabled <?php echo isset($_POST['your_answer3'])?'checked':''; ?> value="メール" />
						<i class="fa fa-check"></i>
						<span>メール</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">
						<span>貴社名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_company" class="short" required value="<?php echo $_POST['your_company'] ?>" />
					<input disabled readonly type="text" name="your_company_furigana" class="short" required value="<?php echo $_POST['your_company_furigana'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>業種</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_career_type" required value="<?php echo $_POST['your_career_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>部署名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_division" required value="<?php echo $_POST['your_division'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>役職名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_job_title" required value="<?php echo $_POST['your_job_title'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>ご担当者名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_name" class="short" required value="<?php echo $_POST['your_name'] ?>" />
					<input disabled readonly type="text" name="your_name_furigana" class="short" required value="<?php echo $_POST['your_name_furigana'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>所在地</span>
						<div class="badge">必須</div>
					</div>
					<div>
						<input disabled readonly type="number" name="your_postcode" id="postcode" class="short" required maxlength="7" value="<?php echo $_POST['your_postcode'] ?>" />
					</div>
					<div>
						<div id="dropdownWrapper">
							<div class="dropdown-bar disabled">
								<input id="dropdownInput" type="text" autocomplete="new-password" name="your_address1" required="required" value="<?php echo $_POST['your_address1'] ?>" disabled readonly />
							</div>
						</div>
						<input disabled readonly type="text" name="your_address2" id="address2" class="short" required value="<?php echo $_POST['your_address2'] ?>" />
					</div>
					<div>
						<input disabled readonly type="text" name="your_address3" required value="<?php echo $_POST['your_address3'] ?>" />
					</div>
					<p>＊代理店の方は、顧客の所在地を選択してください。<br>不明な場合は、貴社の所在地を選択してください。</p>
				</div>
				<div class="contact-item">
					<div class="title">
						<span>電話番号</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="tel" name="your_phone" required value="<?php echo $_POST['your_phone'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="email" name="your_mail" required value="<?php echo $_POST['your_mail'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス（確認用）</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="email" name="your_mail_confirm" required value="<?php echo $_POST['your_mail_confirm'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>ホームページアドレス</span>
					</div>
					<input disabled readonly type="url" name="your_website" value="<?php echo $_POST['your_website'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>内容</span>
					</div>
					<textarea name="your_message" disabled readonly cols="30" rows="10"><?php echo $_POST['your_message'] ?></textarea>
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" disabled checked readonly name="your_agree" required />
					<i class="fa fa-check"></i>
					<span>「</span><a href="privacy.html" target="_blank" class="link-text">個人情報保護方針</a><span>」に同意する</span>
				</label>
				<div class="badge agree-badge">必須</div>
			</div>
			
			<div class="button-area">
				<button type="button" class="cancel-button" onclick="history.back();">戻る</button>
				<input type="submit" value="送信" class="submit-button" />
			</div>
		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/download/jprs.png" alt="jprs" />
			<figcaption>このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。</figcaption>
		</figure>

	</div>

</main>
<?php 
	$_SESSION['finish']=true; 
	unset($_SESSION['conf']);
?>
<?php get_footer(); ?>