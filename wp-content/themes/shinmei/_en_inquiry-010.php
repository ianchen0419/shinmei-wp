<?php /* Template Name: _en_inquiry-010 */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Inquiry about printing test</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active">Input</li>
			<li>Confirmation</li>
			<li>Complete</li>
		</ol>
		<p>Thank you for your interest in our company.<br>Please fill in the required items and press the "Next" button.</p>

		<form action="<?php bloginfo('url') ?>/material/inquiry-010/conf" method="POST" class="mar_top40">
			<div class="form-center">
				<div class="contact-item">
					<div class="title">Title</div>
					<p>Inquiry about printing test</p>
				</div>
				<div class="contact-item">
					<div class="title">Print / display contents</div>
					<textarea name="print_content" cols="30" rows="10"></textarea>
				</div>
				<div class="contact-item">
					<div class="title">Print and display size</div>
					<input type="text" name="print_size" />
				</div>
				<div class="contact-item">
					<div class="title">Print / display color</div>
					<input type="text" name="print_color" />
				</div>
				<div class="contact-item">
					<div class="title">Material of packaging</div>
					<input type="text" name="package_material" />
				</div>
				<div class="contact-item">
					<div class="title">Package size and thickness</div>
					<input type="text" name="package_size" />
				</div>
				<div class="contact-item">
					<div class="title">Function of packaging</div>
					<input type="text" name="package_function" />
				</div>
				<div class="contact-item">
					<div class="title">Process from filling to shipping</div>
					<input type="text" name="engineer_flow" />
				</div>
				<div class="contact-item">
					<div class="title">Adhesion of chemical substances</div>
					<input type="text" name="chemical_element" />
				</div>
				<div class="contact-item">
					<div class="title">Number of print samples prepared</div>
					<input type="text" name="sample_amount" />
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

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required />
					<i class="fa fa-check"></i>
					<span>I agree with</span>
					<a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text">privacy policy</a><span>.</span>
				</label>
				<div class="badge agree-badge">Required</div>
			</div>
			
			<div class="button-area">
				<input type="submit" value="Next" class="submit-button" />
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