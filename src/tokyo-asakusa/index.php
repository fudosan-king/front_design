<!doctype html>
<html class="no-js">

<head>
	<meta name="description" content="「浅草」で下町の人情、日本人のおもてなしを体感して頂ける「まちなか旅館」です。私達の感覚が根源的に知っている「和」の心地よさを 自然素材を用いて現代に再現しました。皆様が慣れ親しんだベッドやチェアなど洋式の生活スタイルはそのままに「和」の寛ぎに心安らぐ旅館になっております。 ">
	<title>プロスタイル旅館東京浅草｜下町体験のできる日本旅館</title>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
    		<?php require 'header.php'; ?>
			
			<section class="section_banner">
	            <div class="owl-carousel owl-theme owl_banner">
	                <div class="item">
	                    <img src="https://www.prostyleryokan.com/tokyo-asakusa/wp-content/uploads/2019/12/2019-12-03@12-00-47-IMG_0206-1-scaled-min.jpeg" alt="" class="img-fluid d-none d-md-block">
	                    <img src="https://www.prostyleryokan.com/tokyo-asakusa/wp-content/uploads/2019/12/2019-12-03@12-00-47-IMG_0206-1-scaled-min.jpeg" alt="" class="img-fluid d-block d-md-none">
	                    <div class="caption">
							<div class="caption_content ja">
								<h1>PROSTYLE旅館 東京浅草</h1>
								<h4>下町体験のできる日本旅館</h4>
							</div>
							<a target="_blank" class="banner_goto_asakusa d-none d-md-block" href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/rsv_pln_lst.aspx?hi_id=2&lang=ja-JP"><img src="images/1x/goto_asakusa.png" alt="" class="img-fluid"></a>

							<a target="_blank" class="banner_goto_asakusa d-block d-md-none" href="https://advance.reservation.jp/prostyleryokan/s_sp/rsv/plan_list.aspx?hi_id=2&lang=ja-JP"><img src="images/1x/goto_asakusa.png" alt="" class="img-fluid"></a>
						</div>
	                </div>
	                
	            </div>
	        </section>

	        <section class="section_note">
			    <div class="container">
			        <div class="row">
			            <div class="col-12">
			            	<div class="wrap_note">
				            	<div class="box_note mb-5">
					            	<h3>【Go To浅草キャンペーンのお知らせ】</h3>
					            	<p>政府による観光需要喚起策「Go Toトラベル」において、東京都発着の旅行が対象外とされたことを受け、さらなる感染拡大の防止に努めつつ、浅草エリアの経済活性化も同時に推進することを目的に、当社独自の取り組みとして、東京都在住の方を対象に宿泊料金が50%OFFとなる「Go To浅草キャンペーン」を開始することとなりました。</p>
					            	<p>■実施期間：2020年7月22日～2020年9月30日 <br>※期間中は何度でもキャンペーンが適用となります。また実施期間は予告なく終了する場合がございます。</p>
				            	</div>
				            	<p class="mb-4"><img src="images/1x/stay_hotel.png" alt="" class="img-fluid"></p>
				            	<div class="box_note">
				            		<h3>【STAY HOTELのお知らせ】</h3>
				            		<p>昨今の新型コロナウイルス感染症（COVID-19）の防止策として、 国内でのテレワークの普及は急速に拡大している中、自宅以外のホテルに住まう感覚での活用を提案すべく、素泊まり5泊6日で1室最低20,000円～という料金設定の「STAY HOTEL」プランを開始することとなりました。<br>
				            		※清掃およびアメニティ交換のタイミングは宿泊期間中1回となっています。</p>
				            	</div>
			            	</div>
			            </div>
			        </div>
			    </div>
			</section>

	      	<main>
	      		<section id="section_booking" class="section_booking">
				    <div class="container-fluid">
				        <div class="row">
				            <div class="col-12">
				                <h2 class="title">Booking</h2>
				            </div>
				            <div class="col-12 col-md-11 mx-auto">
				                <form method="get" action="" id="ifrmBooking" name="frmBooking" target="_blank" class="frm_booking" onSubmit="return send()">
				                    <div class="row">
				                        <div class="col-6 col-md-2 align-self-center">
				                            <div class="form-group">
				                                <label for="">御到着日</label>
				                                <input id="arrival_date" type="text" name="dt" class="form-control date_picker">
				                            </div>
				                        </div>
				                        <div class="col-6 col-md-2 align-self-center">
				                            <div class="form-group">
				                                <label for="">御出発日</label>
				                                <input id="departure_date" type="text" name="dt_to" class="form-control date_picker">
				                            </div>
				                        </div>
				                        <div class="col-6 col-md-2 align-self-center">
				                            <div class="form-group">
				                                <label for="">人数</label>
				                                <div class="w_select_custom">
				                                    <select class="form-control select_custom" name="mc" id="">
				                                        <option value="1">1</option>
				                                        <option value="2">2</option>
				                                        <option value="3">3</option>
				                                        <option value="4">4</option>
				                                    </select>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="col-6 col-md-3 align-self-center">
				                            <div class="form-group">
				                                <label for="">検索方法</label>
				                                <div class="w_select_custom">
				                                    <select class="form-control select_custom" name="st" id="">
				                                        <option value="0">プラン検索</option>
				                                        <option value="1">部屋検索</option>
				                                        <option value="3">料金検索</option>
				                                        <option value="4">カレンダー検索</option>
				                                    </select>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="col-12 col-md-3 align-self-center">
				                            <button type="submit" class="btn btn_searchroom">空室を検索</button>
				                        </div>
				                    </div>

				                    <!-- 言語（日本語"ja-JP",英語"en-US",韓国語"ko-KR",中国語(簡体字)"zh-CN",中国語(繁体字)"zh-TW"）-->
				                    <input type="hidden" name="lang" value="ja-JP" >
				                    
				                </form>
				            </div>
				        </div>
				    </div>

				</section>

	      		<div class="main_content">

	      			<section id="section_concept" class="section_concept">
			      		<div class="container">
			      			<div class="row">
			      				<div class="col-12">
			      					<div class="box_concept">
				      					<div class="row flex-column-reverse flex-md-row">
				      						<div class="col-12 col-md-7 align-self-center">
						      					<img src="images/1x/concept.png" alt="" class="img-fluid">
						      				</div>
						      				<div class="col-12 col-md-5 align-self-center">
						      					<div class="box_concept_content">
							      					<h2 class="title mb-3">Concept</h2>
							      					<h6>下町体験のできる日本旅館</h6>
							      					<p>近年日本には、多くの外国人観光客の方が訪れます。彼らは、日本観光に何を求めているのでしょう。</p>
													<p>
														歴史的建造物？ アニメ？ <br>
														いいえ、彼らの多くは <br>
														日本のリアルな生活スタイル知りたいと思っているはず。 <br>
														そして、体験したいはずです。
													</p>
													<p>
														下町の人情、日本人ならではのおもてなしを、<br>
														我々は「旅館」という場を通じて、<br>
														心地よい安らぎとともに提供します。
													</p>
													<p>
														朝、きらめく川面を眺めながら、隅田川沿いをランニング。 <br>
														昼は人力車で浅草の名所を散策するのもいいでしょう。 <br>
														そして夜には、部屋の露天風呂を堪能した後に <br>
														下町ならではのお酒を楽しむ――。
													</p>
													<p>
														きっと <br>
														忘れられない、 <br>
														この旅館でしか体験できない <br>
														ひと時を過ごしてもらえるはずです。
													</p>
													<p>
														下町の情緒を眺める縁側のような <br>
														心地よい安らぎのひと時を、 <br>
														「まちなか旅館」でお過ごしください。
													</p>
						      					</div>
						      				</div>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</section>

	      			<section class="section_feature">
		      			<div class="container">
			      			<div class="row">
			      				<div class="col-12">
			      					<h2 class="title">Feature of Asakusa</h2>
			      					<div class="row">
			      						<div class="col-12 col-md-10 mx-auto">
			      							<p class="mb-5">浅草は、浅草寺を始めとする寺社仏閣、下町民家の象徴である長屋、伝統工芸として人気の江戸切子など、日本ならではの歴史・文化が色濃く残る街です。 その一方で、最新観光名所の東京スカイツリーにもほど近く、日本のOLDとNEWが混在する独自の魅力に溢れた街として、国内外の観光客から人気を集めています。</p>
			      						</div>
			      						<div class="col-12">
			      							<div class="row">
						                        <div class="column">
						                            <div id="feature" class="feature">
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_01_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_01.png" style="background-image:url('images/1x/feature_01.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_02_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_02.png" style="background-image:url('images/1x/feature_02.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_03_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_03.png" style="background-image:url('images/1x/feature_03.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_04_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_04.png" style="background-image:url('images/1x/feature_04.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_05_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_05.png" style="background-image:url('images/1x/feature_05.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_06_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_06.png" style="background-image:url('images/1x/feature_06.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_07_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_07.png" style="background-image:url('images/1x/feature_07.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                                <div class="feature-type column-item">
						                                    <a href="#">
						                                        <div class="feature-bg" style="background-image:url('images/1x/feature_08_small.png')">
						                                            <div class="feature-bg-change" data-src="images/1x/feature_08.png" style="background-image:url('images/1x/feature_08.png')"></div>
						                                        </div>
						                                    </a>
						                                </div>
						                            </div>
						                        </div>
						                    </div>
			      						</div>
			      					</div>
			      					
			      				</div>
			      			</div>
			      		</div>
			      	</section>

			      	<section id="section_room" class="section_room mb-0">
			      		<div class="container">
			      			<div class="row">
			      				<div class="col-12">
			      					<h2 class="title">Rooms</h2>
			      					<img src="images/1x/rooms-top.jpg" alt="" class="img-fluid">
			      					<h4>畳で感じる「和」のくつろぎ</h4>
			      					<p>6タイプの客室は、全室畳を敷いた和の空間に仕上げました。<br>
			      					洋室では味わえない「旅先の我が家」としてのくつろぎをご堪能ください。</p>
			      					<a href="rooms.php" class="btn btn_detail">各客室はこちら <i class="fal fa-long-arrow-right fa-2x"></i></a>
			      				</div>
			      			</div>
			      		</div>
			      	</section>

			      	<section id="section_access" class="section_access mb-0">
			      		<div class="container">
			      			<div class="row">
			      				<div class="col-12">
			      					<h2 class="title">Access</h2>
			      				</div>
			      			</div>
			      			<div class="row">
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			      					<div class="box_img_photo" style="background-image: url('https://www.prostyleryokan.com/tokyo-asakusa/assets/images/1x/963_Asakusa_entrance-facade-20191108.jpg')">
			      					</div>
			      				</div>
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			      					<div class="map_frame">
			      						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.479334979207!2d139.79867981525967!3d35.714428280186596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ec39c4e00ff%3A0x68af1801cc7b1092!2s2-ch%C5%8Dme-12-11%20Hanakawado%2C%20Taito%20City%2C%20T%C5%8Dky%C5%8D-to%20111-0033%2C%20Japan!5e0!3m2!1sen!2s!4v1574145073742!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			      					</div>
			      				</div>
			      			</div>
			      			<div class="row">
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			      					<a class="btnMap" href="https://goo.gl/maps/vbTjx2rP1ywVTjKc7" target="_blank">GoogleMapを開く</a>
			      				</div>
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			      					<a class="btnMap" href="https://goo.gl/maps/oHtjfGiA8Hk6Eep87" target="_blank">現在地からホテルまでのルート</a>
			      				</div>
			      			</div>
			      			<div class="row location">
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
		      						<h4>所在地</h4>
									<p>〒111-0033　東京都台東区花川戸2丁目12-11<br><a class="telLink" href="tel:03ｰ5830ｰ6015">03ｰ5830ｰ6015</a></p>
			      				</div>
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
		      						<h4>羽田空港からお越しの場合</h4>
		      						<ul>
		      							<li>・羽田空港→都営浅草駅（京急空港線都営浅草線直通）→A5出口より徒歩11分</li>
		      							<li>・羽田空港→浜松町駅（モノレール）→神田駅（京浜東北線→浅草駅(銀座線)→5番出口より徒歩6分</li>
		      						</ul>
			      				</div>
			      			</div>
			      			<div class="row">
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-2 order-md-1">
		      						<h4>浅草駅からのアクセス</h4>
									<table class="table table-borderless">
										<tbody>
											<tr>
												<td>東武スカイツリーライン</td>
												<td>東武正面出口より徒歩5分</td>
											</tr>
											<tr>
												<td>東京メトロ銀座線</td>
												<td>5番出口より徒歩6分</td>
											</tr>
											<tr>
												<td>つくばエクスプレス</td>
												<td>A1出口より徒歩10分</td>
											</tr>
											<tr>
												<td>都営浅草線</td>
												<td>A5出口より徒歩11分</td>
											</tr>
										</tbody>
									</table>
			      				</div>
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-1 order-md-2">
		      						<h4>成田空港からお越しの場合</h4>
		      						<ul>
		      							<li>・成田空港→都営浅草駅（京成成田SKYACCESS都営浅草線直通）→A5出口より徒歩11分</li>
		      							<li>・成田空港→京成上野駅（京成スカイライナー）→徒歩5分→上野駅→浅草駅（銀座線)→5番出口より徒歩6分</li>
		      						</ul>
			      				</div>
			      			</div>
			      			<div class="row">
			      				<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 offset-md-6">
		      						<h4>お車でお越しの場合</h4>
		      						<p>当館には駐車場のご準備がございません。<br>
									お車で来られた場合は、お客様ご負担で近隣のコインパーキングにお停めいただきますよう宜しくお願いします。</p>
									<p>近くの駐車場は<a href="https://www.google.com/maps/search/%E6%9D%B1%E4%BA%AC%E9%83%BD%E5%8F%B0%E6%9D%B1%E5%8C%BA%E8%8A%B1%E5%B7%9D%E6%88%B82%E4%B8%81%E7%9B%AE12-11+%E9%A7%90%E8%BB%8A%E5%A0%B4/@35.7131472,139.7921104,16.01z" target="_blank">こちら</a></p>
			      				</div>
			      			</div>
			      			
			      		</div>
			      	</section>


			      	

	      		</div>

	      	</main>

	      	<?php require 'footer.php'; ?>
    </div>

    <?php require 'js-footer.php'; ?>

    <script type="text/javascript">
	    $(document).ready(function() {
	    	if ($('#feature').length) {
	            $("#feature .feature-type").each(function (i) {

	                var _this = $(this);
	                var _allVillaBackground = $('.feature-bg-change');
	                var _villaBackground = _this.find('.feature-bg-change');

	                $(window).resize(function () {

	                    if ($(window).width() < 900) {

	                        _villaBackground.css({
	                            'background-image': "url(" + _villaBackground.attr('data-src') + ")",
	                        });

	                    }
	                });

	                _villaBackground.css({
	                    'background-repeat': "no-repeat",
	                    'background-size': _this.closest('.column').width() + "px " +  _this.closest('.column').height() + "px "
	                });


	                _this.hover(function () {

	                    if ($(window).width() > 900) {
	                        _allVillaBackground.css({'background-image': "url(" + _villaBackground.attr('data-src') + ")"});
	                    } else {
	                        _villaBackground.css({'background-image': "url(" + _villaBackground.attr('data-src') + ")"});
	                    }
	                    return false;
	                });

	            });
	        }
	    });
	</script>

</body>

</html>