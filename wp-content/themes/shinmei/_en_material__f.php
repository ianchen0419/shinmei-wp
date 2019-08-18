<?php /* Template Name: _en_material__f */ ?>
<?php get_header();?>


<div id="visual">
	<h1 class="visual-title">Product Brochure Download</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>Input</li>
			<li>Confirmation</li>
			<li class="active">Download</li>
		</ol>

		
		<?php

		error_reporting(0);

		function _post($str){
		    $val=htmlspecialchars($_POST[$str]);
		    return $val;
		}
		// $_POST['str']ではなくて、_post('str')を利用する

		if ($_SESSION['finish']==true){

			$your_data=array();
			array_push($your_data,$_POST['your_data1'],$_POST['your_data2'],$_POST['your_data3'],$_POST['your_data4'],$_POST['your_data5'],$_POST['your_data6']);
			
			// ユーザーへのメール
			require_once(ABSPATH . WPINC . '/class-phpmailer.php'); 
			$mailer = new PHPMailer();
			$mailer->SMTPSecure = "ssl";
			$mailer->Host = "smtp.gmail.com";
			// $mailer->Host = "smtp.alpha-prm.jp";
			$mailer->Port = 465;
			$mailer->CharSet = "utf-8";    
			$mailer->Username = "inquiry.workcapital@gmail.com";     
			// $mailer->Username = "ovsebr@co-shinmei.com";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "snm3921";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug  = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('ovsebr@co-shinmei.com');
			$mailer->setFrom('inquiry.workcapital@gmail.com', 'Shinmei Co.Ltd.'); 
			// $mailer->setFrom('ovsebr@co-shinmei.com', 'Shinmei Co.Ltd.'); 
			$mailer->Subject = 'Thank you for downloading our brochure.'; 
			$mailer->Body = 
				'Dear '._post('your_name')."<br><br>".

				'Thank you for downloading brochure of Shinmei\'s products.'."<br>".
				'We have received the following inquiry from you.'."<br><br><br><br>".


				'【Document】'."<br>".
				implode('<br>', array_filter($your_data))."<br>".
				'【Purpose】'.implode(', ', $_POST['your_purpose'])."<br>".
				'【Schedule】'.implode(', ', $_POST['your_schedule'])."<br>".
				'【Company Name】'._post('your_company')."<br>".
				'【Industry】'._post('your_career_type')."<br>".
				'【Department/Section】'._post('your_division')."<br>".
				'【Position】'._post('your_job_title')."<br>".
				'【Name】'._post('your_name')."<br>".
				'【Address】'._post('your_address')."<br>".
				'【Phone number】'._post('your_phone')."<br>".
				'【Email Address】'._post('your_mail')."<br>".
				'【URL】'._post('your_website')."<br><br><br><br>".

				'---'."<br>".
				'Shinmei Co., Ltd.'."<br>".
				'2-3-3 Nihonbashi Bakucho Chuo-ku, Tokyo Fashion Face Building 3F / 4F'."<br>".
				'TEL:+81-3-3831-3921'."<br>".
				'FAX:+81-3-3831-7541'."<br>".
				'https://www.co-shinmei.com';

			$mailer->AddAddress(_post('your_mail'));

			if($mailer->Send()){ ?>

		<p>Thank you for applying for product brochure download.<br>Please download the brochure with blue background.</p>
		<p class="red-text">
			※Note<br>
			This page is only available to customers who have entered the information.<br>
			Please be aware that once you leave the page, you will not be able to access it.
		</p>
			
		<div class="section-title">
			<h2>General</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/en/general-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data1'])?'':'disabled'; ?>" download="R Combination of products by Shinmei(kaigai)">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Total Product Brochure</span>
			</a>
		</div>

		<div class="section-title">
			<h2>Direct Thermal Printer</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/en/thermal-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data2'])?'':'disabled'; ?>" download="SMP Printer Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Desktop Direct Thermal Printer</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/en/thermal-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data3'])?'':'disabled'; ?>" download="WONDERFUL PRINTER">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Direct Thermal Printer for Packaging Machine</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/en/thermal-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data4'])?'':'disabled'; ?>" download="Roll Film Printer System">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Desktop Type Roll Film Direct Thermal Printer</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/en/thermal-4.pdf" class="blue-button download-button <?php echo isset($_POST['your_data5'])?'':'disabled'; ?>" download="SA-P2">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Desktop Type Semi Auto Printer</span>
			</a>
		</div>
		
		<div class="section-title">
			<h2>Auto Labeler</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/en/labeler-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data6'])?'':'disabled'; ?>" download="Empty Bag Labeler">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Auto Labeler ALS-350 Series</span>
			</a>
		</div>

		<?php }else{
				echo '<p>失敗しました</p>';	
			}

			//担当者へのメール
			$mailer->setFrom(_post('your_mail'), _post('your_name')); 
			$mailer->Subject = 'ホームページ）資料ダウンロード'; 
			$mailer->Body = 
				'各位'."<br><br>".
				'ホームページから資料ダウンロードがありました。'."<br>".
				'下記ご確認、ご対応をお願いします。'."<br><br><br><br>".

				'【ご希望の資料】'."<br>".
				implode('<br>', array_filter($your_data))."<br>".
				'【資料入手の目的】'.implode(', ', $_POST['your_purpose'])."<br>".
				'【導入ご希望予定時期】'.implode(', ', $_POST['your_schedule'])."<br>".
				'【貴社名】'._post('your_company')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name')."<br>".
				'【所在地】'._post('your_address')."<br>".
				'【電話番号】'._post('your_phone')."<br>".
				'【メールアドレス】'._post('your_mail')."<br>".
				'【ホームページアドレス】'._post('your_website')."<br><br><br><br>";



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