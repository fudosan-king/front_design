<?php include './header.php'; ?>





    <section class="section_simulator" id="simulator">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>LogRenoveリノベーション<span class="d-block">金額シミュレーター</span></h2>
                    <p class="subtitle">理想の物件情報を下記に入力すれば、<br>
                    LogRenoveリノベーションの金額が即座にわかります。<br>
                    さらに口ーンの支払い金額もシミュレート！</p>
                    <div class="box_room_detail_content">
                        <form action="" class="frm_room_detail">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">物件の広さ <small>※専有面積</small></label>
                                        <div class="d-flex">
                                            <select class="form-control property_size" id="iRoomArea" name="nRoomArea" dir="rtl"></select>
                                            <span class="unit align-self-end">㎡</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="">物件の価格 <small></small></label>
                                        <div class="d-flex">
                                            <input type="number" id="iRoomPrice" class="form-control property_price" placeholder="例:1500" min="0">
                                            <span class="unit align-self-end">万円</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">樹種を選択</label>
                                <ul id="iMaterial-wrapper" class="list_select_material"></ul>
                            </div>

                            <div class="form-group text-center">
                                <!-- Thêm đoạn Popup -->
								<!-- <a href="" id="iEstimate" class="btn btnStart" data-toggle="modal" data-target="#exampleModal">START</a> -->
								<!-- Dời ID iEstimate vào trong popup xử lý -->
								<a href="" class="btn btnStart" data-toggle="modal" data-target="#choose_tree">START</a>
								<!-- End -->
                            </div>
                            <p class="renovation_fee"><a href="#">物件</a>+<a href="#">リノベーション</a>費用</p>

                            <div class="form-group mb-0">
                                <div class="row">
                                    <div class="col-12 col-md-8">
                                        <label for="">ローンの目安</label>
                                        <div class="box_input_custom">
                                            <input type="text" id="iMonthlyLoan" class="form-control estimated_loan" placeholder="101,137">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="box_theamount">
                                            <label for="">総額</label>
                                            <div class="box_input_theamount">
                                                <input type="text" id="iTotalPrice" class="form-control theamount" placeholder="2150">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="rate_percent">
                                    ※借入年数35年、ボーナス返済なし、元利均等返済、変動金利年0.47％、頭金0円を想定<br>
                                    ※このシミュレーションは目安です。実際の購入・借入については、オンライン相談にてお尋ねください。
                                </p>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




<!-- Thêm đoạn Popup -->
<section class="choose_modal">
	<div class="modal fade" id="choose_tree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-body">
	        <div class="btn-only-member">
	            <div class="btn-only-member_ct">
	                <p><i class="btn-only-member_i-clock"></i>シミュレーション結果は会員限定です。</p>
	                <p>会員登録（無料）すると結果をご覧いただけます。</p>
	                <div class="row">
	                    <div class="col-12 col-md-6">
	                        <p>新規登録の方はこちら</p>
	                        <a class="btn btn-only-member_brown" href="#">今すぐ登録</a>
	                    </div>
	                    <div class="col-12 col-md-6">
	                        <p>会員の方はこちら</p>
	                        <a class="btn btn-only-member_blue" href="#">ログイン</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</section>
<!-- End -->

<?php include './footer.php'; ?>
