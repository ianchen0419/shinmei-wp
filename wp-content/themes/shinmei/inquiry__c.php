<?php /* Template Name: inquiry__c */ ?>
<?php get_header();?>
<div id="visual">
	<h1 class="visual-title">Webでのお問い合わせ</h1>
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
		<form action="<?php bloginfo('url') ?>/inquiry/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			
			<div class="form-center">
				<div class="contact-item tworow-checkbox">
					<div class="title">種類</div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="製品に関する" <?php echo isset($_POST['your_type1'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>製品に関する</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="ご使用中の製品・部品に関する" <?php echo isset($_POST['your_type2'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>ご使用中の製品・部品に関する</span>
						</label>
					</div>
					<div>
						<label class="checkbox two-row">
							<input type="checkbox" disabled readonly name="your_type[]" value="サーマルリボン・ラベル・シールなど消耗品に関する" <?php echo isset($_POST['your_type3'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>サーマルリボン・ラベル・シール<br>など消耗品に関する</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="フィルム印字や表示に関する" <?php echo isset($_POST['your_type4'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>フィルム印字や表示に関する</span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="代理店販売に関する" <?php echo isset($_POST['your_type5'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>代理店販売に関する</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="その他" <?php echo isset($_POST['your_type6'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>その他</span>
						</label>
					</div>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">ご希望回答方法</div>
					<label class="checkbox">
						<input type="checkbox" disabled readonly name="your_answer[]" value="訪問" <?php echo isset($_POST['your_answer1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>訪問</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" disabled readonly name="your_answer[]" value="電話" <?php echo isset($_POST['your_answer2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>電話</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" disabled readonly name="your_answer[]" value="メール <?php echo isset($_POST['your_answer3'])?'checked':''; ?>" />
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
					<span>「</span><a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text">個人情報保護方針</a><span>」に同意する</span>
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