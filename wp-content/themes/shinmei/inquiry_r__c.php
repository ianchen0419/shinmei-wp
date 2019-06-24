<?php /* Template Name: inquiry_r__c */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">採用のお問い合わせ</h1>
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
		<form action="<?php bloginfo('url') ?>/recruit/inquiry/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">
						<span>御名前</span>
						<div class="badge">必須</div>
					</div>
					<input type="text" name="your_name" class="short" readonly disabled required value="<?php echo $_POST['your_name'] ?>" />
					<input type="text" name="your_name_furigana" class="short" required readonly disabled value="<?php echo $_POST['your_name_furigana'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">応募職種</div>
					<label class="radio">
						<input type="radio" name="your_job" value="営業職" readonly disabled <?php echo ($_POST['your_job']=='営業職')?'checked':''; ?> />
						<div class="radio-widget"></div>
						<span>営業職</span>
					</label>
					<label class="radio">
						<input type="radio" name="your_job" value="技術職" readonly disabled <?php echo ($_POST['your_job']=='技術職')?'checked':''; ?> />
						<div class="radio-widget"></div>
						<span>技術職</span>
					</label>
					<label class="radio">
						<input type="radio" name="your_job" value="資材部" readonly disabled <?php echo ($_POST['your_job']=='資材部')?'checked':''; ?> />
						<div class="radio-widget"></div>
						<span>資材部</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">希望勤務地</div>
					<input disabled readonly type="text" name="your_city" value="<?php echo $_POST['your_city'] ?>" />
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