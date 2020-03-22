<?php /* Template Name: material__f */ ?>
<?php get_header();?>


<div id="visual">
	<h1 class="visual-title">資料ダウンロード</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>入力</li>
			<li>確認</li>
			<li class="active">資料ダウンロード</li>
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
			// $mailer->Username = "domebr@co-shinmei.com";     
			$mailer->Password = "contactwc180623@";
			// $mailer->Password = "snm3921";
			$mailer->IsSMTP();
			$mailer->SMTPAuth = true;
			// $mailer->SMTPDebug  = 2;
			$mailer->Encoding = "base64";
			$mailer->IsHTML(true); 
			$mailer->AddReplyTo('inquiry.workcapital@gmail.com');
			// $mailer->AddReplyTo('domebr@co-shinmei.com');
			$mailer->setFrom('inquiry.workcapital@gmail.com', '株式会社シンメイ'); 
			// $mailer->setFrom('domebr@co-shinmei.com', '株式会社シンメイ'); 
			$mailer->Subject = '製品カタログをダウンロードしていただき有難うございます。'; 
			$mailer->Body = 
				_post('your_company')."<br>".
				_post('your_name').'様'."<br><br>".
				'この度はシンメイの製品カタログをダウンロードしていただき、誠に有難うございます。'."<br>".
				'製品について詳しい説明が必要でしたら、何なりとお気軽にお尋ね下さい。'."<br>".
				'今後ともシンメイをよろしくお願い申し上げます。'."<br><br><br><br>".

				'【ご希望の資料】'."<br>".
				implode('<br>', array_filter($your_data))."<br>".
				'【資料入手の目的】'._post('your_purpose')."<br>".
				'【導入ご希望予定時期】'._post('your_schedule')."<br>".
				'【貴社名】'._post('your_company').'　'._post('your_company_furigana')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name').'　'._post('your_name_furigana')."<br>".
				'【所在地】〒'._post('your_postcode').'　'._post('your_address1')._post('your_address2')._post('your_address3')."<br>".
				'【電話番号】'._post('your_phone')."<br>".
				'【メールアドレス】'._post('your_mail')."<br>".
				'【ホームページアドレス】'._post('your_website')."<br><br><br><br>".

				'---'."<br>".
				'株式会社シンメイ'."<br>".
				'東京都中央区日本橋馬喰町2-3-3　ファッションフェイスビル3F/4F'."<br>".
				'TEL：03(3831)3921(代)'."<br>".
				'FAX：03(3831)7541'."<br>".
				'https://www.co-shinmei.com';

			$mailer->AddAddress(_post('your_mail'));

			if($mailer->Send()){ ?>

		<p>資料ダウンロード申し込みへのご入力をいただき、有難うございます。<br>青色の背景の製品カタログをダウンロード下さい。</p>
		<p class="red-text">
			※注意<br>
			本ページは、資料ダウンロードフォームにご入力いただいたお客様のみ閲覧が可能となっています。<br>
			ブックマークをされたり、他の方にURLを伝えても、アクセスができません。<br>
			一度ページを離れてしまうと、アクセスができなくなりますのでご注意ください。
		</p>
			
		<div class="section-title">
			<h2>サーマルダイレクトプリンター</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data1'])?'':'disabled'; ?>" download="卓上型ダイレクトサーマルプリンター ＳＭＰ-３５０シリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>卓上型ダイレクトサーマルプリンター<br>ＳＭＰ-３５０シリーズ</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data2'])?'':'disabled'; ?>" download="卓上型一体ダイレクトサーマルプリンター ＡＦＢ-３５０シリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>卓上型一体ダイレクトサーマルプリンター<br>ＡＦＢ-３５０シリーズ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data3'])?'':'disabled'; ?>" download="両面同時ダイレクトサーマルプリンター ＣＰＳ-ＵＢシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>両面同時ダイレクトサーマルプリンター<br>ＣＰＳ-ＵＢシリーズ</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-4.pdf" class="blue-button download-button <?php echo isset($_POST['your_data4'])?'':'disabled'; ?>" download="小袋用ダイレクトサーマルプリンター ＣＰＳ-８５Ｅシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>小袋用ダイレクトサーマルプリンター<br>ＣＰＳ-８５Ｅシリーズ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-5.pdf" class="blue-button download-button <?php echo isset($_POST['your_data5'])?'':'disabled'; ?>" download="ロールフィルムプリントシステム ＲＰＳシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>ロールフィルムプリントシステム<br>ＲＰＳシリーズ</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-6.pdf" class="blue-button download-button <?php echo isset($_POST['your_data6'])?'':'disabled'; ?>" download="包装機対応ダイレクトサーマルプリンター ＳＣＳ-４１０シリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>包装機対応ダイレクトサーマルプリンター<br>ＳＣＳ-４１０シリーズ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/thermal-7.pdf" class="blue-button download-button <?php echo isset($_POST['your_data7'])?'':'disabled'; ?>" download="大袋用ダイレクトサーマルプリンター ＳＭＰ-６５０シリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>大袋用ダイレクトサーマルプリンター<br>ＳＭＰ-６５０シリーズ</span>
			</a>
		</div>

		<div class="section-title">
			<h2>オートラベラー</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/labeler-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data8'])?'':'disabled'; ?>" download="卓上型空袋ラベラー ＡＬＳ-３５０Ｎシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>卓上型空袋ラベラー<br>ＡＬＳ-３５０Ｎシリーズ</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/labeler-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data9'])?'':'disabled'; ?>" download="インラインオートラベリングシステム ＡＬＳ-１００Ⅱシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>インラインオートラベリングシステム<br>ＡＬＳ-１００Ⅱシリーズ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/labeler-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data10'])?'':'disabled'; ?>" download="ボトルラベラーK.I.2001">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>ボトルラベラーK.I.2001</span>
			</a>
		</div>
		
		<div class="section-title">
			<h2>鶏卵用</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/egg-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data11'])?'':'disabled'; ?>" download="鶏卵パック上貼り機 ＡＬＳ-１０００ＳＣＳシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>鶏卵パック上貼り機<br>ＡＬＳ-１０００ＳＣＳシリーズ</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/egg-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data12'])?'':'disabled'; ?>" download="インパックラベル日付印字プリンター ＣＰＳ-８５ＥⅢシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>インパックラベル日付印字プリンター<br>ＣＰＳ-８５ＥⅢシリーズ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/egg-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data13'])?'':'disabled'; ?>" download="鶏卵中身有無装置">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>鶏卵中身有無装置</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/egg-4.pdf" class="blue-button download-button <?php echo isset($_POST['your_data14'])?'':'disabled'; ?>" download="鶏卵ライン用日付検査カメラ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>鶏卵ライン用日付検査カメラ</span>
			</a>
		</div>

		<div class="section-title">
			<h2>フィーダー・スタッカー</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/feeder-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data15'])?'':'disabled'; ?>" download="フィーダー・スタッカー">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>フィーダー・スタッカー</span>
			</a>
		</div>

		<div class="section-title">
			<h2>チェックスタンパー</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/stamper-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data16'])?'':'disabled'; ?>" download="自動汎用計数押印機 ＣＳシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>自動汎用計数押印機<br>ＣＳシリーズ</span>
			</a>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/stamper-2.pdf" class="blue-button download-button <?php echo isset($_POST['your_data17'])?'':'disabled'; ?>" download="手形振出・裏書用押印機 ＣＳ-ＢⅡシリーズ">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>手形振出・裏書用押印機<br>ＣＳ-ＢⅡシリーズ</span>
			</a>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/stamper-3.pdf" class="blue-button download-button <?php echo isset($_POST['your_data18'])?'':'disabled'; ?>" download="パンフレットスタンパー">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>パンフレットスタンパー</span>
			</a>
		</div>

		<div class="section-title">
			<h2>その他</h2>
		</div>
		<div>
			<a href="<?php bloginfo('template_directory') ?>/inc/download/jp/others-1.pdf" class="blue-button download-button <?php echo isset($_POST['your_data19'])?'':'disabled'; ?>" download="ラベル / シール">
				<i class="fa fa-file-text-o fa-fw"></i>
				<span>ラベル / シール</span>
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
				'【資料入手の目的】'._post('your_purpose')."<br>".
				'【導入ご希望予定時期】'._post('your_schedule')."<br>".
				'【貴社名】'._post('your_company').'　'._post('your_company_furigana')."<br>".
				'【業種】'._post('your_career_type')."<br>".
				'【部署名】'._post('your_division')."<br>".
				'【役職名】'._post('your_job_title')."<br>".
				'【ご担当者名】'._post('your_name').'　'._post('your_name_furigana')."<br>".
				'【所在地】〒'._post('your_postcode').'　'._post('your_address1')._post('your_address2')._post('your_address3')."<br>".
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
			<figcaption>このサイトはJPRSにより認証されています。<br>情報送信は暗号化により保護されます。</figcaption>
		</figure>

	</div>

</main>

<?php unset($_SESSION['finish']); ?>
<?php get_footer(); ?>