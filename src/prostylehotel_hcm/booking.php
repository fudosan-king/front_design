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
    <a href="#" class="btn btnBooking"><span>Book now</span> <i class="i_chevronRight"></i></a>
    <div class="box_booking">
        <!-- <form class="frm_booking">
            <div class="row box_borb">
                <div class="col col-12 col-md-9 col-sm-9">
                    <div class="row box_datePicker">
                        <div class="col col-12 form-group">
                            <label class="date_stay" for="">ご宿泊日</label>
                        </div>
                        <div class="col col-12 col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col col-6 col-md-4 col-sm-4 form-group">
                                    <div include="form-input-select()">
                                        <select required>
                                            <option value="" hidden>2018年 06月</option>
                                            <option value="2018/07">2018年 07月</option>
                                            <option value="2018/08">2018年 08月</option>
                                            <option value="2018/09">2018年 09月</option>
                                            <option value="2018/10">2018年 10月</option>
                                            <option value="2018/11">2018年 11月</option>
                                            <option value="2018/12">2018年 12月</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-6 col-md-5 col-sm-4 form-group">
                                    <div include="form-input-select()" class="picker_day">
                                        <select id="le" name="le" size="1">
                                            <option value="" hidden>1泊</option>
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
                                    <span class="fromto"><i class="far fa-calendar-alt fa-lg"></i> から</span>
                                </div>
                                <div class="col col-6 col-md-3 col-sm-4 form-group">
                                    <label  class="label_hidden" for="">&nbsp;</label>
                                    <div include="form-input-select()">
                                        <select required>
                                            <option value="" hidden>1泊</option>
                                            <option value="1">1泊</option>
                                            <option value="2">2泊</option>
                                            <option value="3">3泊</option>
                                            <option value="4">4泊</option>
                                            <option value="5">5泊</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col col-sm-1 form-group d-none d-md-block">
                                </div>
                                <div class="col col-6 col-sm-4 form-group">
                                    <div include="form-input-select()">
                                        <select required>
                                            <option value="" hidden>2018年 06月</option>
                                            <option value="2018/07">2018年 07月</option>
                                            <option value="2018/08">2018年 08月</option>
                                            <option value="2018/09">2018年 09月</option>
                                            <option value="2018/10">2018年 10月</option>
                                            <option value="2018/11">2018年 11月</option>
                                            <option value="2018/12">2018年 12月</option>
                                            <option value="2019/01">2019年 01月</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col col-6 col-sm-5 form-group">
                                    <div include="form-input-select()" class="picker_day">
                                        <select id="le" name="le" size="1">
                                            <option value="" hidden>1泊</option>
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
                                    <span class="fromto"><i class="far fa-calendar-alt fa-lg"></i> まで</span>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>

                <div class="col col-sm-3">
                    <a href="#" class="btn btn_checkAvailability">空室検索</a>
                </div>
            </div>
            <div class="row">
                <div class="col col-12 col-sm-9">
                    <div class="row box_datePicker">
                        <div class="col col-12 col-sm-6">
                            <div class="num_people">
                                <label class="d-sm-inline-block" for="">人数</label>
                                <div include="form-input-select()" class="picker_day">
                                    <select id="le" name="le" size="1">
                                        <option value="" hidden>1泊</option>
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
                                <span>/室</span>
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
                                                <input type="radio" name="1" value="" checked>
                                                宿泊プラン別
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="1" value="">
                                                部屋タイプ別
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="mb-0">
                                                <input type="radio" name="1" value="">
                                                価格順に検索
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>          
                </div>

                <div class="col col-12 col-sm-3">
                    <button type="submit" class="btn btn_comfirm">予約確認・変更<br>キャンセル</button>
                </div>
            </div>
        </form>
        <a class="img_search" href="#" title=""><img src="<?php echo TEMPLATE_DIR; ?>/images/1x/img_search.jpg" alt="" class="img-fluid"></a> -->

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

            <input type="image" src="../booking/img/bt.gif" name="Search_A" alt="検索" class="rsvbtn d-none" onclick="document.getElementById('std').value = '';">
        </form>

        <a class="img_search" href="#" title=""><img src="https://www.prostyleryokan.com/yokohamabashamichi/wp-content/themes/prostyleryokan/assets/images/1x/img_search.jpg" alt="" class="img-fluid"></a>

    </div>
</div>