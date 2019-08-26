<footer id="footer">
	<div class="contact-area">
		<div class="wrapper-size">
			<div class="company-intro">
				<h1><?php echo (get_current_blog_id()==1)?'株式会社シンメイ':'Shinmei Co., Ltd.' ?></h1>
				<p><?php echo (get_current_blog_id()==1)?'お客様のニーズに応え続けて導入実績4000社　1964年創業<br>ダイレクトサーマルプリンター　オートラベラー　チェックスタンパー':'4000 customers track record continue to meet the needs Since 1964.<br>Direct Thermal Printer   Auto Labeler    Check Stamper' ?></p>
			</div>
			<a href="tel:+81-3-3831-3921" class="tel-contact">
				<i class="fa fa-phone fa-fw"></i>
				<span><?php echo (get_current_blog_id()==1)?'お電話でのお問い合わせ':'Tel Inquiry :' ?></span>
				<span class="tel-number"><?php echo (get_current_blog_id()==1)?'03-3831-3921':'+81-3-3831-3921' ?></span>	
			</a>
			<a href="<?php bloginfo('url') ?>/inquiry" class="web-contact">
				<i class="fa fa-desktop fa-fw"></i>
				<span><?php echo (get_current_blog_id()==1)?'Webでのお問い合わせ':'Web Inquiry' ?></span>
			</a>
			<a href="<?php bloginfo('url') ?>/material" class="data-download" <?php echo (get_current_blog_id()==1)?'':'hidden' ?>>
				<i class="fa fa-download fa-fw"></i>
				<span>資料ダウンロード</span>
			</a>
		</div>
	</div>
	<div class="sitemap-area">
		<div class="wrapper-size">
			<h1 align="center"><?php echo (get_current_blog_id()==1)?'株式会社シンメイ':'Shinmei Co., Ltd.' ?></h1>
			<p align="center"><?php echo (get_current_blog_id()==1)?'お客様のニーズに応え続けて導入実績4000社　1964年創業<br>ダイレクトサーマルプリンター　オートラベラー　チェックスタンパー':'4000 customers track record continue to meet the needs Since 1964.<br>Direct Thermal Printer   Auto Labeler    Check Stamper' ?></p>
			<div class="sitemap-address">
				<div class="left">TEL. 03-3831-3921   /   FAX. 03-3831-7541</div>
				<div>
					<a href="<?php bloginfo('url') ?>/sitemap"><?php echo (get_current_blog_id()==1)?'サイトマップ':'Sitemap' ?></a>
					<a href="<?php bloginfo('url') ?>/privacy"><?php echo (get_current_blog_id()==1)?'個人情報保護方針':'Privacy Policy' ?></a>
				</div>
			</div>
			<div class="copyright">Copyright @ Shinmei Co., Ltd.  All rights reserved.</div>
		</div>
	</div>
</footer>
<script src="<?php bloginfo('template_directory') ?>/base.js"></script>

</body>
</html>