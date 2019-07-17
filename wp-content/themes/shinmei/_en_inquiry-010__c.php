<?php /* Template Name: _en_inquiry-010__c */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Inquiry about printing test</h1>
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
		<form action="<?php bloginfo('url') ?>/material/inquiry-010/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">Title</div>
					<p>Inquiry about printing test</p>
				</div>
				<div class="contact-item">
					<div class="title">Print / display contents</div>
					<textarea name="print_content" cols="30" rows="10" readonly disabled><?php echo $_POST['print_content'] ?></textarea>
				</div>
				<div class="contact-item">
					<div class="title">Print and display size</div>
					<input type="text" name="print_size" readonly disabled value="<?php echo $_POST['print_size'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Print / display color</div>
					<input type="text" name="print_color" readonly disabled value="<?php echo $_POST['print_color'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Material of packaging</div>
					<input type="text" name="package_material" readonly disabled value="<?php echo $_POST['package_material'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Package size and thickness</div>
					<input type="text" name="package_size" readonly disabled value="<?php echo $_POST['package_size'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Function of packaging</div>
					<input type="text" name="package_function" readonly disabled value="<?php echo $_POST['package_function'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Process from filling to shipping</div>
					<input type="text" name="engineer_flow" readonly disabled value="<?php echo $_POST['engineer_flow'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Adhesion of chemical substances</div>
					<input type="text" name="chemical_element" readonly disabled value="<?php echo $_POST['chemical_element'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Number of print samples prepared</div>
					<input type="text" name="sample_amount" readonly disabled value="<?php echo $_POST['sample_amount'] ?>" />
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
					<input type="checkbox" disabled checked readonly name="your_agree" required />
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