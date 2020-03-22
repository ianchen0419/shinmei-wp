<?php /* Template Name: inquiry_r */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">採用のお問い合わせ</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active">入力</li>
			<li>確認</li>
			<li>完了</li>
		</ol>
		<p>採用に関するお問い合わせをいただき、ありがとうございます。<br>下記項目にご記入の上、「入力内容を確認する」ボタンを押してください。</p>

		<form action="<?php bloginfo('url') ?>/recruit/inquiry/conf" method="POST" class="mar_top40">
			<div class="form-center">
				<div class="contact-item">
					<div class="title">
						<span>御名前</span>
						<div class="badge">必須</div>
					</div>
					<input type="text" name="your_name" class="short" required />
					<input type="text" name="your_name_furigana" class="short" required placeholder="フリガナ" />
				</div>
				<div class="contact-item">
					<div class="title">応募職種</div>
					<label class="radio">
						<input type="radio" name="your_job" value="営業職" />
						<div class="radio-widget"></div>
						<span>営業職</span>
					</label>
					<label class="radio">
						<input type="radio" name="your_job" value="技術職" />
						<div class="radio-widget"></div>
						<span>技術職</span>
					</label>
					<label class="radio">
						<input type="radio" name="your_job" value="資材部" />
						<div class="radio-widget"></div>
						<span>資材部</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">希望勤務地</div>
					<input type="tel" name="your_city" />
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
						<span>内容</span>
					</div>
					<textarea name="your_message" cols="30" rows="10"></textarea>
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required />
					<i class="fa fa-check"></i>
					<span>「</span><a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text">個人情報保護方針</a><span>」に同意する</span>
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