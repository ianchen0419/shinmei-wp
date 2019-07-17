<?php /* Template Name: _en_inquiry__c */ ?>
<?php get_header();?>
<div id="visual">
	<h1 class="visual-title">Web Inquiry</h1>
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
		<form action="<?php bloginfo('url') ?>/inquiry/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			
			<div class="form-center">
				<div class="contact-item tworow-checkbox">
					<div class="title">Purpose</div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="Regarding products" <?php echo isset($_POST['your_type1'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Regarding products</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="Regarding products and parts in use" <?php echo isset($_POST['your_type2'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Regarding products and parts in use</span>
						</label>
					</div>
					<div>
						<label class="checkbox two-row">
							<input type="checkbox" disabled readonly name="your_type[]" value="Regarding consumables such as thermal ribbons, labels and seals" <?php echo isset($_POST['your_type3'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Regarding consumables such as<br>thermal ribbons, labels and seals</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="Regarding film printing and display" <?php echo isset($_POST['your_type4'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Regarding film printing and display</span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="Regarding distributor" <?php echo isset($_POST['your_type5'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span>Regarding distributor</span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="Others" <?php echo isset($_POST['your_type6'])?'checked':''; ?> />
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
						<span>Message</span>
					</div>
					<input disabled readonly type="url" name="your_website" value="<?php echo $_POST['your_website'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>Message</span>
					</div>
					<textarea name="your_message" disabled readonly cols="30" rows="10"><?php echo $_POST['your_message'] ?></textarea>
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