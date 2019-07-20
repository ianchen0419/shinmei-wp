<?php /* Template Name: _en_inquiry-001__f */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Product inquiry</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>Input</li>
			<li>Confirmation</li>
			<li class="active">Complete</li>
		</ol>

		<?php

		error_reporting(0);

		function _post($str){
		    $val=htmlspecialchars($_POST[$str]);
		    return $val;
		}
		// $_POST['str']ではなくて、_post('str')を利用する

		if ($_SESSION['finish']==true){

			// ユーザーへのメール
			require_once(ABSPATH . WPINC . '/class-phpmailer.php'); 
			$mailer = new PHPMailer();
			$mailer->SMTPSecure = "ssl";
			$mailer->Host = "smtp.gmail.com";
			// $mailer->Host = "smtp.alpha-prm.jp";
			$mailer->Port = 465;
			$mailer->CharSet = "utf-8";    
			$mailer->Username = "inquiry.workcapital@gmail.com";     
			// $mailer->Username = "overseainfo@co-shinmei.com";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "snm3921";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug  = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('overseainfo@co-shinmei.com');
			$mailer->setFrom('inquiry.workcapital@gmail.com', 'Shinmei Co.Ltd.'); 
			// $mailer->setFrom('overseainfo@co-shinmei.com', 'Shinmei Co.Ltd.'); 
			$mailer->Subject = 'Thank you for contacting us.';
			$mailer->Body = 
				'Dear '._post('your_name')."<br><br>".

				'Thank you for your interest in Shinmei.'."<br>".
				'We will review your inquiry and contact you soon.'."<br><br><br><br>".

				'【Product Name】Direct Thermal Printer for Packaging Machine SCS'."<br>".
				'【Schedule】'.implode(', ', $_POST['hope_schedule'])."<br>".
				'【Purpose】'.implode(', ', $_POST['ask_type'])."<br>".
				'【Message】'."<br>".
				str_replace("\n","<br>",_post('add_content'))."<br>".
				'【Type of product to be packaged】'._post('package_type')."<br>".
				'【Packaging machine specifications】'._post('machine_detail')."<br>".
				'【Packaging machine pillow type】'.implode(', ', $_POST['pillow_type'])."<br>".
				'【Packaging machine operation method】'.implode(', ', $_POST['operate_method'])."<br>".
				'【Print contents】'.implode(', ', $_POST['print_content'])."<br>".
				'【Printing pitch】'._post('print_pitch')."<br>".
				'【Number of print shots】'._post('print_short')."<br>".
				'【Process from filling to shipping】'._post('engineer_flow')."<br>".
				'【Adhesion of chemical substances】'._post('chemical_element')."<br>".
				'【Company】'._post('your_company')."<br>".
				'【Industry】'._post('your_career_type')."<br>".
				'【Department / Section】'._post('your_division')."<br>".
				'【Position】'._post('your_job_title')."<br>".
				'【Name】'._post('your_name')."<br>".
				'【Address】'._post('your_address')."<br>".
				'【Phone number】'._post('your_phone')."<br>".
				'【Email Address】'._post('your_mail')."<br>".
				'【Email Address (Again)】'._post('your_mail_confirm')."<br>".
				'【URL】'._post('your_website')."<br>".

				'---'."<br>".
				'Shinmei Co., Ltd.'."<br>".
				'2-3-3 Nihonbashi Bakucho Chuo-ku, Tokyo Fashion Face Building 3F / 4F'."<br>".
				'TEL:+81-3-3831-3921'."<br>".
				'FAX:+81-3-3831-7541'."<br>".
				'https://www.co-shinmei.com';

			$mailer->AddAddress(_post('your_mail'));

			if($mailer->Send()){
				echo '<p>Thank you for your interest in Shinmei.<br>We will review your inquiry and contact you soon.</p>';

		 	}else{
				echo '<p>失敗しました</p>';
			}

			//担当者へのメール
			$mailer->setFrom(_post('your_mail'), _post('your_name')); 
			$mailer->Subject = 'ホームページ）製品のお問い合わせ'; 
			$mailer->Body = 
				'各位'."<br><br>".
				'ホームページからお問い合わせがありました。'."<br>".
				'下記ご確認、ご対応をお願いします。'."<br><br><br><br>".

				'【製品名】包装機用 超小型ダイレクトサーマルプリンター SCS'."<br>".
				'【導入ご希望予定時期】'.implode(', ', $_POST['hope_schedule'])."<br>".
				'【内容】'.implode(', ', $_POST['ask_type'])."<br>".
				'【補足内容】'."<br>".
				str_replace("\n","<br>",_post('add_content'))."<br>".
				'【包装する製品の種類】'._post('package_type')."<br>".
				'【包装機明細】'._post('machine_detail')."<br>".
				'【包装機ピロー種類】'.implode(', ', $_POST['pillow_type'])."<br>".
				'【包装機稼働方法】'.implode(', ', $_POST['operate_method'])."<br>".
				'【印字内容】'.implode('、', $_POST['print_content'])."<br>".
				'【印字ピッチ】'._post('print_pitch')."<br>".
				'【印字ショット数】'._post('print_short')."<br>".
				'【充填から出荷までの工程】'._post('engineer_flow')."<br>".
				'【化学物質等の付着】'._post('chemical_element')."<br>".
				'【貴社名】'._post('your_company')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name')."<br>".
				'【所在地】'._post('your_address')."<br>".
				'【電話番号】'._post('your_phone')."<br>".
				'【メールアドレス】'._post('your_mail')."<br>".
				'【メールアドレス（確認用）】'._post('your_mail_confirm')."<br>".
				'【ホームページアドレス】'._post('your_website')."<br>";

			$mailer->ClearAllRecipients( );
			$mailer->AddAddress('ianchen0419@gmail.com');
			// $mailer->AddAddress('domesticinfo@co-shinmei.com');
			$mailer->Send();
		}

		?>

		<figure class="jprs">
			<img src="<?php bloginfo('template_directory') ?>/inc/img/material/jprs.png" alt="jprs" />
			<figcaption>This site is certified by JPRS. Information transmission is protected by encryption.</figcaption>
		</figure>
	</div>

</main>

<?php unset($_SESSION['finish']); ?>
<?php get_footer(); ?>