<?php /* Template Name: _en_material__c */ ?>
<?php get_header(); ?>

<div id="visual">
	<h1 class="visual-title">Catalog Download</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>Input</li>
			<li class="active">Confirmation</li>
			<li>Catalog Download</li>
		</ol>
		<p>Please press the button "Confirm".<br>You can download selected documents.</p>
		<?php 	
		if ($_SESSION['conf']!=true){ ?>
		<form action="" method="POST" hidden>
		<?php }else{ ?>
		<form action="<?php bloginfo('url') ?>/material/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			
			<table width="100%" class="fertilizer-table">
				<tbody>
					<tr>
						<th width="20%">Document</th>
						<td width="80%">
							<h4>Direct Thermal Printer</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data1" disabled readonly <?php echo isset($_POST['your_data1'])?'checked':''; ?> value="Desktop type single-sided direct thermal printer: SMP-350 Series" />
								<i class="fa fa-check"></i>
								<span>Desktop type single-sided direct thermal printer:<br>SMP-350 Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data2" disabled readonly <?php echo isset($_POST['your_data2'])?'checked':''; ?> value="Desktop integrated direct thermal printer: AFB-350 Series" />
								<i class="fa fa-check"></i>
								<span>Desktop integrated direct thermal printer:<br>AFB-350 Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data3" disabled readonly <?php echo isset($_POST['your_data3'])?'checked':''; ?> value="Duplex direct thermal printer: CPS-UB Series" />
								<i class="fa fa-check"></i>
								<span>Duplex direct thermal printer:<br>CPS-UB Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data4" disabled readonly <?php echo isset($_POST['your_data4'])?'checked':''; ?> value="Direct thermal printer for small package: CPS-85E Series" />
								<i class="fa fa-check"></i>
								<span>Direct thermal printer for small package:<br>CPS-85E Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data5" disabled readonly <?php echo isset($_POST['your_data5'])?'checked':''; ?> value="Roll film printing system: RPS Series" />
								<i class="fa fa-check"></i>
								<span>Roll film printing system:<br>RPS Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data6" disabled readonly <?php echo isset($_POST['your_data6'])?'checked':''; ?> value="Ultra-compact direct thermal printer: SCS-410 Series" />
								<i class="fa fa-check"></i>
								<span>Ultra-compact direct thermal printer:<br>SCS-410 Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data7" disabled readonly <?php echo isset($_POST['your_data7'])?'checked':''; ?> value="Printer for fertilizer bags: SMP-650 Series" />
								<i class="fa fa-check"></i>
								<span>Printer for fertilizer bags:<br>SMP-650 Series</span>
							</label>
							<h4>Auto Labeler</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data8" disabled readonly <?php echo isset($_POST['your_data8'])?'checked':''; ?> value="ALS-350N Series, Desktop auto labeling system for empty bags." />
								<i class="fa fa-check"></i>
								<span>ALS-350N Series,<br>Desktop auto labeling system for empty bags.</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data9" disabled readonly <?php echo isset($_POST['your_data9'])?'checked':''; ?> value="ALS-100Ⅱ Series, In-line auto labeling system " />
								<i class="fa fa-check"></i>
								<span>ALS-100Ⅱ Series,<br>In-line auto labeling system </span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data10" disabled readonly <?php echo isset($_POST['your_data10'])?'checked':''; ?> value="Bottle labeler K.I. 2001" />
								<i class="fa fa-check"></i>
								<span>Bottle labeler K.I. 2001</span>
							</label>
							<h4>For eggs</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data11" disabled readonly <?php echo isset($_POST['your_data11'])?'checked':''; ?> value="ALS1000SCS for labeling on eggs" />
								<i class="fa fa-check"></i>
								<span>ALS1000SCS for labeling on eggs</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data12" disabled readonly <?php echo isset($_POST['your_data12'])?'checked':''; ?> value="In-pack label date printing CPS-85EⅢ" />
								<i class="fa fa-check"></i>
								<span>In-pack label date printing CPS-85EⅢ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data13" disabled readonly <?php echo isset($_POST['your_data13'])?'checked':''; ?> value="Egg content check device" />
								<i class="fa fa-check"></i>
								<span>Egg content check device</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data14" disabled readonly <?php echo isset($_POST['your_data14'])?'checked':''; ?> value="Date inspection camera for egg line" />
								<i class="fa fa-check"></i>
								<span>Date inspection camera for egg line</span>
							</label>
							<h4>Feeder / Stacker</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data15" disabled readonly <?php echo isset($_POST['your_data15'])?'checked':''; ?> value="Feeder / Stacker" />
								<i class="fa fa-check"></i>
								<span>Feeder / Stacker</span>
							</label>
							<h4>Stamper</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data16" disabled readonly <?php echo isset($_POST['your_data16'])?'checked':''; ?> value="Automatic general-purpose counting and sealing machine: CS Series" />
								<i class="fa fa-check"></i>
								<span>Automatic general-purpose counting<br>and sealing machine: CS Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data17" disabled readonly <?php echo isset($_POST['your_data17'])?'checked':''; ?> value="Handprinter, sealer for endorsement: CS-BⅡ Series" />
								<i class="fa fa-check"></i>
								<span>Handprinter, sealer for endorsement:<br>CS-BⅡ Series</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data18" disabled readonly <?php echo isset($_POST['your_data18'])?'checked':''; ?> value="Brochure stamper" />
								<i class="fa fa-check"></i>
								<span>Brochure stamper</span>
							</label>
							<h4>Others</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data19" disabled readonly <?php echo isset($_POST['your_data19'])?'checked':''; ?> value="Label / Seal" />
								<i class="fa fa-check"></i>
								<span>Label / Seal</span>
							</label>
						</td>
					</tr>
					<tr>
						<th>
							<span>Purpose</span>
							<div class="badge">Required</div>
						</th>
						<td>
							<label class="checkbox">
								<input type="checkbox" checked disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose1'])?'checked':''; ?> value="New Introduction" />
								<i class="fa fa-check"></i>
								<span>New Introduction</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose2'])?'checked':''; ?> value="Replacement" />
								<i class="fa fa-check"></i>
								<span>Replacement</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose3'])?'checked':''; ?> value="Test introduction" />
								<i class="fa fa-check"></i>
								<span>Test introduction</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose4'])?'checked':''; ?> value="Collecting information" />
								<i class="fa fa-check"></i>
								<span>Collecting information</span>
							</label>
						</td>
					</tr>
					<tr>
						<th>
							<span>Schedule</span>
							<div class="badge">Required</div>
						</th>
						<td>
							<label class="checkbox">
								<input type="checkbox" checked disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule1'])?'checked':''; ?> value="Soon" />
								<i class="fa fa-check"></i>
								<span>Soon</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule2'])?'checked':''; ?> value="Within 1 month" />
								<i class="fa fa-check"></i>
								<span>Within 1 month</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule3'])?'checked':''; ?> value="Within 3 months" />
								<i class="fa fa-check"></i>
								<span>Within 3 months</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule4'])?'checked':''; ?> value="Within half a year" />
								<i class="fa fa-check"></i>
								<span>Within half a year</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule5'])?'checked':''; ?> value="Within a year" />
								<i class="fa fa-check"></i>
								<span>Within a year</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule6'])?'checked':''; ?> value="Undecided" />
								<i class="fa fa-check"></i>
								<span>Undecided</span>
							</label>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">
						<span>Company Name</span>
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
						<span>Department/Section</span>
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