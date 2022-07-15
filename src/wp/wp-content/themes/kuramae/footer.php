<footer>
	<div class="container">
		<div class="row">
    		<div class="col-12 col-lg-12">
                <a href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/SVG/logo.svg" alt="" class="img-fluid mb-3" width="200"></a>
                <ul>
                    <li><a target="_blank" href="<?php echo home_url('/whatsnews/'); ?>">新着情報</a></li>
                    <li><a target="_blank" href="<?php echo home_url('/about/'); ?>">PROSTYLEについて</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/terms/">利用規約</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/antisocial/">反社会的勢力排除に関する基本方針</a></li>
                    <li><a target="_blank" href="https://www.prostyle-residence.com/privacy-policy/">プライバシーポリシー</a></li>
                    <li><a target="_blank" href="https://www.propolife.co.jp/socialpolicy/">ソーシャルメディアポリシー</a></li>
                </ul>
                
                <ul class="mb-0">
                    <li><a target="_blank" href="https://www.prostyle-residence.com/">【売主】 <img src="<?php bloginfo('template_directory');?>/assets/images/logo_small.svg" alt="" width="116"> </a></li>
                </ul>
            </div>
		</div>
	</div>
    <div class="footer_bottom">
        <address>
            <p class="mb-0">Copyright © <a target="_blank" href="https://www.prostyle-residence.com/">PROSTYLE INC.</a> All Rights Reserved.</p>
        </address>
    </div>
</footer>

<section class="section_request">
    <a class="btn" href="<?php echo home_url('/inquiry/'); ?>"><span>WEB資料請求はこちら</span></a>
</section>

<div class="bsnav-mobile d-sm-block">
  <div class="bsnav-mobile-overlay"></div>
  <div class="navbar"></div>
</div>

<?php 
    require 'template-page/js-footer.php';
?>

</body>
</html>