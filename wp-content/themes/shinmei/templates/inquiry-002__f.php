<?php /* Template Name: inquiry-002__f */ ?>
<?php get_header();?>

<div id="visual">
	<h1 class="visual-title">製品についてのお問い合わせ</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>入力</li>
			<li>確認</li>
			<li class="active">完了</li>
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
			// $mailer->Username = "domeiq@co-shinmei.com";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "snm3921";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug  = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('domeiq@co-shinmei.com');
			$mailer->setFrom('inquiry.workcapital@gmail.com', '株式会社シンメイ'); 
			// $mailer->setFrom('domeiq@co-shinmei.com', '株式会社シンメイ'); 
			$mailer->Subject = 'シンメイへお問い合わせをいただき有難うございます。'; 
			$mailer->Body = 
				_post('your_company')."<br>".
				_post('your_name').'様'."<br><br>".
				'この度はシンメイへお問い合わせいただき、誠に有難うございます。'."<br>".
				'弊社担当者よりご連絡をさせていただきます。'."<br><br><br><br>".

				'【製品名】'._post('product_name')."<br>".
				'【導入ご希望予定時期】'.implode('、', $_POST['hope_schedule'])."<br>".
				'【内容】'.implode('、', $_POST['ask_type'])."<br>".
				'【補足内容】'."<br>".
				str_replace("\n","<br>",_post('add_content'))."<br>".
				'【現在の印字・表示方法】'._post('print_method')."<br>".
				'【印字対象の1日の使用量】'._post('use_amount')."<br>".
				'【印字対象の材質】'._post('print_material')."<br>".
				'【印字対象の機能】'._post('print_function')."<br>".
				'【印字対象のサイズ・厚さ】'._post('print_size')."<br>".
				'【充填から出荷までの工程】'._post('engineer_flow')."<br>".
				'【化学物質等の付着】'._post('chemical_element')."<br>".
				'【ご希望回答方法】'.implode('、', $_POST['your_answer'])."<br>".
				'【貴社名】'._post('your_company').'　'._post('your_company_furigana')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name').'　'._post('your_name_furigana')."<br>".
				'【所在地】〒'._post('your_postcode').'　'._post('your_address1')._post('your_address2')._post('your_address3')."<br>".
				'【電話番号】'._post('your_phone')."<br>".
				'【メールアドレス】'._post('your_mail')."<br>".
				'【ホームページアドレス】'._post('your_website')."<br>".

				'---'."<br>".
				'株式会社シンメイ'."<br>".
				'東京都中央区日本橋馬喰町2-3-3　ファッションフェイスビル3F/4F'."<br>".
				'TEL：03(3831)3921(代)'."<br>".
				'FAX：03(3831)7541'."<br>".
				'https://www.co-shinmei.com';

			$mailer->AddAddress(_post('your_mail'));

			if($mailer->Send()){
				echo '<p>お問い合わせありがとうございました。<br>内容によりましては、ご返答にお時間をいただく場合もございますので、あらかじめご了承ください。<br>今後ともシンメイをよろしくお願いいたします。</p>';

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
				'【導入ご希望予定時期】'.implode('、', $_POST['hope_schedule'])."<br>".
				'【内容】'.implode('、', $_POST['ask_type'])."<br>".
				'【補足内容】'."<br>".
				str_replace("\n","<br>",_post('add_content'))."<br>".
				'【現在の印字・表示方法】'._post('print_method')."<br>".
				'【印字対象の1日の使用量】'._post('use_amount')."<br>".
				'【印字対象の材質】'._post('print_material')."<br>".
				'【印字対象の機能】'._post('print_function')."<br>".
				'【印字対象のサイズ・厚さ】'._post('print_size')."<br>".
				'【充填から出荷までの工程】'._post('engineer_flow')."<br>".
				'【化学物質等の付着】'._post('chemical_element')."<br>".
				'【ご希望回答方法】'.implode('、', $_POST['your_answer'])."<br>".
				'【貴社名】'._post('your_company').'　'._post('your_company_furigana')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name').'　'._post('your_name_furigana')."<br>".
				'【所在地】〒'._post('your_postcode').'　'._post('your_address1')._post('your_address2')._post('your_address3')."<br>".
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
			<figcaption>このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。</figcaption>
		</figure>
	</div>

</main>

<?php unset($_SESSION['finish']); ?>
<?php get_footer(); ?>