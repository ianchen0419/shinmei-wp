<?php /* Template Name: _en_inquiry-001 */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Product inquiry</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li class="active">Input</li>
			<li>Confirmation</li>
			<li>Complete</li>
		</ol>
		<p>Thank you for your interest in our company.<br>Please fill in the required items and press the "Next" button.</p>

		<form action="<?php bloginfo('url') ?>/material/inquiry-001/conf" method="POST" class="mar_top40">
			<div class="form-center">
				<div class="contact-item">
					<div class="title">Product Name</div>
					<p>Direct Thermal Printer for Packaging Machine SCS</p>
				</div>
				<div class="contact-item threerow-checkbox">
					<div class="title">
						<span>Schedule</span>
						<div class="badge">Required</div>
					</div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule1" />
							<i class="fa fa-check"></i>
							<span>Soon</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule2" />
							<i class="fa fa-check"></i>
							<span>Within 1 month</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule3" />
							<i class="fa fa-check"></i>
							<span>Within 3 months</span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule4" />
							<i class="fa fa-check"></i>
							<span>Within half a year</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule5" />
							<i class="fa fa-check"></i>
							<span>Within 1 year</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule6" />
							<i class="fa fa-check"></i>
							<span>Within 2 years</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" name="hope_schedule7" />
							<i class="fa fa-check"></i>
							<span>Undecided</span>
						</label>
					</div>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">
						<span>Purpose</span>
						<div class="badge">Required</div>
					</div>
					<label class="checkbox">
						<input type="checkbox" name="ask_type1" />
						<i class="fa fa-check"></i>
						<span>Purchase</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="ask_type2" />
						<i class="fa fa-check"></i>
						<span>Quotation</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="ask_type3" />
						<i class="fa fa-check"></i>
						<span>Question</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="ask_type4" />
						<i class="fa fa-check"></i>
						<span>Other</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">Message</div>
					<textarea name="add_content" cols="30" rows="10"></textarea>
				</div>
				<div class="contact-item">
					<div class="title">Type of product to be packaged</div>
					<input type="text" name="package_type" />
				</div>
				<div class="contact-item">
					<div class="title">Packaging machine specifications</div>
					<input type="text" name="machine_detail" />
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">Packaging machine pillow type</div>
					<label class="checkbox">
						<input type="checkbox" name="pillow_type1" />
						<i class="fa fa-check"></i>
						<span>Vertical pillow</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="pillow_type2" />
						<i class="fa fa-check"></i>
						<span>Horizontal pillow</span>
					</label>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">Packaging machine operation method</div>
					<label class="checkbox">
						<input type="checkbox" name="operate_method1" />
						<i class="fa fa-check"></i>
						<span>Continuous type</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="operate_method2" />
						<i class="fa fa-check"></i>
						<span>Intermittent type</span>
					</label>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">Print contents</div>
					<label class="checkbox">
						<input type="checkbox" name="print_content1" />
						<i class="fa fa-check"></i>
						<span>Date only</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" name="print_content2" />
						<i class="fa fa-check"></i>
						<span>Other collective display of manufacturers, raw materials, etc.</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">Printing pitch</div>
					<input type="text" name="print_pitch" />
				</div>
				<div class="contact-item">
					<div class="title">Number of print shots</div>
					<input type="text" name="print_short" />
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

<script>
	var Acheckbox_first=document.querySelectorAll('input[name*="hope_schedule"]')[0];
	var Bchcekbox_first=document.querySelectorAll('input[name*="ask_type"]')[0];

	var allInputs=document.querySelectorAll('form input');

	for(i=0;i<allInputs.length;i++){
		allInputs[i].addEventListener('change', function(){
			var Acheckbox_checked=document.querySelectorAll('input[name*="hope_schedule"]:checked');
			var Bcheckbox_checked=document.querySelectorAll('input[name*="ask_type"]:checked');
			if(Acheckbox_checked.length<1){
				Acheckbox_first.setCustomValidity("Please select at least one.");
			}else{
				Acheckbox_first.setCustomValidity("");
			}

			if(Bcheckbox_checked.length<1){
				Bchcekbox_first.setCustomValidity("Please select at least one.");
			}else{
				Bchcekbox_first.setCustomValidity("");
			}


		})
	}
</script>

<?php $_SESSION['conf']=true; ?>
<?php get_footer(); ?>