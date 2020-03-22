<?php /* Template Name: _en_inquiry-005__f */ ?>
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
			// $mailer->Username = "ovseiq@co-shinmei.com";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "snm3921";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug  = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('ovseiq@co-shinmei.com');
			$mailer->setFrom('inquiry.workcapital@gmail.com', 'Shinmei Co.Ltd.'); 
			// $mailer->setFrom('ovseiq@co-shinmei.com', 'Shinmei Co.Ltd.'); 
			$mailer->Subject = 'Thank you for contacting us.'; 
			$mailer->Body = 
				'Dear '._post('your_name')."<br><br>".

				'Thank you for your interest in Shinmei.'."<br>".
				'We will review your inquiry and contact you soon.'."<br><br><br><br>".

				'【Product name】'._post('product_name')."<br>".
				'【Schedule】'.implode(', ', $_POST['hope_schedule'])."<br>".
				'【Purpose】'.implode(', ', $_POST['ask_type'])."<br>".
				'【Message】'."<br>".
				str_replace("\n","<br>",_post('add_content'))."<br>".
				'【Use】'._post('use_type')."<br>".
				'【Current method】'._post('now_method')."<br>".
				'【Stamped content】'._post('print_content')."<br>".
				'【Daily usage for printing object】'._post('print_amount')."<br>".
				'【Material of stamped paper】'._post('paper_type')."<br>".
				'【Paper size / thickness】'._post('paper_size')."<br>".
				'【Company】'._post('your_company')."<br>".
				'【Industry】'._post('your_career_type')."<br>".
				'【Department / Section】'._post('your_division')."<br>".
				'【Position】'._post('your_job_title')."<br>".
				'【Name】'._post('your_name')."<br>".
				'【Address】'._post('your_address')."<br>".
				'【Phone number】'._post('your_phone')."<br>".
				'【Email Address】'._post('your_mail')."<br>".
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

				'【製品名】'._post('product_name')."<br>".
				'【導入ご希望予定時期】'.implode(', ', $_POST['hope_schedule'])."<br>".
				'【内容】'.implode(', ', $_POST['ask_type'])."<br>".
				'【補足内容】'."<br>".
				str_replace("\n","<br>",_post('add_content'))."<br>".
				'【用途】'._post('use_type')."<br>".
				'【現在の方法】'._post('now_method')."<br>".
				'【押印内容】'._post('print_content')."<br>".
				'【印字対象の1日の使用量】'._post('print_amount')."<br>".
				'【押印する紙の材質】'._post('paper_type')."<br>".
				'【紙のサイズ・厚さ】'._post('paper_size')."<br>".
				'【貴社名】'._post('your_company')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name')."<br>".
				'【所在地】'._post('your_address')."<br>".
				'【電話番号】'._post('your_phone')."<br>".
				'【メールアドレス】'._post('your_mail')."<br>".
				'【ホームページアドレス】'._post('your_website')."<br>";

			$mailer->ClearAllRecipients( );
			$mailer->AddAddress('ianchen0419@gmail.com');
			// $mailer->AddAddress('sadao.yoshii@co-shinmei.com');
			// $mailer->AddAddress('takaharu.inoue@co-shinmei.com');
			// $mailer->AddAddress('norihira_inoue@co-shinmei.com');
			// $mailer->AddAddress('s-yamano@co-shinmei.com');
			// $mailer->AddAddress('kanda88@co-shinmei.com');
			// $mailer->AddAddress('manabu.kayama@co-shinmei.com');
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