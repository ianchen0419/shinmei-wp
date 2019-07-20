<?php /* Template Name: inquiry__c */ ?>
<?php get_header();?>
<div id="visual">
	<h1 class="visual-title"><?php echo (get_current_blog_id()==1)?'Webでのお問い合わせ':'Web Inquiry' ?></h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li><?php echo (get_current_blog_id()==1)?'入力':'Input' ?></li>
			<li class="active"><?php echo (get_current_blog_id()==1)?'確認':'Confirmation' ?></li>
			<li><?php echo (get_current_blog_id()==1)?'完了':'Complete' ?></li>
		</ol>
		<p><?php echo (get_current_blog_id()==1)?'ご記入内容をお確かめの上、送信ボタンを押してください。':'Please confirm your entry and press the "Confirm" button.' ?></p>

		<?php 	
		if ($_SESSION['conf']!=true){ ?>
		<form action="" method="POST" hidden>
		<?php }else{ ?>
		<form action="<?php bloginfo('url') ?>/inquiry/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			
			<div class="form-center">
				<div class="contact-item tworow-checkbox">
					<div class="title"><?php echo (get_current_blog_id()==1)?'種類':'Purpose' ?></div>
					<div class="mar_top10">
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="<?php echo (get_current_blog_id()==1)?'製品に関する':'Regarding products' ?>" <?php echo isset($_POST['your_type1'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'製品に関する':'Regarding products' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="<?php echo (get_current_blog_id()==1)?'ご使用中の製品・部品に関する':'Regarding products and parts in use' ?>" <?php echo isset($_POST['your_type2'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'ご使用中の製品・部品に関する':'Regarding products and parts in use' ?></span>
						</label>
					</div>
					<div>
						<label class="checkbox two-row">
							<input type="checkbox" disabled readonly name="your_type[]" value="<?php echo (get_current_blog_id()==1)?'サーマルリボン・ラベル・シールなど消耗品に関する':'Regarding consumables such as thermal ribbons, labels and seals' ?>" <?php echo isset($_POST['your_type3'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'サーマルリボン・ラベル・シール<br>など消耗品に関する':'Regarding consumables such as<br>thermal ribbons, labels and seals' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="<?php echo (get_current_blog_id()==1)?'フィルム印字や表示に関する':'Regarding film printing and display' ?>" <?php echo isset($_POST['your_type4'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'フィルム印字や表示に関する':'Regarding film printing and display' ?></span>
						</label>
					</div>
					<div>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="<?php echo (get_current_blog_id()==1)?'代理店販売に関する':'Regarding distributor' ?>" <?php echo isset($_POST['your_type5'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'代理店販売に関する':'Regarding distributor' ?></span>
						</label>
						<label class="checkbox">
							<input type="checkbox" disabled readonly name="your_type[]" value="<?php echo (get_current_blog_id()==1)?'その他':'Others' ?>" <?php echo isset($_POST['your_type6'])?'checked':''; ?> />
							<i class="fa fa-check"></i>
							<span><?php echo (get_current_blog_id()==1)?'その他':'Others' ?></span>
						</label>
					</div>
				</div>
				<div class="contact-item less-checkbox" <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
					<div class="title">ご希望回答方法</div>
					<label class="checkbox">
						<input type="checkbox" disabled readonly name="your_answer[]" value="訪問" <?php echo isset($_POST['your_answer1'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>訪問</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" disabled readonly name="your_answer[]" value="電話" <?php echo isset($_POST['your_answer2'])?'checked':''; ?> />
						<i class="fa fa-check"></i>
						<span>電話</span>
					</label>
					<label class="checkbox">
						<input type="checkbox" disabled readonly name="your_answer[]" value="メール <?php echo isset($_POST['your_answer3'])?'checked':''; ?>" />
						<i class="fa fa-check"></i>
						<span>メール</span>
					</label>
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'貴社名':'Company' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="text" name="your_company" class="short" required value="<?php echo $_POST['your_company'] ?>" />
					<input disabled readonly type="text" name="your_company_furigana" class="short" required value="<?php echo $_POST['your_company_furigana'] ?>" <?php echo (get_current_blog_id()==1)?'':'hidden' ?>  />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'業種':'Industry' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="text" name="your_career_type" required value="<?php echo $_POST['your_career_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'部署名':'Department / Section' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="text" name="your_division" required value="<?php echo $_POST['your_division'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'役職名':'Position' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="text" name="your_job_title" required value="<?php echo $_POST['your_job_title'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'ご担当者名':'Name' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="text" name="your_name" class="short" required value="<?php echo $_POST['your_name'] ?>" />
					<input disabled readonly type="text" name="your_name_furigana" class="short" required value="<?php echo $_POST['your_name_furigana'] ?>" />
				</div>
				<?php if(get_current_blog_id()==2){ ?>
				<!-- 英語用 -->
				<div class="contact-item">
					<div class="title">
						<span>所在地</span>
						<div class="badge">Required</div>
					</div>
					<input disabled readonly type="text" name="your_address" required value="<?php echo $_POST['your_address3'] ?>" />
				</div>
				<?php }else{ ?>
				<!-- 日本語用 -->
				<div class="contact-item">
					<div class="title">
						<span>所在地</span>
						<div class="badge">必須</div>
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
				<?php } ?>
				
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'電話番号':'Phone number' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="tel" name="your_phone" required value="<?php echo $_POST['your_phone'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'メールアドレス':'Email Address' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="email" name="your_mail" required value="<?php echo $_POST['your_mail'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'メールアドレス（確認用）':'Email Address (Again)' ?></span>
						<div class="badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
					</div>
					<input disabled readonly type="email" name="your_mail_confirm" required value="<?php echo $_POST['your_mail_confirm'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'ホームページアドレス':'URL' ?></span>
					</div>
					<input disabled readonly type="url" name="your_website" value="<?php echo $_POST['your_website'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span><?php echo (get_current_blog_id()==1)?'内容':'Message' ?></span>
					</div>
					<textarea name="your_message" disabled readonly cols="30" rows="10"><?php echo $_POST['your_message'] ?></textarea>
				</div>

				<label class="checkbox agree-checkbox">
					<input type="checkbox" disabled checked readonly name="your_agree" required />
					<i class="fa fa-check"></i>
					<span><?php echo (get_current_blog_id()==1)?'「':'I agree with' ?></span><a href="<?php bloginfo('url') ?>/privacy" target="_blank" class="link-text"><?php echo (get_current_blog_id()==1)?'個人情報保護方針':'&nbsp;privacy policy' ?></a><span><?php echo (get_current_blog_id()==1)?'」に同意する':'.' ?></span>
				</label>
				<div class="badge agree-badge"><?php echo (get_current_blog_id()==1)?'必須':'Required' ?></div>
			</div>
			
			<div class="button-area">
				<button type="button" class="cancel-button" onclick="history.back();"><?php echo (get_current_blog_id()==1)?'戻る':'Back' ?></button>
				<input type="submit" value="<?php echo (get_current_blog_id()==1)?'送信':'Confirm' ?>" class="submit-button" />
			</div>
		</form>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption><?php echo (get_current_blog_id()==1)?'このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。':'This site is certified by JPRS. Information transmission is protected by encryption.' ?></figcaption>
		</figure>

	</div>

</main>

<?php 
	$_SESSION['finish']=true; 
	unset($_SESSION['conf']);
?>
<?php get_footer(); ?>