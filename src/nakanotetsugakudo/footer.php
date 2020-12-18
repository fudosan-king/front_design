<a href="#" id="scrollup" class="toppage d-block d-md-none"><i class="fal fa-chevron-up fa-2x"></i></a>
<footer>
	<div class="container">
		<h5>Contact</h5>
		<div class="row">
			<div class="col-12">
				<div class="w_btn_gradient mt-0">
					<a href="contact/reservation/" class="btn btn_gradient btnReserve">
						<p>Reserve</p>
						<p>来場予約はこちら</p>
					</a>
					<a href="contact/material/" class="btn btn_gradient btnEntry">
						<p>Entry</p>
						<p>資料請求はこちら</p>
					</a>
				</div>
			</div>

			<div class="col-12">
				<div class="box_changelife">
					<div class="row">
						<div class="col-12 col-sm-6 align-self-center">
							<div class="box_changelife_body">
								<div class="row no-gutters">
									<div class="col-6 col-md-7 align-self-center">
										<a href="sumikae.php"><img src="images/1x/logo_footer.svg" alt="" class="img-fluid" width="185"></a>
									</div>
									<div class="col-6 col-md-5 align-self-center">
										<p>住み替えを<br>
										ご希望の方</p>
									</div>
								</div>
								<a href="sumikae.php" class="btn btn_clickHere mt-3">>> 詳細はコチラ</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 align-self-center">
							<div class="box_changelife_body">
								<div class="row no-gutters">
									<div class="col-6 col-md-5 align-self-center">
										<div class="img_intro_thecharm">
											<img src="images/1x/intro_thecharm.jpg" alt="" class="img-fluid rounded">
										</div>
									</div>
									<div class="col-6 col-md-7 align-self-center">
										<p class="pl-3">完成済み物件の<br>
										魅力をご紹介</p>
									</div>
								</div>
								<a href="merit.php" class="btn btn_clickHere">>> 詳細はコチラ</a>
							</div>
						</div>
					</div>
				</div>
				<div class="box_footer_bottom">
					<ul class="menu_footer d-none d-sm-none d-md-block">
						<li><a href="/nakanotetsugakudo/">トップ</a></li>
						<li><a href="design.php">デザイン</a></li>
						<li><a href="location.php">ロケーション</a></li>
						<li><a href="access.php">アクセス</a></li>
						<li><a href="modelroom.php">モデルルーム</a></li>
						<li><a href="equipment.php">設備仕様</a></li>
						<li><a href="plan.php">プラン</a></li>
						<li><a href="pricelist.php">プライスリスト</a></li>
						<li><a href="map.php" onclick="centeredPopup(this.href,'myWindow','1000','700','yes');return false">現地案内図</a></li>
						<li><a href="outline.php">物件概要</a></li>
					</ul>
					<p class="mb-0">お問い合わせは「プレシス中野哲学堂パークフロント」現地販売センター</p>
					<a href="tel:0120965297"><p class="freecall"><i class="i_freecall"></i> 0120-965-297</p></a>
					<p>営業時間/10：00～19：00 定休日/火・水曜日（祝日除く）</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<section class="section_lastbottom">
	<div class="container">
		<div class="row">
			<div class="col-3 text-center">
			</div>
			<div class="col-6 text-center">
				＜売主・販売＞ <img src="images/1x/logo_prostyle.svg" alt="" class="img-fluid" width="250">
			</div>
		</div>
	</div>
</section>

<div class='back-to-top d-none d-md-block' id='back-to-top' title='Back to top'>
  <i class="fal fa-angle-up fa-3x"></i>
</div>

<!-- menu on mobile -->
<div class="bsnav-mobile d-block d-sm-none">
  <div class="bsnav-mobile-overlay"></div>
  <div class="navbar"></div>
</div>

<script language="javascript">
	var popupWindow = null;
    function centeredPopup(url,winName,w,h,scroll){
        LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
        TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
        settings =
        'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
        popupWindow = window.open(url,winName,settings)
    }

    function closeWindow() {
	   	if(false == popupWindow.closed)
	   	{
	      	popupWindow.close ();
	   	} else {
	      	alert('That window is already closed. Open the window first and try again!');
	   	}
	}
</script>