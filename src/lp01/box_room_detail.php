<div class="box_room_detail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box_room_detail_content">
                    <form action="" class="frm_room_detail">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">物件の広さ <small>※専有面積</small></label>
                                    <div class="d-flex">
                                        <select class="form-control property_size" id="iRoomArea" name="nRoomArea" dir="rtl">
                                            <!-- <option value="" disabled>30</option> -->
                                        </select>
                                        <span class="unit align-self-end">㎡</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">物件の価格 <small></small></label>
                                    <div class="d-flex">
                                        <input type="number" id="iRoomPrice" class="form-control property_price" placeholder="例:1500">
                                        <span class="unit align-self-end">万円</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">樹種を選択</label>
                            <ul id="iMaterial-wrapper" class="list_select_material"></ul>
                        </div>

                        <div class="form-group">
                            <a href="#renovation_fee" id="iEstimate" class="btn btnStart">START</a>
                        </div>
                        <p id="renovation_fee" class="renovation_fee"><a href="#">物件</a>+<a href="#">リノベーション</a>費用</p>

                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <label for="">ローンの目安</label>
                                    <div class="box_input_custom">
                                        <input type="text" id="iMonthlyLoan" class="form-control estimated_loan" placeholder="" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="box_theamount">
                                        <label for="">総額</label>
                                        <div class="box_input_theamount">
                                            <input type="text" id="iTotalPrice" class="form-control theamount" placeholder="" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="rate_percent">※借入年数35年、ボーナス返済なし、元利均等返済変動金利年0.47％、頭金0円を想定<br>
                            ※このシミュレーションは目安です。実際の購入・借入については弊社ショールームにご相談ください</p>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>