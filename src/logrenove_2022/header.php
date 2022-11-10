<script>
  const handleOpenSubmenu = function(event) {
    event.preventDefault();
    let menu = event.currentTarget;
    let subMenu = menu.querySelector("ul .nav-sub-menu");
    let image = menu.querySelector(".nav-link img");
    if (!subMenu.classList.contains("d-block")) {
      subMenu.classList.add("d-block");
      image.src = "./assets/images/icons/chevron-bottom.svg";
      image.width = "10";
    } else {
      subMenu.classList.remove("d-block");
      image.src = "./assets/images/icons/chevron-right.svg";
      image.width = "6";
    }
  }
</script>

<header>
  <nav class="navbar navbar-expand-lg bg-white">
    <div class="container relative">
      <a class="navbar-brand" href="index.php"><img src="images/icons/LogRenove_logo.svg" alt="LogRenove_logo" class="img-fluid" width="210"></a>
      <input type="checkbox" class="nav-hamburger" name="" id="nav-mobile-hamburger">
      <label for="nav-mobile-hamburger" class="navbar-btn-hamburger">
        <img src="./assets/images/icons/menu.svg" alt="" class="img-fluid" width="21">
      </label>
      <span class="banner_slogan">住みたい街で心地よい暮らしを。</span>
      <nav class="nav-pc" id="navbarScroll">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://www.logrenove.jp/estates">販売中物件</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.logrenove.jp/mansions">マンション一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.logrenove.jp/about/">ログリノベについて</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.logrenove.jp/magazine/">マガジン</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">物件探しを相談</a>
          </li>
          <li class="nav-item search_icon" onclick="handleOpenSearch()">
            <a href="#modal_search" class="nav-link" data-bs-toggle="modal">
              <img class="img-fluid" src="assets/images/icons/i_search_black.svg" alt="i_search_brown" width="16">
            </a>
          </li>
        </ul>
      </nav>

      <nav class="nav-mobile" id="navbarScroll">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://www.logrenove.jp/estates">物件一覧
              <label>
                <img src="./assets/images/icons/chevron-right.svg" alt="" class="img-fluid" width="6">
              </label></a>
          </li>
          <li class="nav-item" onclick="handleOpenSubmenu(event)">
            <a class="nav-link" href="https://www.logrenove.jp/mansions">マンション一覧
              <label>
                <img src="./assets/images/icons/chevron-right.svg" alt="" class="img-fluid" width="6">
              </label>
            </a>
            <ul class="nav-sub-menu">
              <li>サブメニュー</li>
              <li>サブメニュー</li>
              <li>サブメニュー</li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.logrenove.jp/about/">ログリノベについて
              <label>
                <img src="./assets/images/icons/chevron-right.svg" alt="" class="img-fluid" width="6">
              </label></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.logrenove.jp/magazine/">マガジン
              <label>
                <img src="./assets/images/icons/chevron-right.svg" alt="" class="img-fluid" width="6">
              </label>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">家探しを相談
              <label>
                <img src="./assets/images/icons/chevron-right.svg" alt="" class="img-fluid" width="6">
              </label>
            </a>
          </li>
          <label for="nav-mobile-hamburger" class="navbar-close">
            <img src="./assets/images/icons/x-circle.svg" alt="" class="img-fluid" width="16">
          </label>
      </nav>
      <!-- <div class="search-form-container hdn d-none d-lg-block" id="search-input-container">
        <div class="search-input-group">
          <a href="#" class="btn_search" id="hide-search-input-container">
            <img src="images/icons/i_search.svg" alt="" class="img-fluid" width="16">
          </a>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search for...">
          </div>
        </div>
      </div> -->

    </div>
  </nav>



</header>

<!-- Modal -->
<div class="modal fade modal_search" id="modal_search" tabindex="-1" aria-labelledby="modal_search" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_search">検索条件変更</h5>
        <a href="#" class="btn btn_searhconditions d-block d-lg-none">
          <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
          <span>この条件で検索</span>
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" class="modal_frmsearch">
          <table class="table table-condensed">
            <tr>
              <th>エリア <span class="btn_showhide_accordion"></span></th>
              <td class="w_accordion_search">
                <div class="accordion accordion-flush accordion_search" id="accordion_search">
                  <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseOne" aria-expanded="false" aria-controls="search-collapseOne">
                        渋谷・代々木エリア
                      </button>
                    </h2>
                    <div id="search-collapseOne" class="accordion-collapse collapse" aria-labelledby="search-headingOne" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Shibuya_Shoto_Nanpeidai">
                          <label class="form-check-label" for="Shibuya_Shoto_Nanpeidai">渋谷・松濤・南平台</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Daikanyama_Aobadai_Nakameguro">
                          <label class="form-check-label" for="Daikanyama_Aobadai_Nakameguro">代官山・青葉台・中目黒</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Yoyogiuehara_YoyogiPark">
                          <label class="form-check-label" for="Yoyogiuehara_YoyogiPark">代々木上原・代々木公園</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Komaba_Daizawa_Shimokitazawa">
                          <label class="form-check-label" for="Komaba_Daizawa_Shimokitazawa">駒場・代沢・下北沢</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Ikejiri_Mishuku_Sangenjaya">
                          <label class="form-check-label" for="Ikejiri_Mishuku_Sangenjaya">池尻・三宿・三軒茶屋</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Shinjuku_Yoyogi_Sendagaya">
                          <label class="form-check-label" for="Shinjuku_Yoyogi_Sendagaya">新宿・代々木・千駄ヶ谷</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseTwo" aria-expanded="false" aria-controls="search-collapseTwo">
                        港区・都心エリア
                      </button>
                    </h2>
                    <div id="search-collapseTwo" class="accordion-collapse collapse" aria-labelledby="search-headingTwo" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Roppongi_Akasaka_Aoyama">
                          <label class="form-check-label" for="Roppongi_Akasaka_Aoyama">六本木・赤坂・青山</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Omotesando_Harajuku">
                          <label class="form-check-label" for="Omotesando_Harajuku">表参道・原宿</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Azabu_Hiroo">
                          <label class="form-check-label" for="Azabu_Hiroo">麻布・広尾</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Ebisu_Meguro_Shirokane">
                          <label class="form-check-label" for="Ebisu_Meguro_Shirokane">恵比寿・目黒・白金</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Takanawa_Gotanda_Gotenyama">
                          <label class="form-check-label" for="Takanawa_Gotanda_Gotenyama">高輪・五反田・御殿山</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseThree" aria-expanded="false" aria-controls="search-collapseThree">
                        千代田・新宿・文京エリア
                      </button>
                    </h2>
                    <div id="search-collapseThree" class="accordion-collapse collapse" aria-labelledby="search-headingThree" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Iidabashi_Kudanshita_Bancho">
                          <label class="form-check-label" for="Iidabashi_Kudanshita_Bancho">飯田橋・九段下・番町</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Yotsuya_Ichigaya_Kagurazaka">
                          <label class="form-check-label" for="Yotsuya_Ichigaya_Kagurazaka">四谷・市ヶ谷・神楽坂</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Mejiro_Ikebukuro_Gokokuji">
                          <label class="form-check-label" for="Mejiro_Ikebukuro_Gokokuji">目白・池袋・護国寺</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Koishikawa_Hongo_Kohinata">
                          <label class="form-check-label" for="Koishikawa_Hongo_Kohinata">小石川・本郷・小日向</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Honkomagome_Hakusan_Sengoku">
                          <label class="form-check-label" for="Honkomagome_Hakusan_Sengoku">本駒込・白山・千石</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseFour" aria-expanded="false" aria-controls="search-collapseFour">
                        目黒・世田谷・城南エリア
                      </button>
                    </h2>
                    <div id="search-collapseFour" class="accordion-collapse collapse" aria-labelledby="search-headingFour" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Jiyugaoka_Denenchofu">
                          <label class="form-check-label" for="Jiyugaoka_Denenchofu">自由が丘・田園調布</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Yotsuya_Ichigaya_Kagurazaka">
                          <label class="form-check-label" for="Yotsuya_Ichigaya_Kagurazaka">碑文谷・八雲・柿の木坂 </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Himonya_Yakumo_Kakinokizaka">
                          <label class="form-check-label" for="Himonya_Yakumo_Kakinokizaka">二子玉川・上野毛</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Fukasawa_Komazawa">
                          <label class="form-check-label" for="Fukasawa_Komazawa">深沢・駒沢</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Yoga_Sakurashinmachi_Tsurumaki">
                          <label class="form-check-label" for="Yoga_Sakurashinmachi_Tsurumaki">用賀・桜新町・弦巻</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Musashi_Kosugi">
                          <label class="form-check-label" for="Musashi_Kosugi">武蔵小杉</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseFive" aria-expanded="false" aria-controls="search-collapseFive">
                        銀座・虎ノ門・日本橋エリア
                      </button>
                    </h2>
                    <div id="search-collapseFive" class="accordion-collapse collapse" aria-labelledby="search-headingFive" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Ginza_Shiodome">
                          <label class="form-check-label" for="Ginza_Shiodome">銀座・汐留</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Shimbashi_Hamamatsucho">
                          <label class="form-check-label" for="Shimbashi_Hamamatsucho">新橋・浜松町 </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Shiba_ShibaPark">
                          <label class="form-check-label" for="Shiba_ShibaPark">芝・芝公園</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Fukasawa_Komazawa">
                          <label class="form-check-label" for="Fukasawa_Komazawa">日本橋・人形町・八丁堀</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nihonbashi_Ningyocho_Hatchobori">
                          <label class="form-check-label" for="Nihonbashi_Ningyocho_Hatchobori">秋葉原・上野・お茶の水</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Asakusa_Kinshicho_Monzennakacho">
                          <label class="form-check-label" for="Asakusa_Kinshicho_Monzennakacho">浅草・錦糸町・門前仲町</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseSix" aria-expanded="false" aria-controls="search-collapseSix">
                        湾岸エリア
                      </button>
                    </h2>
                    <div id="search-collapseSix" class="accordion-collapse collapse" aria-labelledby="search-headingSix" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kachidoki_Tsukishima_Tsukuda_Harumi">
                          <label class="form-check-label" for="Kachidoki_Tsukishima_Tsukuda_Harumi">勝どき・月島・佃・晴海</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Toyosu_Shinonome_Ariake">
                          <label class="form-check-label" for="Toyosu_Shinonome_Ariake">豊洲・東雲・有明</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Tennoz_Oimachi">
                          <label class="form-check-label" for="Tennoz_Oimachi">天王洲・大井町</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Shibaura_Coast_Konan">
                          <label class="form-check-label" for="Shibaura_Coast_Konan">芝浦・海岸・港南</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseSeven" aria-expanded="false" aria-controls="search-collapseSeven">
                        杉並・吉祥寺エリア
                      </button>
                    </h2>
                    <div id="search-collapseSeven" class="accordion-collapse collapse" aria-labelledby="search-headingSeven" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kichijoji_Ogikubo">
                          <label class="form-check-label" for="Kichijoji_Ogikubo">吉祥寺・荻窪</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="MtHamada_Eifuku_SakuraAqueduct">
                          <label class="form-check-label" for="MtHamada_Eifuku_SakuraAqueduct">浜田山・永福・桜上水</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Seijo_Kyodo">
                          <label class="form-check-label" for="Seijo_Kyodo">成城・経堂</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kunitachi_Mitaka">
                          <label class="form-check-label" for="Kunitachi_Mitaka">国立・三鷹</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">中野</label>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseSeven" aria-expanded="false" aria-controls="search-collapseSeven">
                      東京23区内
                      </button>
                    </h2>
                    <div id="search-collapseSeven" class="accordion-collapse collapse" aria-labelledby="search-headingSeven" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kichijoji_Ogikubo">
                          <label class="form-check-label" for="Kichijoji_Ogikubo">港区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="MtHamada_Eifuku_SakuraAqueduct">
                          <label class="form-check-label" for="MtHamada_Eifuku_SakuraAqueduct">千代田区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Seijo_Kyodo">
                          <label class="form-check-label" for="Seijo_Kyodo">中央区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kunitachi_Mitaka">
                          <label class="form-check-label" for="Kunitachi_Mitaka">新宿区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">文京区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">渋谷区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">世田谷区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">目黒区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">江東区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">品川区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">大田区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">台東区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">中野区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">杉並区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">豊島区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">北区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">墨田区</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </td>
            </tr>
            <tr>
              <th>価格</th>
              <td>
                <div class="box_select w-50">
                  <div class="box_select_item">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>下限なし</option>
                      <option value="5000">5,000万円</option>
                      <option value="6000">6,000万円</option>
                      <option value="7000">7,000万円</option>
                      <option value="8000">8,000万円</option>
                      <option value="9000">9,000万円</option>
                      <option value="10000">10,000万円</option>
                      <option value="12000">12,000万円</option>
                      <option value="15000">15,000万円</option>
                      <option value="18000">18,000万円</option>
                      <option value="20000">20,000万円</option>
                      <option value="25000">25,000万円</option>
                      <option value="30000">30,000万円</option>
                    </select>
                  </div>
                  <span>〜</span>
                  <div class="box_select_item">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>上限なし</option>
                      <option value="6000">6,000万円</option>
                      <option value="7000">7,000万円</option>
                      <option value="8000">8,000万円</option>
                      <option value="9000">9,000万円</option>
                      <option value="10000">10,000万円</option>
                      <option value="12000">12,000万円</option>
                      <option value="15000">15,000万円</option>
                      <option value="18000">18,000万円</option>
                      <option value="20000">20,000万円</option>
                      <option value="25000">25,000万円</option>
                      <option value="30000">30,000万円</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th>専有面積</th>
              <td>
                <div class="box_select w-50">
                  <div class="box_select_item">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>下限なし</option>
                      <option value="60">60㎡</option>
                      <option value="70">70㎡</option>
                      <option value="80">80㎡</option>
                      <option value="90">90㎡</option>
                      <option value="100">100㎡</option>
                      <option value="120">120㎡</option>
                      <option value="150">150㎡</option>
                      <option value="180">180㎡</option>
                      <option value="200">200㎡</option>
                      <option value="250">250㎡</option>
                      <option value="300">300㎡</option>
                    </select>
                  </div>
                  <span>〜</span>
                  <div class="box_select_item">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>上限なし</option>
                      <option value="70">70㎡</option>
                      <option value="80">80㎡</option>
                      <option value="90">90㎡</option>
                      <option value="100">100㎡</option>
                      <option value="120">120㎡</option>
                      <option value="150">150㎡</option>
                      <option value="180">180㎡</option>
                      <option value="200">200㎡</option>
                      <option value="250">250㎡</option>
                      <option value="300">300㎡</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <!-- <tr>
              <th>間取り</th>
              <td class="td_list">
                <div class="box_select list">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1R ～ 1K </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">1DK ～ 1LDK</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                    <label class="form-check-label" for="inlineCheckbox3">2K ～ 2LDK</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                    <label class="form-check-label" for="inlineCheckbox4">3DK ～ 3LDK</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                    <label class="form-check-label" for="inlineCheckbox5">4DK ～ 4LDK</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                    <label class="form-check-label" for="inlineCheckbox6">5LDK以上</label>
                  </div>
                </div>
              </td>
            </tr> -->
            <tr>
              <th>駅距離</th>
              <td>
                <div class="box_select">
                  <div class="box_select_item ">
                    <select class="form-select not_specified" aria-label="Default select example">
                      <option value="1">5分以内</option>
                      <option value="2">10分以内</option>
                      <option value="3">15分以内</option>
                      <option selected>指定しない</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th>こだわり</th>
              <td class="td_custom">
                <div class="box_select custom">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="parking" value="option7">
                    <label class="form-check-label" for="parking">駐車場相談</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="petsallowed" value="option8">
                    <label class="form-check-label" for="petsallowed">ペット相談</label>
                  </div>
                  <!-- <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="deliverybox" value="option9">
                    <label class="form-check-label" for="deliverybox">宅配ボックス</label>
                  </div> -->
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cornerroom" value="option9_01">
                    <label class="form-check-label" for="cornerroom">角部屋</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="terrace_roofbalcony" value="option9_02">
                    <label class="form-check-label" for="terrace_roofbalcony">テラス・ルーフバルコニー</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="terrace_roofbalcony" value="option9_02">
                    <label class="form-check-label" for="terrace_roofbalcony">メゾネット</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th>表示条件</th>
              <td>
                <div class="box_select">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="show_sold_properties" value="option10">
                    <label class="form-check-label" for="show_sold_properties">販売済の物件も表示</label>
                  </div>
                </div>
              </td>
            </tr>
          </table>
          <p class="mb-0 text-center">
            <button type="submit" class="btn btn_searhconditions">
              <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
              <span>この条件で検索</span>
            </button>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal Mansions-->
<div class="modal fade modal_search" id="modal_search2" tabindex="-1" aria-labelledby="modal_search" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_search">検索条件変更</h5>
        <a href="#" class="btn btn_searhconditions d-block d-lg-none">
          <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
          <span>この条件で検索</span>
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" class="modal_frmsearch">
          <table class="table table-condensed">
            <tr>
              <th>エリア <span class="btn_showhide_accordion"></span></th>
              <td class="w_accordion_search">
                <div class="accordion accordion-flush accordion_search" id="accordion_search">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="search-headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#search-collapseSeven" aria-expanded="false" aria-controls="search-collapseSeven">
                      東京23区内
                      </button>
                    </h2>
                    <div id="search-collapseSeven" class="accordion-collapse collapse" aria-labelledby="search-headingSeven" data-bs-parent="#accordion_search">
                      <div class="accordion-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kichijoji_Ogikubo">
                          <label class="form-check-label" for="Kichijoji_Ogikubo">港区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="MtHamada_Eifuku_SakuraAqueduct">
                          <label class="form-check-label" for="MtHamada_Eifuku_SakuraAqueduct">千代田区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Seijo_Kyodo">
                          <label class="form-check-label" for="Seijo_Kyodo">中央区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Kunitachi_Mitaka">
                          <label class="form-check-label" for="Kunitachi_Mitaka">新宿区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">文京区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">渋谷区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">世田谷区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">目黒区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">江東区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">品川区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">大田区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">台東区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">中野区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">杉並区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">豊島区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">北区</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="Nakano">
                          <label class="form-check-label" for="Nakano">墨田区</label>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </td>
            </tr>
            <tr>
              <th>駅距離</th>
              <td>
                <div class="box_select">
                  <div class="box_select_item ">
                    <select class="form-select not_specified" aria-label="Default select example">
                      <option value="1">5分以内</option>
                      <option value="2">10分以内</option>
                      <option value="3">15分以内</option>
                      <option selected>指定しない</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th>こだわり</th>
              <td class="td_custom">
                <div class="box_select custom">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="parking" value="option7">
                    <label class="form-check-label" for="parking">駐車場相談</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="petsallowed" value="option8">
                    <label class="form-check-label" for="petsallowed">ペット相談</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cornerroom" value="option9_01">
                    <label class="form-check-label" for="cornerroom">宅配ボックス</label>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th>表示条件</th>
              <td>
                <div class="box_select">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="show_sold_properties" value="option10">
                    <label class="form-check-label" for="show_sold_properties">販売済の物件も表示</label>
                  </div>
                </div>
              </td>
            </tr>
          </table>
          <p class="mb-0 text-center">
            <button type="submit" class="btn btn_searhconditions">
              <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
              <span>この条件で検索</span>
            </button>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>