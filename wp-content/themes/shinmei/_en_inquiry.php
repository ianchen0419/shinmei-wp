<?php /* Template Name: _en_inquiry */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Web Inquiry</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active">Input</li>
			<li>Confirmation</li>
			<li>Complete</li>
		</ol>
		<p>Thank you for your interest in our company.<br>Please fill in the required items and press the "Next" button.</p>

		<form action="<?php bloginfo('url') ?>/inquiry/conf" method="POST" class="mar_top40">
			<div class="form-center">
				<div class="contact-item tworow-checkbox">
					<div class="title">Purpose</div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" name="your_type1" />
							<i class="fa fa-check"></i>
							<span>Regarding products</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="your_type2" />
							<i class="fa fa-check"></i>
							<span>Regarding products and parts in use</span>
						</label>
					</div>
					<div>
						<label class="checkbox two-row">
							<input type="checkbox" name="your_type3" />
							<i class="fa fa-check"></i>
							<span>Regarding consumables such as<br>thermal ribbons, labels and seals</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="your_type4" />
							<i class="fa fa-check"></i>
							<span>Regarding film printing and display</span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" name="your_type5" />
							<i class="fa fa-check"></i>
							<span>Regarding distributor</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="your_type6" />
							<i class="fa fa-check"></i>
							<span>Others</span>
						</label>
					</div>
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Company</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_company" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Industry</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_career_type" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Department / Section</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_division" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Position</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_job_title" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Name</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_name" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Address</span>
						<div class="badge">Required</div>
					</div>
					<input type="text" name="your_address" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Phone number</span>
						<div class="badge">Required</div>
					</div>
					<input type="tel" name="your_phone" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Email Address</span>
						<div class="badge">Required</div>
					</div>
					<input type="email" name="your_mail" required oninput="confirmMail.disabled=false" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Email Address (Again)</span>
						<div class="badge">Required</div>
					</div>
					<input type="email" name="your_mail_confirm" id="confirmMail" required onblur="checkEmail(this, 'en')" oninput="checkEmail(this, 'en')" disabled />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>URL</span>
					</div>
					<input type="url" name="your_website" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Message</span>
					</div>
					<textarea name="your_message" cols="30" rows="10"></textarea>
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required />
					<i class="fa fa-check"></i>
					<span>I agree with</span>
					<a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text">privacy policy</a><span>.</span>
				</label>
				<div class="badge agree-badge">Required</div>
			</div>
			
			<div class="button-area">
				<input type="submit" value="入力内容を確認する" class="submit-button" />
			</div>
		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption>This site is certified by JPRS. Information transmission is protected by encryption.</figcaption>
		</figure>

	</div>

</main>
<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>