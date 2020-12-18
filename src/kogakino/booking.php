<link rel="stylesheet" type="text/css" media="screen" href="booking/js/jquery/css/smoothness/jquery-ui-1.10.4.custom.css" />
<script type="text/javascript" src="booking/js/jquery/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="booking/js/jquery/js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="booking/js/jquery/js/jquery.ui.datepicker-ja.js"></script>
<script type="text/javascript" src="booking/js/jquery/js/gcalendar-holidays.js"></script>
<script type="text/javascript" src="booking/js/smart_form.js"></script>

<style>
  .ui-datepicker {
      font-size: 70%;
  }
</style>
<div class="w_booking">
    <a href="#" class="btn btnBooking"><span>ご予約</span> <i class="i_chevronRight"></i></a>
    <div class="box_booking">
        <form method="post" action="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/htl_redirect_ser.aspx" id="form1" name="form1" target="smart()" onSubmit="return send()" class="frm_booking">
            <!-- 言語（日本語"ja-JP",英語"en-US",韓国語"ko-KR",中国語(簡体字)"zh-CN",中国語(繁体字)"zh-TW"）-->
            <input type="hidden" value="ja-JP" name="lang">
            <input type="hidden" name="std" id="std" value="" />

            <!-- 単体ホテルの場合 -->
            <input type="hidden" value="1" name="hi_id">

            <div class="row box_borb">
                <div class="col col-12 col-md-9 col-sm-9">
                    <div class="row box_datePicker">
                        <div class="col col-12 form-group">
                            <label class="date_stay" for="">ご宿泊日</label>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-5 form-group">
                            <script type="text/javascript">date_dropdown_from_make();</script>
                            <input type="text" id="dp_from" name="dp_from" style="display:none;"/>
                            <span class="text_s">から</span>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-2 form-group">
                            <select id="le" name="le" size="1">
                                <option value="1" selected="selected">1泊</option>
                                <option value="2">2泊</option>
                                <option value="3">3泊</option>
                                <option value="4">4泊</option>
                                <option value="5">5泊</option>
                                <option value="6">6泊</option>
                                <option value="7">7泊</option>
                                <option value="8">8泊</option>
                                <option value="9">9泊</option>
                                <option value="10">10泊</option>
                            </select>
                        </div>
                        <div class="col col-12 col-sm-12 col-md-5 form-group">
                            <script type="text/javascript">date_dropdown_to_make();</script>
                            <input type="text" id="dp_to" name="dp_to" style="display:none;"/>
                            <span class="text_s">まで</span>
                        </div>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <a href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/rsv_cst_ipt.aspx?lang=ja-JP&hi_id=1" target="smart" class="btn btn_checkAvailability">空室検索</a>
                </div>
            </div>


            

            <div class="row">
                <div class="col col-12 col-sm-9">
                    <div class="row box_datePicker">
                        <div class="col col-12 col-sm-6">
                            <div class="num_people">
                                <label class="d-sm-inline-block" for="">人数</label>
                                <select name="mc" size="1">
                                    <option value="1">1名</option>
                                    <option selected="selected" value="2">2名</option>
                                    <option value="3">3名</option>
                                    <option value="4">4名</option>
                                </select>
                                <span class="text_s">/室</span>
                            </div>
                        </div>
                        <div class="col col-12 col-sm-6">
                            <div class="row box_option">
                                <div class="col co-3 col-sm-4">
                                    <label class="d-sm-inline-block cus_label" for="">検索方法</label>
                                </div>
                                <div class="col col-9 col-sm-8">
                                    <div class="w_radio">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="0" name="st" checked="checked"> 宿泊プラン別
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" value="1" name="st"> 屋タイプ別 
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="mb-0">
                                               <input type="radio" value="3" name="st"> 価格順に検索
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>          
                </div>
                <div class="col col-12 col-sm-3">
                    <a class="btn btn_comfirm" href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/cnf_rsv_ent.aspx?lang=ja-JP&hi_id=1" target="smart">予約確認・変更<br>キャンセル</a>
                </div>
            </div>

            <input type="image" src="booking/img/bt.gif" name="Search_A" alt="検索" class="rsvbtn d-none" onclick="document.getElementById('std').value = '';">
        </form>
    </div>
</div>