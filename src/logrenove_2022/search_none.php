<!doctype html>
<html lang="en">
    <?php include('head.php'); ?>
    <body>

        <?php require('header.php'); ?>

        <main>
            <section class="section_list_templates">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h2 class="title">販売中の中古マンション</h2>
                            <p class="subtitle">販売中の中古マンションのなかから、LogRenoveが上質な物件だけをセレクト。都心部で駅に近く、なおかつ専有面積が広い――そんな希少物件を豊富な写真とともに、わかりやすく解説していきます。</p>
                            <div class="box_searchcondition_top">
                                <h3>検索条件</h3>
                                <p><span>エリア：</span>千代田区, 中央区, 港区, 新宿区, 文京区渋谷区, 台東区, 墨田区, 江東区, 荒川区, 足立区, 葛飾区</p>
                                <p><span>価格：</span>上限なし～下限なし</p>
                                <p><span>広さ：</span>上限なし～下限なし</p>
                                <p><span>こだわり：</span>ペット飼育可,WIC有り</p>
                            </div>
                            <p class="d-flex justify-content-end mb-4">
                                <a href="#modal_search" class="btn_search" data-bs-toggle="modal"><img src="assets/images/icons/i_conditions.svg" alt="" class="img-fluid" width="15">条件を変更する</a>
                            </p>
                            <div class="box_searchnone">
                                <h3>ご希望の条件に該当する物件は<br>ございませんでした</h3>
                                <p>ご希望の物件が見つからない場合は、「シークレット物件を探す」よりお問い合わせください。<br>
                                弊社コンシェルジュが<br>
                                ご希望に合う物件をご提案いたします。</p>
                                <a href="request.php" class="btn btn_searhconditions">
                                    <img class="img-fluid" src="assets/images/icons/i_search_white.svg" alt="i_search_white" width="18">
                                    <span>シークレット物件を探す</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="section_searchconditions">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="box_conditions">
                                <h4>人気のエリアから探す</h4>
                                <p>表参道･青山　麻布･広尾　渋谷･恵比寿･中目黒　目黒･白金高輪　下北沢･三軒茶屋　東横線･目黒線　駒沢･二子玉川　代々木公園　井の頭線　神楽坂　品川・田町　銀座・築地　豊洲清澄・門前仲町　皇居西側　中央線　千駄ヶ谷･四ッ谷　西新宿　東新宿･早稲田　その他</p>
                            </div>

                            <div class="box_conditions">
                                <h4>人気の駅から探す</h4>
                                <p>表参道駅　乃木坂駅　目黒駅　中目黒駅　代官山駅　恵比寿駅　渋谷駅　三軒茶屋駅　広尾駅　麻布十番駅　六本木駅　品川駅　田町駅　五反田駅　大崎駅</p>
                            </div>

                            <div class="box_conditions">
                                <h4>こだわりから探す</h4>
                                <ul>
                                    <li><a href="#">リノベ済物件</a></li>
                                    <li><a href="#">カスタム可能物件</a></li>
                                    <li><a href="#">ペット飼育可</a></li>
                                    <li><a href="#">ウォークインクローゼット</a></li>
                                    <li><a href="#">角部屋　眺望・夜景</a></li>
                                    <li><a href="#">セキュリティ充実</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>
        
        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>