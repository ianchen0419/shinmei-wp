<?php /* Template Name: _en_inquiry-001__c */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Product inquiry</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>Input</li>
			<li class="active">Confirmation</li>
			<li>Complete</li>
		</ol>
		<p>Please confirm your entry and press the "Confirm" button.</p>
		
		<?php 	
		if ($_SESSION['conf']!=true){ ?>
		<form action="" method="POST" hidden>
		<?php }else{ ?>
		<form action="<?php bloginfo('url') ?>/material/inquiry-001/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
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
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Soon" <?php echo isset($_POST['hope_schedule1'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Soon</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Within 1 month" <?php echo isset($_POST['hope_schedule2'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Within 1 month</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Within 3 months" <?php echo isset($_POST['hope_schedule3'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Within 3 months</span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Within half a year" <?php echo isset($_POST['hope_schedule4'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Within half a year</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Within 1 year" <?php echo isset($_POST['hope_schedule5'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Within 1 year</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Within 2 years" <?php echo isset($_POST['hope_schedule6'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Within 2 years</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" readonly disabled name="hope_schedule[]" value="Undecided" <?php echo isset($_POST['hope_schedule7'])?'checked':''; ?> />
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
						<input type="checkbox" readonly disabled name="ask_type[]" value="Purchase" <?php echo isset($_POST['ask_type1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Purchase</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="ask_type[]" value="Quotation" <?php echo isset($_POST['ask_type2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Quotation</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="ask_type[]" value="Question" <?php echo isset($_POST['ask_type3'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Question</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="ask_type[]" value="Other" <?php echo isset($_POST['ask_type4'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Other</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">Message</div>
					<textarea name="add_content" readonly disabled cols="30" rows="10"><?php echo $_POST['add_content'] ?></textarea>
				</div>
				<div class="contact-item">
					<div class="title">Type of product to be packaged</div>
					<input type="text" readonly disabled name="package_type" value="<?php echo $_POST['package_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Packaging machine specifications</div>
					<input type="text" readonly disabled name="machine_detail" value="<?php echo $_POST['machine_detail'] ?>" />
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">Packaging machine pillow type</div>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="pillow_type[]" value="Vertical pillow" <?php echo isset($_POST['pillow_type1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Vertical pillow</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="pillow_type[]" value="Horizontal pillow" <?php echo isset($_POST['pillow_type2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Horizontal pillow</span>
					</label>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">Packaging machine operation method</div>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="operate_method[]" value="Continuous type" <?php echo isset($_POST['operate_method1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Continuous type</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="operate_method[]" value="Intermittent type" <?php echo isset($_POST['operate_method2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Intermittent type</span>
					</label>
				</div>
				<div class="contact-item less-checkbox">
					<div class="title">Print contents</div>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="print_content[]" value="Date only" <?php echo isset($_POST['print_content1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Date only</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" readonly disabled name="print_content[]" value="Other collective display of manufacturers, raw materials, etc." <?php echo isset($_POST['print_content2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>Other collective display of manufacturers, raw materials, etc.</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">Printing pitch</div>
					<input type="text" readonly disabled name="print_pitch" value="<?php echo $_POST['print_pitch'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Number of print shots</div>
					<input type="text" readonly disabled name="print_short" value="<?php echo $_POST['print_short'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Process from filling to shipping</div>
					<input type="text" readonly disabled name="engineer_flow" value="<?php echo $_POST['engineer_flow'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Adhesion of chemical substances</div>
					<input type="text" readonly disabled name="chemical_element" value="<?php echo $_POST['chemical_element'] ?>" />
				</div>

				<div class="contact-item">
					<div class="title">
						<span>Company</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_company" required value="<?php echo $_POST['your_company'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Industry</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_career_type" required value="<?php echo $_POST['your_career_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Department / Section</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_division" required value="<?php echo $_POST['your_division'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Position</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_job_title" required value="<?php echo $_POST['your_job_title'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Name</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_name" required value="<?php echo $_POST['your_name'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Address</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_address" required value="<?php echo $_POST['your_address'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Phone number</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="tel" name="your_phone" required value="<?php echo $_POST['your_phone'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Email Address</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="email" name="your_mail" required value="<?php echo $_POST['your_mail'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Email Address (Again)</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="email" name="your_mail_confirm" required value="<?php echo $_POST['your_mail_confirm'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>URL</span>
					</div>
					<input disabled readonly type="url" name="your_website" value="<?php echo $_POST['your_website'] ?>" />
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required checked disabled readonly />
					<i class="fa fa-check"></i>
					<span>I agree with</span>
					<a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text">privacy policy</a><span>.</span>
				</label>
				<div class="badge agree-badge">Required</div>
			</div>
			
			<div class="button-area">
				<button type="button" class="cancel-button" onclick="history.back();">Back</button>
				<input type="submit" value="Confirm" class="submit-button" />
			</div>
		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption>This site is certified by JPRS. Information transmission is protected by encryption.</figcaption>
		</figure>

	</div>

</main>
<?php 
	$_SESSION['finish']=true; 
	unset($_SESSION['conf']);
?>
<?php get_footer(); ?>