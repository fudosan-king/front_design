<div class="navbar navbar-expand-md bsnav bsnav-sticky bsnav-sticky-slide bsnav-brand-center">
  <div class="container">
    
    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
    <a class="navbar-brand" href="index.php"><img src="images/1x/logo.svg" width="200px" alt="" class="img-fluid"></a>
    <div class="box_favorites d-block d-md-none active">
      <i class="fas fa-heart fa-2x"></i>
      <span class="favorites_number">2</span>
    </div>
    <a href="tel:0120602423" class="freecall d-block d-md-none"><img src="images/1x/gnavi-freecall-tokyo.png" alt="" class="img-fluid"></a>

    <div class="collapse navbar-collapse justify-content-md-between">
        <ul class="navbar-nav navbar-mobile">
          <li class="nav-item active"><a class="nav-link nav_search" href="#section_propertySearch">物件検索 <span>SEARCH</span></a></li>
          <li class="nav-item"><a class="nav-link" href="work.php">リノベーション実例 <span>WORKS</span></a></li>
          <li class="nav-item dropdown fadeup">
            <a class="nav-link" href="#">クロニクルプラスとは <span>ABOUT</span> <i class="caret"></i></a>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#">中古購入の流れ</a></li>
              <li class="nav-item"><a class="nav-link" href="#">リノベーションについて</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">イベント・セミナー <span>EVENT</span></a></li> -->
          <li class="nav-item"><a class="nav-link" href="voice.php">お客様の声 <span>VOICE</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#">体験！VR <span>Virtual Reality</span></a></li>
          
          <li class="nav-item"><a class="nav-link" href="#">クロニクルパッケージ <span>PACKAGE</span></a></li>
          <li class="nav-item"><a class="nav-link" href="vend.php">売却 <span>VEND</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><img src="images/1x/i_phone.svg" width="30px" alt="" class="img-fluid"> <span class="phone_number">0120-602-423</span></a></li>
        </ul>
    </div>
  </div>
</div>

<div class="bsnav-mobile">
  <div class="bsnav-mobile-overlay"></div>
  <div class="navbar"></div>
</div>

<div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">地域をお選びください</h5>
      </div>
      <div class="modal-body">
        <div class="row no-gutters">
          <div class="col col-6 col-sm-3">
            <a class="btn btnMenu" href="search_kanto.php">関東</a>
          </div>
          <div class="col col-6 col-sm-3">
            <a class="btn btnMenu" href="search_chubu.php">中部</a>
          </div>
          <div class="col col-6 col-sm-3">
            <a class="btn btnMenu" href="search_kansai.php">関西</a>
          </div>
          <div class="col col-6 col-sm-3">
            <a class="btn btnMenu" href="search_kyushu.php">九州</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modalRegister" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">CHRONICLE会員登録</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="frm_register" action="#" method="POST" role="form">
          <div class="row">
            <div class="col col-12 col-sm-2">
                <label for="">お名前</label>
            </div>
            <div class="col col-6 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="（せい）">
              </div>
            </div>
            <div class="col col-6 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="（めい）">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-12 col-sm-2">
                <label for="">Eメール</label>
            </div>
            <div class="col col-12 col-sm-10">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="abc@propolife.jp">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-12 col-sm-2">
                <label for="">パスワード</label>
            </div>
            <div class="col col-12 col-sm-10">
              <div class="form-group">
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-12 col-sm-2">
                <label for="">パスワードの再入力（確認）</label>
            </div>
            <div class="col col-12 col-sm-10">
              <div class="form-group">
                <input type="text" class="form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-12 col-sm-2">
                <label for="">秘密の質問</label>
            </div>
            <div class="col col-6 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option value="">生まれた町の名前</option>
                  <option value="">母親の旧姓</option>
                  <option value="">ペットの名前</option>
                  <option value="">尊敬する方の名前</option>
                </select>
              </div>
            </div>
            <div class="col col-6 col-sm-5">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="回答">
              </div>
            </div>
          </div>
          <p class="text-center mb-3 mt-3">クイック検索条件をお選びください<br>
          ※ログイン後、いつでも１クリックでお客様のご希望の条件を探すことができるようになります。</p>

          <div class="row address-fields">
            <div class="col col-12 col-sm-2">
              <label for="">エリア</label>
            </div>
            <div class="col col-12 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option selected value="">↓(都道府県)</option>
                  <option value="">北海道</option>
                  <option value="">青森県</option>
                  <option value="">岩手県</option>
                  <option value="">...</option>
                </select>
              </div>
            </div>
            <div class="col col-12 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option selected value="">↓(市区町村)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-12 col-sm-2">
                <label for="">価格</label>
            </div>
            <div class="col col-12 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option value="">下限なし</option>
                  <option value="">1000万円</option>
                  <option value="">1500万円</option>
                  <option value="">2000万円</option>
                  <option value="">...</option>
                </select>
              </div>
            </div>
            <div class="col col-12 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option selected value="">↓上限なし</option>
                  <option value="">1000万円</option>
                  <option value="">1500万円</option>
                  <option value="">2000万円</option>
                  <option value="">...</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-12 col-sm-2">
              <label for="">専有面積</label>
            </div>
            <div class="col col-12 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option value="">下限</option>
                  <option value="">30㎡</option>
                  <option value="">35㎡</option>
                  <option value="">40㎡</option>
                  <option value="">...</option>
                </select>
              </div>
            </div>
            <div class="col col-12 col-sm-5">
              <div class="form-group">
                <select name="" class="form-control">
                  <option value="">上限</option>
                  <option value="">30㎡</option>
                  <option value="">35㎡</option>
                  <option value="">40㎡</option>
                  <option value="">...</option>
                </select>
              </div>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 col">
              <label class="fr" for="">専有面積</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-12 col">
              <ul class="list_option">
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layouts-0" name="layouts" type="checkbox" value="0">
                              <span class="green">ワンルーム</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layouts-1" name="layouts" type="checkbox" value="1">
                              <span class="green">1LDK (K・DK)</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layouts-2" name="layouts" type="checkbox" value="2">
                              <span class="green">2LDK (K・DK)</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layouts-3" name="layouts" type="checkbox" value="3">
                              <span class="green">3LDK (K・DK)</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layouts-4" name="layouts" type="checkbox" value="4">
                              <span class="green">4LDK (K・DK)</span>
                          </label>
                      </div>
                  </li>
                  <li>
                    <div class="checkbox">
                      <label>
                        <input id="layouts-5" name="layouts" type="checkbox" value="5">
                        <span class="green">5LDK (K・DK)以上</span>
                      </label>
                    </div>
                  </li>
              </ul>
            </div>
          </div>

          <hr>

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 col">
              <label class="fr" for="">徒歩分数</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-12 col">
              <ul class="list_option">
                  <li>
                      <div class="radio">
                          <label>
                              <input checked="" id="station_walk-0" name="station_walk" type="radio" value="">
                              <span class="green">指定しない</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="radio">
                          <label>
                              <input id="station_walk-1" name="station_walk" type="radio" value="3">
                              <span class="green">3分以内</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="radio">
                          <label>
                              <input id="station_walk-2" name="station_walk" type="radio" value="5">
                              <span class="green">5分以内</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="radio">
                          <label>
                              <input id="station_walk-3" name="station_walk" type="radio" value="10">
                              <span class="green">10分以内</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="radio">
                          <label>
                              <input id="station_walk-4" name="station_walk" type="radio" value="15">
                              <span class="green">15分以内</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="radio">
                          <label>
                              <input id="station_walk-5" name="station_walk" type="radio" value="20">
                              <span class="green">20分以内</span>
                          </label>
                      </div>
                  </li>
              </ul>
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 col">
                <label class="fr" for="">築年数</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-12. col">
                <ul class="list_option">
                    <li>
                        <div class="radio">
                            <label>
                                <input checked="" id="age_of_building-0" name="age_of_building" type="radio" value="">
                                <span class="green">指定しない</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-1" name="age_of_building" type="radio" value="1">
                                <span class="green">新築</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-2" name="age_of_building" type="radio" value="3">
                                <span class="green">3年以内</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-3" name="age_of_building" type="radio" value="5">
                                <span class="green">5年以内</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-4" name="age_of_building" type="radio" value="10">
                                <span class="green">10年以内</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-5" name="age_of_building" type="radio" value="15">
                                <span class="green">15年以内</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-6" name="age_of_building" type="radio" value="20">
                                <span class="green">20年以内</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-7" name="age_of_building" type="radio" value="20-100">
                                <span class="green">20年以降</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-8" name="age_of_building" type="radio" value="30">
                                <span class="green">30年以内</span>
                            </label>
                        </div>
                    </li>
                    <li>
                        <div class="radio">
                            <label>
                                <input id="age_of_building-9" name="age_of_building" type="radio" value="40">
                                <span class="green">40年以内</span>
                            </label>
                        </div>
                    </li>
                </ul>
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <label class="fr" for="">入居時期</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
              <ul class="list_option">
                  <li>
                      <div class="radio">
                          <label>
                              <input checked="" id="deliver_date-0" name="deliver_date" type="radio" value="">
                              <span class="green">指定しない</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="radio">
                          <label>
                              <input id="deliver_date-1" name="deliver_date" type="radio" value="即引渡し">
                              <span class="green">即引渡し</span>
                          </label>
                      </div>
                  </li>
              </ul>
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 col">
              <label class="fr" for="">特徴で絞り込む</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-12 col">
              <ul class="list_option">
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="direction-0" name="direction" type="checkbox" value="南向き">
                              <span class="green">南向き</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="direction-1" name="direction" type="checkbox" value="角住戸">
                              <span class="green">角住戸</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="building-0" name="building" type="checkbox" value="1階">
                              <span class="green">1階</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="building-1" name="building" type="checkbox" value="2階以上">
                              <span class="green">2階以上</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="building-2" name="building" type="checkbox" value="10階以上">
                              <span class="green">10階以上</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="location-0" name="location" type="checkbox" value="高台に立地">
                              <span class="green">高台</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="location-1" name="location" type="checkbox" value="オーシャンビュー">
                              <span class="green">海が見える</span>
                          </label>
                      </div>
                  </li>
                  
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="location_is_mansion-0" name="location_is_mansion" type="checkbox" value="角部屋">
                              <span class="green">角部屋</span>
                          </label>
                      </div>
                  </li>
                  
                  
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="location_not_mansion-0" name="location_not_mansion" type="checkbox" value="角地">
                              <span class="green">角地</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="location_not_mansion-1" name="location_not_mansion" type="checkbox" value="整形地">
                              <span class="green">整形地</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="location_not_mansion-2" name="location_not_mansion" type="checkbox" value="大型タウン内">
                              <span class="green">大型分譲地</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layout_ext-0" name="layout_ext" type="checkbox" value="吹抜け">
                              <span class="green">吹抜け</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layout_ext-1" name="layout_ext" type="checkbox" value="LDK15畳以上">
                              <span class="green">LDK15畳以上</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layout_ext-2" name="layout_ext" type="checkbox" value="LDK18畳以上">
                              <span class="green">LDK18畳以上</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="layout_ext-3" name="layout_ext" type="checkbox" value="LDK20畳以上">
                              <span class="green">LDK20畳以上</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="garden-0" name="garden" type="checkbox" value="中庭">
                              <span class="green">中庭</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="garden-1" name="garden" type="checkbox" value="庭">
                              <span class="green">庭</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="garden-2" name="garden" type="checkbox" value="ルーフバルコニー">
                              <span class="green">ルーフバルコニー</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="storage-0" name="storage" type="checkbox" value="ウォークインクロゼット">
                              <span class="green">ウォークインクロゼット</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="storage-1" name="storage" type="checkbox" value="床下収納">
                              <span class="green">床下収納</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="storage-2" name="storage" type="checkbox" value="全居室収納">
                              <span class="green">全居室収納</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="kitchen-0" name="kitchen" type="checkbox" value="IHコンロ">
                              <span class="green">IHコンロ</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="kitchen-1" name="kitchen" type="checkbox" value="浄水器">
                              <span class="green">浄水器</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="kitchen-2" name="kitchen" type="checkbox" value="食器洗乾燥機">
                              <span class="green">食器洗乾燥機</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="bath-0" name="bath" type="checkbox" value="浴室乾燥機">
                              <span class="green">浴室乾燥機</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="bath-1" name="bath" type="checkbox" value="オートバス">
                              <span class="green">オートバス</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="bath-2" name="bath" type="checkbox" value="TV付浴室">
                              <span class="green">TV付浴室</span>
                          </label>
                      </div>
                  </li>
                  
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="eco-0" name="eco" type="checkbox" value="オール電化">
                              <span class="green">オール電化</span>
                          </label>
                      </div>
                  </li>
                  
                  
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="eco_not_mansion-0" name="eco_not_mansion" type="checkbox" value="エコポイント対象住宅">
                              <span class="green">エコポイント対象住宅</span>
                          </label>
                      </div>
                  </li>
                  
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="car_park-0" name="car_park" type="checkbox" value="駐車２台可">
                              <span class="green">駐車２台可</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="car_park-1" name="car_park" type="checkbox" value="駐車３台以上可">
                              <span class="green">駐車３台以上可</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="renovation-0" name="renovation" type="checkbox" value="内装リフォーム">
                              <span class="green">内装リフォーム</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="renovation-1" name="renovation" type="checkbox" value="外装リフォーム">
                              <span class="green">外装リフォーム</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="renovation-2" name="renovation" type="checkbox" value="リノベーション">
                              <span class="green">リノベーション</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="other-0" name="other" type="checkbox" value="床暖房">
                              <span class="green">床暖房</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="other-1" name="other" type="checkbox" value="高機能トイレ">
                              <span class="green">高機能トイレ</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-0" name="new_condition" type="checkbox" value="全室フローリング">
                              <span class="green">全室フローリング</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-1" name="new_condition" type="checkbox" value="対面キッチン">
                              <span class="green">対面キッチン</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-2" name="new_condition" type="checkbox" value="オートロック">
                              <span class="green">オートロック</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-3" name="new_condition" type="checkbox" value="温水洗浄便座">
                              <span class="green">温水洗浄便座</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-4" name="new_condition" type="checkbox" value="独立洗面台">
                              <span class="green">独立洗面台</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-5" name="new_condition" type="checkbox" value="バイク置き場">
                              <span class="green">バイク置き場</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-6" name="new_condition" type="checkbox" value="最上階">
                              <span class="green">最上階</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-7" name="new_condition" type="checkbox" value="デザイナーズ">
                              <span class="green">デザイナーズ</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-8" name="new_condition" type="checkbox" value="エレベーター">
                              <span class="green">エレベーター</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-9" name="new_condition" type="checkbox" value="フラット35に対応">
                              <span class="green">フラット35に対応</span>
                          </label>
                      </div>
                  </li>
                  <li>
                      <div class="checkbox">
                          <label>
                              <input id="new_condition-10" name="new_condition" type="checkbox" value="防犯カメラ">
                              <span class="green">防犯カメラ</span>
                          </label>
                      </div>
                  </li>
              </ul>
            </div>
          </div>
          <hr>

          <div class="row">
            <div class="col-sm-12 col-12 col text-center">
              <button type="submit" class="btnRegister">上記の内容で会員登録する</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>