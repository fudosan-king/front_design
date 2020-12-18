<!doctype html>
<html class="no-js">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header.php'; ?>

    		<section class="banner">
				<div class="owl-carousel owl-theme owl_banner">
				    <div class="item"><a href="#"><img src="images/1x/works-slide-pc.png" alt="" class="img-fluid"></a></div>
				    <div class="item"><a href="#"><img src="images/1x/event-slide-pc.png" alt="" class="img-fluid"></a></div>
				    <div class="item"><a href="#"><img src="images/1x/VR-slide-pc.png" alt="" class="img-fluid"></a></div>
				    <div class="item"><a href="#"><img src="images/1x/fv_img_pc.jpg" alt="" class="img-fluid"></a></div>
				</div>
    		</section>

	      	<main>
	      		<section id="section_propertySearch" class="section_propertySearch">
	      			<div class="container">
	      				<div class="row">
	      					<div class="col col-12 col-sm-12">
  								<div class="label_propertySearch mx-auto d-none d-md-block">
      								<h2><i class="i_search"></i> <span>物件検索</span></h2>
      								<p>SEARCH</p>
  								</div>
  								<div class="banner_text d-block d-md-none">
  									<h3>中古マンション・戸建探しのポータルサイト</h3>
  									<h4>クロニクルプラスは、全国主要都市に拡がる総合不動産企業クロニクルが運営しています。</h4>
  								</div>
	      					</div>
	      				</div>
	      			</div>
	      		</section>

	      		<section class="section_quicksearch">
	      			<div class="container">
	      				<form class="frm_quicksearch">
		      				<div class="row ">
		      					<div class="col col-12 col-sm-12 d-block d-lg-none">
		      						<div class="search_property">
			                            <div class="row">
			                                <div class="col col-6 col-sm-6">
			                                    <p class="label_propertysearch"><i class="i_search_black"></i> <span>物件検索</span></p>
			                                </div>
			                                <div class="col col-6 col-sm-6">
			                                    <a href="#" class="btn btn_propertysearch">SEARCH</a>
			                                </div>
			                            </div>
				                    </div>
		      					</div>
		      					<div class="col col-12 col-sm-12 col-md-8 offset-md-2">
		      						<div class="row no-gutters">
		      							<div class="col col-6 col-sm-6 col-md-4">
		      								<a class="btn btnGeneral btnMantion" href="#" data-toggle="modal" data-target="#modalMenu">
	  											<i class="i_mansion"></i>
	  											<span>マンション</span>
	  										</a>
		      							</div>
		      							<div class="col col-6 col-sm-6 col-md-4">
		      								<a class="btn btnGeneral btnDetachedhouse" href="#" data-toggle="modal" data-target="#modalMenu">
	  											<i class="i_detachedhouse"></i>
	  											<span>戸建て</span>
	  										</a>
		      							</div>
		      							<div class="col col-12 col-sm-12 col-md-4 d-block d-md-none">
		      								<div class="form-group">
					      						<label for="">キーワードで探す</label>
					      						<div class="w_find relative">
						      						<input type="text" class="form-control">
						      						<button type="submit" class="btn btnFind">検索する</button>
						      					</div>
					      					</div>
		      							</div>
		      							<div class="col col-12 col-sm-12 col-md-4">
		      								<a class="btn btnGeneral btnHeart" href="result_active.php">
	  											<i class="i_heart"></i>
	  											<span>お気に入り物件</span>
	  										</a>
		      							</div>
		      						</div>
		      					</div>

		      					<div class="col col-12 col-sm-12 col-md-8 offset-md-2">
		      						<div class="form-group d-none d-md-block">
			      						<label for="">キーワードで探す</label>
			      						<div class="w_find relative">
			      							<input type="text" class="form-control">
			      							<button type="submit" class="btn btnFind">検索する</button>
			      						</div>
			      					</div>
		      						<div class="form-group">
			      						<label class="lbl_registeredConditions" for="">登録してある条件から探す（会員様専用）</label>
			      						<div class="row">
			      							<div class="col col-12 col-sm-6">
			      								<a href="#" class="btn btn_quicksearch btnRegister" data-toggle="modal" data-target="#modalRegister"><i class="i_register"></i> <span>新規会員登録</span></a>
			      							</div>
			      							<div class="col col-12 col-sm-6">
			      								<a href="login.php" class="btn btn_quicksearch btnLogin"><i class="i_login"></i> <span>ログイン</span></a>
			      							</div>
			      						</div>
			      					</div>
		      					</div>

		      					

		      				</div>
	      				</form>
	      			</div>
	      			<section class="section_banner_VRtours">
	      				<div class="container">
		      				<div class="row">
				      			<div class="col col-12 col-sm-12">
			  						<div class="banner_VRtours">
			  							<h4>気になる物件をVR見学！</h4>
			  							<h2>まるでその場にいるような物件見学へ</h2>
			  						</div>
			  					</div>
			  				</div>
			  			</div>
  					</section>
  					<section class="section_matterportVR">
  						<div class="container">
		      				<div class="row">
				      			<div class="col col-12 col-sm-6">
				      				<iframe src="https://my.matterport.com/show/?model=vKdmnRJzCuQ&utm_source=4" frameborder="0" allowfullscreen></iframe>
				      			</div>
				      			<div class="col col-12 col-sm-6">
				      				<iframe src="https://my.matterport.com/show/?m=KF3QNH4qr1g" frameborder="0" allowfullscreen></iframe>
				      			</div>
				      		</div>
  					</section>
	      		</section>
	      	</main>

	      	<?php require 'footer.php'; ?>
    </div>

    <?php require 'js-footer.php'; ?>
</body>

</html>