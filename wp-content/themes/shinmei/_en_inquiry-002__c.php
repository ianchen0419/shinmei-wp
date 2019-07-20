<?php /* Template Name: _en_inquiry-002__c */ ?>
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
		<form action="<?php bloginfo('url') ?>/material/inquiry-002/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">Product name</div>
					<textarea class="product-name" name="product_name" rows="3"><?php echo $_POST['product_name'] ?></textarea>
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
					<div class="title">Current print and display method</div>
					<input type="text" readonly disabled name="print_method" value="<?php echo $_POST['print_method'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Daily usage for printing object</div>
					<input type="text" readonly disabled name="use_amount" value="<?php echo $_POST['use_amount'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Material of printing object</div>
					<input type="text" readonly disabled name="print_material" value="<?php echo $_POST['print_material'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Function of printing object</div>
					<input type="text" readonly disabled name="print_function" value="<?php echo $_POST['print_function'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">Size and thickness of printing object</div>
					<input type="text" readonly disabled name="print_size" value="<?php echo $_POST['print_size'] ?>" />
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
					<input disabled readonly type="text" name="your_name" class="short" required value="<?php echo $_POST['your_name'] ?>" />
					<input disabled readonly type="text" name="your_name_furigana" class="short" required value="<?php echo $_POST['your_name_furigana'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>所在地</span>
						<div class="badge">Required</div>
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
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="tel" name="your_phone" required value="<?php echo $_POST['your_phone'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="email" name="your_mail" required value="<?php echo $_POST['your_mail'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス（確認用）</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="email" name="your_mail_confirm" required value="<?php echo $_POST['your_mail_confirm'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>ホームページアドレス</span>
					</div>
					<input disabled readonly type="url" name="your_website" value="<?php echo $_POST['your_website'] ?>" />
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" name="your_agree" required checked disabled readonly />
					<i class="fa fa-check"></i>
					<span>「</span><a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text">個人情報保護方針</a><span>」に同意する</span>
				</label>
				<div class="badge agree-badge">Required</div>
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