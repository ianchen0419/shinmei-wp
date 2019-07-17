<?php /* Template Name: _en_material__f */ ?>
<?php get_header();?>


<div id="visual">
	<h1 class="visual-title">Catalog Download</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>Input</li>
			<li>Confirmation</li>
			<li class="active">Catalog Download</li>
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
			array_push($your_data,$_POST['your_data1'],$_POST['your_data2'],$_POST['your_data3'],$_POST['your_data4'],$_POST['your_data5'],$_POST['your_data6'],$_POST['your_data7'],$_POST['your_data8'],$_POST['your_data9'],$_POST['your_data10'],$_POST['your_data11'],$_POST['your_data12'],$_POST['your_data13'],$_POST['your_data14'],$_POST['your_data15'],$_POST['your_data16']);
			
			// ユーザーへのメール
			require_once(ABSPATH . WPINC . '/class-phpmailer.php'); 
			$mailer = new PHPMailer();
			$mailer->SMTPSecure = "ssl";
			$mailer->Host = "smtp.gmail.com";
			// $mailer->Host = "smtp.alpha-prm.jp";
			$mailer->Port = 465;
			$mailer->CharSet = "utf-8";    
			$mailer->Username = "inquiry.workcapital@gmail.com";     
			// $mailer->Username = "overseacontact@co-shinmei.com";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "snm3921";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug  = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('overseacontact@co-shinmei.com');
			$mailer->setFrom('inquiry.workcapital@gmail.com', 'Shinmei Co.Ltd.'); 
			// $mailer->setFrom('overseacontact@co-shinmei.com', 'Shinmei Co.Ltd.'); 
			$mailer->Subject = 'Thank you for downloading our brochure.'; 
			$mailer->Body = 
				'Dear '._post('your_name')."<br><br>".

				'Thank you for downloading brochure of Shinmei\'s products.'."<br>".
				'We have received the following inquiry from you.'."<br><br><br><br>".


				'【Document】'."<br>".
				implode('<br>', array_filter($your_data))."<br>".
				'【Purpose】'.implode('、', $_POST['your_purpose'])."<br>".
				'【Schedule】'.implode('、', $_POST['your_schedule'])."<br>".
				'【Company Name】'._post('your_company')."<br>".
				'【Industry】'._post('your_career_type')."<br>".
				'【Department/Section】'._post('your_division')."<br>".
				'【Position】'._post('your_job_title')."<br>".
				'【Name】'._post('your_name')."<br>".
				'【Address】'._post('your_address')."<br>".
				'【Phone number】'._post('your_phone')."<br>".
				'【Email Address】'._post('your_mail')."<br>".
				'【Email Address (Again)】'._post('your_mail_confirm')."<br>".
				'【URL】'._post('your_website')."<br><br><br><br>".

				'---'."<br>".
				'Shinmei Co., Ltd.'."<br>".
				'2-3-3 Nihonbashi Bakucho Chuo-ku, Tokyo Fashion Face Building 3F / 4F'."<br>".
				'TEL:+81-3-3831-3921'."<br>".
				'FAX:+81-3-3831-7541'."<br>".
				'https://www.co-shinmei.com';

			$mailer->AddAddress(_post('your_mail'));

			if($mailer->Send()){ ?>

		<p>Thank you for applying for catalog download.<br>Please download the catalogs with blue background.</p>
		<p class="red-text">
			※Note<br>
			This page is only available to customers who have entered the information.<br>
			Please be aware that once you leave the page, you will not be able to access it.
		</p>
			
		<div class="section-title">
			<h2>Direct Thermal Printer</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data1'])?'':'disabled'; ?>" download="Desktop type single-sided direct thermal printer: SMP-350 Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Desktop type single-sided direct thermal printer:<br>SMP-350 Series</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data2'])?'':'disabled'; ?>" download="Desktop integrated direct thermal printer: AFB-350 Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Desktop integrated direct thermal printer:<br>AFB-350 Series</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data3'])?'':'disabled'; ?>" download="Duplex direct thermal printer: CPS-UB Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Duplex direct thermal printer:<br>CPS-UB Series</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-4.pdf" class="blue-button download-button <?php echo isset($_POST['your_data4'])?'':'disabled'; ?>" download="Direct thermal printer for small package: CPS-85E Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Direct thermal printer for small package:<br>CPS-85E Series</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-5.pdf" class="blue-button download-button <?php echo isset($_POST['your_data5'])?'':'disabled'; ?>" download="Roll film printing system: RPS Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Roll film printing system:<br>RPS Series</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-6.pdf" class="blue-button download-button <?php echo isset($_POST['your_data6'])?'':'disabled'; ?>" download="Ultra-compact direct thermal printer: SCS-410 Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Ultra-compact direct thermal printer:<br>SCS-410 Series</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/thermal-7.pdf" class="blue-button download-button <?php echo isset($_POST['your_data7'])?'':'disabled'; ?>" download="Printer for fertilizer bags: SMP-650 Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Printer for fertilizer bags:<br>SMP-650 Series</span>
			</a>
		</div>

		<div class="section-title">
			<h2>Auto Labeler</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/labeler-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data8'])?'':'disabled'; ?>" download="ALS-350N Series, Desktop auto labeling system for empty bags.">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>ALS-350N Series,<br>Desktop auto labeling system for empty bags.</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/labeler-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data9'])?'':'disabled'; ?>" download="ALS-100Ⅱ Series, In-line auto labeling system ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>ALS-100Ⅱ Series,<br>In-line auto labeling system </span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/labeler-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data10'])?'':'disabled'; ?>" download="Bottle labeler K.I. 2001">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Bottle labeler K.I. 2001</span>
			</a>
		</div>
		
		<div class="section-title">
			<h2>For eggs</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/egg-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data11'])?'':'disabled'; ?>" download="ALS1000SCS for labeling on eggs">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>ALS1000SCS for labeling on eggs</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/egg-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data12'])?'':'disabled'; ?>" download="In-pack label date printing CPS-85EⅢ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>In-pack label date printing CPS-85EⅢ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/egg-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data13'])?'':'disabled'; ?>" download="Egg content check device">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Egg content check device</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/egg-4.pdf" class="blue-button download-button <?php echo isset($_POST['your_data14'])?'':'disabled'; ?>" download="Date inspection camera for egg line">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Date inspection camera for egg line</span>
			</a>
		</div>

		<div class="section-title">
			<h2>Feeder / Stacker</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/feeder-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data15'])?'':'disabled'; ?>" download="Feeder / Stacker">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Feeder / Stacker</span>
			</a>
		</div>

		<div class="section-title">
			<h2>Stamper</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/stamper-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data16'])?'':'disabled'; ?>" download="Automatic general-purpose counting and sealing machine: CS Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Automatic general-purpose counting<br>and sealing machine: CS Series</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/stamper-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data17'])?'':'disabled'; ?>" download="Handprinter, sealer for endorsement: CS-BⅡ Series">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Handprinter, sealer for endorsement:<br>CS-BⅡ Series</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/stamper-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data18'])?'':'disabled'; ?>" download="Brochure stamper">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Brochure stamper</span>
			</a>
		</div>

		<div class="section-title">
			<h2>Others</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/others-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data19'])?'':'disabled'; ?>" download="Label / Seal">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>Label / Seal</span>
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
				'【資料入手の目的】'.implode('、', $_POST['your_purpose'])."<br>".
				'【導入ご希望予定時期】'.implode('、', $_POST['your_schedule'])."<br>".
				'【貴社名】'._post('your_company')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name')."<br>".
				'【所在地】〒'._post('your_address')."<br>".
				'【電話番号】'._post('your_phone')."<br>".
				'【メールアドレス】'._post('your_mail')."<br>".
				'【メールアドレス（確認用）】'._post('your_mail_confirm')."<br>".
				'【ホームページアドレス】'._post('your_website')."<br><br><br><br>";



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