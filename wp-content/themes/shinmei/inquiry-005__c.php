<?php /* Template Name: inquiry-005__c */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">製品についてのお問い合わせ</h1>
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
		<form action="<?php bloginfo('url') ?>/material/inquiry-005/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">製品名</div>
					<p>チェックスタンパー</p>
				</div>
				<div class="contact-item threerow-checkbox">
					<div class="title">
						<span>導入ご希望予定時期</span>
						<div class="badge">必須</div>
					</div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="すぐにでも" <?php echo isset($_POST['hope_schedule1'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>すぐにでも</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="1ヶ月以内" <?php echo isset($_POST['hope_schedule2'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>1ヶ月以内</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="3ヶ月以内" <?php echo isset($_POST['hope_schedule3'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>3ヶ月以内</span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="半年以内" <?php echo isset($_POST['hope_schedule4'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>半年以内</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="1年以内" <?php echo isset($_POST['hope_schedule5'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>1年以内</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="2年以内" <?php echo isset($_POST['hope_schedule6'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>2年以内</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="未定" <?php echo isset($_POST['hope_schedule7'])?'checked':''; ?> />
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
						<input type="checkbox" readonly disabled name="ask_type[]" value="ご購入希望" <?php echo isset($_POST['ask_type1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>ご購入希望</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="ask_type[]" value="お見積り希望" <?php echo isset($_POST['ask_type2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>お見積り希望</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="ask_type[]" value="ご質問" <?php echo isset($_POST['ask_type3'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>ご質問</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="ask_type[]" value="その他" <?php echo isset($_POST['ask_type4'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>その他</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">補足内容</div>
					<textarea name="add_content" readonly disabled cols="30" rows="10"><?php echo $_POST['add_content'] ?></textarea>
				</div>
				<div class="contact-item">
					<div class="title">用途</div>
					<input type="text" readonly disabled name="use_type" value="<?php echo $_POST['use_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">現在の方法</div>
					<input type="text" readonly disabled name="now_method" value="<?php echo $_POST['now_method'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">押印内容</div>
					<input type="text" readonly disabled name="print_content" value="<?php echo $_POST['print_content'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">印字対象の1日の使用量</div>
					<input type="text" readonly disabled name="print_amount" value="<?php echo $_POST['print_amount'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">押印する紙の材質</div>
					<input type="text" readonly disabled name="paper_type" value="<?php echo $_POST['paper_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">紙のサイズ・厚さ</div>
					<input type="text" readonly disabled name="paper_size" value="<?php echo $_POST['paper_size'] ?>" />
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">ご希望回答方法</div>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="your_answer[]" value="訪問" <?php echo isset($_POST['your_answer1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>訪問</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="your_answer[]" value="電話" <?php echo isset($_POST['your_answer2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>電話</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="your_answer[]" value="メール" <?php echo isset($_POST['your_answer3'])?'checked':''; ?> />
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

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required checked disabled readonly />
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
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption>このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。</figcaption>
		</figure>

	</div>

</main>

<?php 
	$_SESSION['finish']=true; 
	unset($_SESSION['conf']);
?>
<?php get_footer(); ?>