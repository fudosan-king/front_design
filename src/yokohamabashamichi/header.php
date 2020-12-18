<header>
    <div class="navbar navbar-expand-md bsnav bsnav-sticky bsnav-sticky-slide">
        <a class="navbar-brand ml-3" href="index.php"><img src="images/1x/logo.png" alt="" class="img-fluid" width="180"></a>
        <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-md-end">
            <ul class="navbar-nav navbar-mobile mr-0">
                <li class="nav-item box_logo_sm">
                    <a class="logo_sm" href="index_en.php"><img src="images/1x/logo.png" alt="" class="img-responsive" width="180"></a>
                </li>

                <li class="nav-item"><a class="nav-link" href="concept.php">Concept</a></li>
                <li class="nav-item dropdown fadeup">
                    <a class="nav-link" href="#">Experience  <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="experience.php">How to Stay</a></li>
                        <li class="nav-item"><a class="nav-link" href="howtosauna.php">How to Sauna</a></li>
                        <li class="nav-item"><a class="nav-link" href="experience1.php">Travel Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="experience2.php">Customer’s Voice</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown fadeup">
                    <a class="nav-link" href="#">Rooms  <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="premium_floor.php">Premium floor</a></li>
                        <li class="nav-item"><a class="nav-link" href="regular_floor.php">Regular floor</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="restaurant.php">Restaurant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Access</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="plan.php">Plan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQs</a>
                </li>
                <li class="nav-item dropdown fadeup box_lang">
                    <a class="nav-link" href="#">Language <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">JAPANESE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">ENGLISH</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link btnBooking" href="#modal_booking" data-toggle="modal">Booking <i class="fal fa-angle-right fa-lg"></i></a></li>
                <li class="nav-item dropdown fadeup box_lang box_lang_sm">
                    <a class="nav-link" href="#">Language <i class="fal fa-angle-down fa-lg"></i></a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">JAPANESE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">ENGLISH</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="modal fade" id="modal_booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="box_booking">
                    <form method="get" action="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/htl_redirect_ser.aspx" id="form1" name="form1" target="smart()" onsubmit="return send()" class="frm_booking">
                        <!-- 言語（日本語"ja-JP",英語"en-US",韓国語"ko-KR",中国語(簡体字)"zh-CN",中国語(繁体字)"zh-TW"）-->
                        <input type="hidden" value="ja-JP" name="lang">
                        <input type="hidden" name="std" id="std" value="">

                        <!-- 単体ホテルの場合 -->
                        <input type="hidden" value="1" name="hi_id">

                        <div class="row box_borb">
                            <div class="col-12 col-md-9">
                                <div class="row box_datePicker">
                                    <div class="col-12 form-group">
                                        <label class="date_stay" for="">ご宿泊日</label>
                                    </div>
                                    <div class="col-12 col-md-5 form-group">
                                        <script type="text/javascript">date_dropdown_from_make();</script>
                                        <select id="dt_yyyymm" name="dt_yyyymm" size="1">
                                            <option value="2020/04">2020年 04月</option>
                                            <option value="2020/05">2020年 05月</option>
                                            <option value="2020/06">2020年 06月</option>
                                            <option value="2020/07">2020年 07月</option>
                                            <option value="2020/08">2020年 08月</option>
                                            <option value="2020/09">2020年 09月</option>
                                            <option value="2020/10">2020年 10月</option>
                                        </select>　
                                        <select id="dt_dd" name="dt_dd" size="1">
                                            <option value="01">1日</option>
                                            <option value="02">2日</option>
                                            <option value="03">3日</option>
                                            <option value="04">4日</option>
                                            <option value="05">5日</option>
                                            <option value="06">6日</option>
                                            <option value="07">7日</option>
                                            <option value="08">8日</option>
                                            <option value="09">9日</option>
                                            <option value="10">10日</option>
                                            <option value="11">11日</option>
                                            <option value="12">12日</option>
                                            <option value="13">13日</option>
                                            <option value="14">14日</option>
                                            <option value="15">15日</option>
                                            <option value="16">16日</option>
                                            <option value="17" selected="">17日</option>
                                            <option value="18">18日</option>
                                            <option value="19">19日</option>
                                            <option value="20">20日</option>
                                            <option value="21">21日</option>
                                            <option value="22">22日</option>
                                            <option value="23">23日</option>
                                            <option value="24">24日</option>
                                            <option value="25">25日</option>
                                            <option value="26">26日</option>
                                            <option value="27">27日</option>
                                            <option value="28">28日</option>
                                            <option value="29">29日</option>
                                            <option value="30">30日</option>
                                            <option value="31">31日</option>
                                        </select>
                                        <input type="text" id="dp_from" name="dp_from" style="display:none;" class="hasDatepicker">
                                        <img class="ui-datepicker-trigger" src="https://www.prostyleryokan.com/yokohamabashamichi/wp-content/themes/prostyleryokan/assets/inc/booking/img/calendar.gif" alt="..." title="...">
                                        <span class="text_s">から</span>
                                    </div>
                                    <div class="col-12 col-md-2 form-group">
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
                                    <div class="col-12 col-md-5 form-group">
                                        <script type="text/javascript">date_dropdown_to_make();</script>
                                        <select id="dt_yyyymm_to" name="dt_yyyymm_to" size="1">
                                            <option value="2020/04">2020年 04月</option>
                                            <option value="2020/05">2020年 05月</option>
                                            <option value="2020/06">2020年 06月</option>
                                            <option value="2020/07">2020年 07月</option>
                                            <option value="2020/08">2020年 08月</option>
                                            <option value="2020/09">2020年 09月</option>
                                            <option value="2020/10">2020年 10月</option>
                                            <option value="2020/11">2020年 11月</option>
                                        </select>　
                                        <select id="dt_dd_to" name="dt_dd_to" size="1">
                                            <option value="01">1日</option>
                                            <option value="02">2日</option>
                                            <option value="03">3日</option>
                                            <option value="04">4日</option>
                                            <option value="05">5日</option>
                                            <option value="06">6日</option>
                                            <option value="07">7日</option>
                                            <option value="08">8日</option>
                                            <option value="09">9日</option>
                                            <option value="10">10日</option>
                                            <option value="11">11日</option>
                                            <option value="12">12日</option>
                                            <option value="13">13日</option>
                                            <option value="14">14日</option>
                                            <option value="15">15日</option>
                                            <option value="16">16日</option>
                                            <option value="17">17日</option>
                                            <option value="18" selected="">18日</option>
                                            <option value="19">19日</option>
                                            <option value="20">20日</option>
                                            <option value="21">21日</option>
                                            <option value="22">22日</option>
                                            <option value="23">23日</option>
                                            <option value="24">24日</option>
                                            <option value="25">25日</option>
                                            <option value="26">26日</option>
                                            <option value="27">27日</option>
                                            <option value="28">28日</option>
                                            <option value="29">29日</option>
                                            <option value="30">30日</option>
                                            <option value="31">31日</option>
                                        </select>
                                        <input type="text" id="dp_to" name="dp_to" style="display:none;" class="hasDatepicker">
                                        <img class="ui-datepicker-trigger" src="https://www.prostyleryokan.com/yokohamabashamichi/wp-content/themes/prostyleryokan/assets/inc/booking/img/calendar.gif" alt="..." title="...">
                                        <span class="text_s">まで</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-sm-3 d-none d-sm-block ">
                                <input type="submit" name="Search_A" alt="検索" class="rsvbtn btn btn_checkAvailability" value="空室検索" onclick="document.getElementById('std').value = '';">
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
                                            <div class="col co-3 col-sm-4 align-self-center">
                                                <label class="d-sm-inline-block" for="">検索方法</label>
                                            </div>
                                            <div class="col col-9 col-sm-8 align-self-center">
                                                <div class="w_radio">
                                                    <div class="form-check">
                                                        <label>
                                                            <input class="form-check-input" type="radio" value="0" name="st" checked="checked">宿泊プラン別 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label>
                                                            <input class="form-check-input" type="radio" value="1" name="st">部屋タイプ別  
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="mb-0">
                                                           <input class="form-check-input" type="radio" value="3" name="st">価格順に検索 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>          
                            </div>
                            <div class="col col-12 col-sm-3 d-block d-sm-none">
                                 <input type="submit" name="Search_A" alt="検索" class="rsvbtn btn btn_checkAvailability" value="空室検索" onclick="document.getElementById('std').value = '';">
                            </div>
                            <div class="col col-12 col-sm-3">
                                <a class="btn btn_comfirm" href="https://advance.reservation.jp/prostyleryokan/stay_pc/rsv/cnf_rsv_ent.aspx?lang=ja-JP&amp;hi_id=1" target="smart">予約確認・変更<br>キャンセル</a>
                            </div>
                        </div>
                    </form>

                    <div class="booking-transporter" onclick="window.open('https://www.tabipon.jp/dp/htl/AD025.html', '_blank');">
                        <img src="https://www.prostyleryokan.com/yokohamabashamichi/wp-content/themes/prostyleryokan/assets/images/1x/booking-icon-airplan.png" alt="" class="img-fluid">
                        <p>航空券、高速バス付きプランはこちら</p>
                        <img src="https://www.prostyleryokan.com/yokohamabashamichi/wp-content/themes/prostyleryokan/assets/images/1x/booking-icon-bus.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

