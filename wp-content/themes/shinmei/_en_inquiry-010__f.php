<?php /* Template Name: _en_inquiry-010__f */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">Inquiry about printing test</h1>
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
			$mailer->Subject = '印字テストのご依頼をいただき有難うございます。'; 
			$mailer->Body = 
				'Dear '._post('your_name')."<br><br>".

				'Thank you for your interest in Shinmei.'."<br>".
				'We will review your inquiry and contact you soon.'."<br><br><br><br>".


				'【Title】Inquiry about printing test'."<br>".
				'【Print / display contents】'."<br>".
				str_replace("\n","<br>",_post('print_content'))."<br>".
				'【Print and display size】'._post('print_size')."<br>".
				'【Print / display color】'._post('print_color')."<br>".
				'【包Material of packaging】'._post('package_material')."<br>".
				'【Package size and thickness】'._post('package_size')."<br>".
				'【Function of packaging】'._post('package_function')."<br>".
				'【Process from filling to shipping】'._post('engineer_flow')."<br>".
				'【Adhesion of chemical substances】'._post('chemical_element')."<br>".
				'【Number of print samples prepared】'._post('sample_amount')."<br>".
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
			$mailer->Subject = 'ホームページ）印字テストのお問い合わせ'; 
			$mailer->Body = 
				'各位'."<br><br>".
				'ホームページからお問い合わせがありました。'."<br>".
				'下記ご確認、ご対応をお願いします。'."<br><br><br><br>".

				'【お問い合わせ内容】印字テストのご依頼'."<br>".
				'【印字・表示内容】'."<br>".
				str_replace("\n","<br>",_post('print_content'))."<br>".
				'【印字・表示のサイズ】'._post('print_size')."<br>".
				'【印字・表示の色】'._post('print_color')."<br>".
				'【包装（印字対象）の材質】'._post('package_material')."<br>".
				'【包装（印字対象）のサイズ・厚さ】'._post('package_size')."<br>".
				'【包装（印字対象）の機能】'._post('package_function')."<br>".
				'【充填から出荷までの工程】'._post('engineer_flow')."<br>".
				'【化学物質等の付着】'._post('chemical_element')."<br>".
				'【印字サンプル用意枚数】'._post('sample_amount')."<br>".
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
			// $mailer->AddAddress('sadao.yoshii@co-shinmei.com');
			// $mailer->AddAddress('takaharu.inoue@co-shinmei.com');
			// $mailer->AddAddress('norihira_inoue@co-shinmei.com');
			// $mailer->AddAddress('manabu.kayama@co-shinmei.com');
			// $mailer->AddAddress('Kanda88ryu@co-shinmei.com');
			// $mailer->AddAddress('s-yamano@co-shinmei.com');
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