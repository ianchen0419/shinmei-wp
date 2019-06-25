<?php /* Template Name: material__c */ ?>
<?php get_header(); ?>

<div id="visual">
	<h1 class="visual-title">資料ダウンロード</h1>
</div>
<main id="contact">
	<div class="wrapper-size">
		<ol class="contact-path step">
			<li>入力</li>
			<li class="active">確認</li>
			<li>資料ダウンロード</li>
		</ol>
		<p>ご記入内容をお確かめの上、送信ボタンを押してください。<br>送信後には選択された資料のダウンロードが可能です。
		</p>
		<?php 	
		if ($_SESSION['conf']!=true){ ?>
		<form action="" method="POST" hidden>
		<?php }else{ ?>
		<form action="<?php bloginfo('url') ?>/material/finish" method="POST" onsubmit="goMail(this, event);">	
		<?php }?>
			
			<table width="100%" class="fertilizer-table">
				<tbody>
					<tr>
						<th width="20%">ご希望の資料</th>
						<td width="80%">
							<h4>サーマルダイレクトプリンター</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data1" disabled readonly <?php echo isset($_POST['your_data1'])?'checked':''; ?> value="卓上型ダイレクトサーマルプリンター ＳＭＰ-３５０シリーズ" />
								<i class="fa fa-check"></i>
								<span>卓上型ダイレクトサーマルプリンター<br>ＳＭＰ-３５０シリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data2" disabled readonly <?php echo isset($_POST['your_data2'])?'checked':''; ?> value="卓上型一体ダイレクトサーマルプリンター ＡＦＢ-３５０シリーズ" />
								<i class="fa fa-check"></i>
								<span>卓上型一体ダイレクトサーマルプリンター<br>ＡＦＢ-３５０シリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data3" disabled readonly <?php echo isset($_POST['your_data3'])?'checked':''; ?> value="両面同時ダイレクトサーマルプリンター ＣＰＳ-ＵＢシリーズ" />
								<i class="fa fa-check"></i>
								<span>両面同時ダイレクトサーマルプリンター<br>ＣＰＳ-ＵＢシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data4" disabled readonly <?php echo isset($_POST['your_data4'])?'checked':''; ?> value="小袋用ダイレクトサーマルプリンター ＣＰＳ-８５Ｅシリーズ" />
								<i class="fa fa-check"></i>
								<span>小袋用ダイレクトサーマルプリンター<br>ＣＰＳ-８５Ｅシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data5" disabled readonly <?php echo isset($_POST['your_data5'])?'checked':''; ?> value="ロールフィルムプリントシステム ＲＰＳシリーズ" />
								<i class="fa fa-check"></i>
								<span>ロールフィルムプリントシステム<br>ＲＰＳシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data6" disabled readonly <?php echo isset($_POST['your_data6'])?'checked':''; ?> value="包装機対応ダイレクトサーマルプリンター ＳＣＳ-４１０シリーズ" />
								<i class="fa fa-check"></i>
								<span>包装機対応ダイレクトサーマルプリンター<br>ＳＣＳ-４１０シリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data7" disabled readonly <?php echo isset($_POST['your_data7'])?'checked':''; ?> value="包装機対応ダイレクトサーマルプリンター ＳＣＳ-４１０シリーズ" />
								<i class="fa fa-check"></i>
								<span>大袋用ダイレクトサーマルプリンター<br>ＳＭＰ-６５０シリーズ</span>
							</label>
							<h4>オートラベラー</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data8" disabled readonly <?php echo isset($_POST['your_data8'])?'checked':''; ?> value="卓上型空袋ラベラー ＡＬＳ-３５０Ｎシリーズ" />
								<i class="fa fa-check"></i>
								<span>卓上型空袋ラベラー<br>ＡＬＳ-３５０Ｎシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data9" disabled readonly <?php echo isset($_POST['your_data9'])?'checked':''; ?> value="インラインオートラベリングシステム ＡＬＳ-１００Ⅱシリーズ" />
								<i class="fa fa-check"></i>
								<span>インラインオートラベリングシステム<br>ＡＬＳ-１００Ⅱシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data10" disabled readonly <?php echo isset($_POST['your_data10'])?'checked':''; ?> value="ボトルラベラーK.I.2001" />
								<i class="fa fa-check"></i>
								<span>ボトルラベラーK.I.2001</span>
							</label>
							<h4>鶏卵用</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data11" disabled readonly <?php echo isset($_POST['your_data11'])?'checked':''; ?> value="鶏卵パック上貼り機 ＡＬＳ-１０００ＳＣＳシリーズ" />
								<i class="fa fa-check"></i>
								<span>鶏卵パック上貼り機<br>ＡＬＳ-１０００ＳＣＳシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data12" disabled readonly <?php echo isset($_POST['your_data12'])?'checked':''; ?> value="インパックラベル日付印字プリンター ＣＰＳ-８５ＥⅢシリーズ" />
								<i class="fa fa-check"></i>
								<span>インパックラベル日付印字プリンター<br>ＣＰＳ-８５ＥⅢシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data13" disabled readonly <?php echo isset($_POST['your_data13'])?'checked':''; ?> value="鶏卵中身有無装置" />
								<i class="fa fa-check"></i>
								<span>鶏卵中身有無装置</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data14" disabled readonly <?php echo isset($_POST['your_data14'])?'checked':''; ?> value="鶏卵ライン用日付検査カメラ" />
								<i class="fa fa-check"></i>
								<span>鶏卵ライン用日付検査カメラ</span>
							</label>
							<h4>フィーダー・スタッカー</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data15" disabled readonly <?php echo isset($_POST['your_data15'])?'checked':''; ?> value="フィーダー・スタッカー" />
								<i class="fa fa-check"></i>
								<span>フィーダー・スタッカー</span>
							</label>
							<h4>チェックスタンパー</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data16" disabled readonly <?php echo isset($_POST['your_data16'])?'checked':''; ?> value="自動汎用計数押印機 ＣＳシリーズ" />
								<i class="fa fa-check"></i>
								<span>自動汎用計数押印機<br>ＣＳシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data17" disabled readonly <?php echo isset($_POST['your_data17'])?'checked':''; ?> value="手形振出・裏書用押印機 ＣＳ-ＢⅡシリーズ" />
								<i class="fa fa-check"></i>
								<span>手形振出・裏書用押印機<br>ＣＳ-ＢⅡシリーズ</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" name="your_data18" disabled readonly <?php echo isset($_POST['your_data18'])?'checked':''; ?> value="パンフレットスタンパー" />
								<i class="fa fa-check"></i>
								<span>パンフレットスタンパー</span>
							</label>
							<h4>その他</h4>
							<label class="checkbox">
								<input type="checkbox" name="your_data19" disabled readonly <?php echo isset($_POST['your_data19'])?'checked':''; ?> value="ラベル / シール" />
								<i class="fa fa-check"></i>
								<span>ラベル / シール</span>
							</label>
						</td>
					</tr>
					<tr>
						<th>
							<span>資料入手の目的</span>
							<div class="badge">必須</div>
						</th>
						<td>
							<label class="checkbox">
								<input type="checkbox" checked disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose1'])?'checked':''; ?> value="新規導入の検討" />
								<i class="fa fa-check"></i>
								<span>新規導入の検討</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose2'])?'checked':''; ?> value="入れ替え導入の検討" />
								<i class="fa fa-check"></i>
								<span>入れ替え導入の検討</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose3'])?'checked':''; ?> value="試験導入の検討" />
								<i class="fa fa-check"></i>
								<span>試験導入の検討</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_purpose[]" required <?php echo isset($_POST['your_purpose4'])?'checked':''; ?> value="情報収集" />
								<i class="fa fa-check"></i>
								<span>情報収集</span>
							</label>
						</td>
					</tr>
					<tr>
						<th>
							<span>導入ご希望予定時期</span>
							<div class="badge">必須</div>
						</th>
						<td>
							<label class="checkbox">
								<input type="checkbox" checked disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule1'])?'checked':''; ?> value="すぐにでも" />
								<i class="fa fa-check"></i>
								<span>すぐにでも</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule2'])?'checked':''; ?> value="1ヶ月以内" />
								<i class="fa fa-check"></i>
								<span>1ヶ月以内</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule3'])?'checked':''; ?> value="3ヶ月以内" />
								<i class="fa fa-check"></i>
								<span>3ヶ月以内</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule4'])?'checked':''; ?> value="半年以内" />
								<i class="fa fa-check"></i>
								<span>半年以内</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule5'])?'checked':''; ?> value="1年以内" />
								<i class="fa fa-check"></i>
								<span>1年以内</span>
							</label>
							<label class="checkbox">
								<input type="checkbox" disabled readonly name="your_schedule[]" required <?php echo isset($_POST['your_schedule6'])?'checked':''; ?> value="未定" />
								<i class="fa fa-check"></i>
								<span>未定</span>
							</label>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="form-center">
				<div class="contact-item">
					<div class="title">
						<span>貴社名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_company" class="short" required value="<?php echo $_POST['your_company'] ?>" />
					<input disabled readonly type="text" name="your_company_furigana" class="short" required value="<?php echo $_POST['your_company_furigana'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>業種</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_career_type" required value="<?php echo $_POST['your_career_type'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>部署名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_division" required value="<?php echo $_POST['your_division'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>役職名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_job_title" required value="<?php echo $_POST['your_job_title'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>ご担当者名</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="text" name="your_name" class="short" required value="<?php echo $_POST['your_name'] ?>" />
					<input disabled readonly type="text" name="your_name_furigana" class="short" required value="<?php echo $_POST['your_name_furigana'] ?>" />
				</div>
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
				<div class="contact-item">
					<div class="title">
						<span>電話番号</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="tel" name="your_phone" required value="<?php echo $_POST['your_phone'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス</span>
						<div class="badge">必須</div>
					</div>
					<input disabled readonly type="email" name="your_mail" required value="<?php echo $_POST['your_mail'] ?>" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス（確認用）</span>
						<div class="badge">必須</div>
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
					<span>「</span><a href="privacy.html" target="_blank" class="link-text">個人情報保護方針</a><span>」に同意する</span>
				</label>
				<div class="badge agree-badge">必須</div>
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