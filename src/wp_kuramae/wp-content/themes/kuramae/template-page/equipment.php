<?php 
/*
    Template Name: equipment
*/
?>


<?php get_header(); ?>

<main>

    <section class="section_subbanner">
        <img src="<?php bloginfo('template_directory');?>/assets/images/main/bg_equipment.jpg" alt="bg_plan" class="img-fluid">
    </section>

    <section class="section_plan section_equipment">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <ul class="nav nav-tabs" id="tab_plan" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="sharedequipment" data-bs-toggle="tab" data-bs-target="#sharedequipment_pane" type="button" role="tab" aria-controls="sharedequipment_pane" aria-selected="true"><span>共用設備</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="service" data-bs-toggle="tab" data-bs-target="#service_pane" type="button" role="tab" aria-controls="service_pane" aria-selected="false"><span>サービス</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="equipment" data-bs-toggle="tab" data-bs-target="#equipment_pane" type="button" role="tab" aria-controls="equipment_pane" aria-selected="false"><span>設備</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="structure" data-bs-toggle="tab" data-bs-target="#structure_pane" type="button" role="tab" aria-controls="structure_pane" aria-selected="false"><span>構造</span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="tab_plancontent">
            <div class="tab-pane fade show active" id="sharedequipment_pane" role="tabpanel" aria-labelledby="sharedequipment" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="list_general">
                                <li><a href="#card_obliqueelevator" data-scroll>斜行エレベータ</a></li>
                                <li><a href="#card_fitnessroom" data-scroll>フィットネスルーム</a></li>
                                <li><a href="#card_indoorparking" data-scroll>屋内駐車場</a></li>
                                <li><a href="#card_others" data-scroll>その他</a></li>
                            </ul>

                            <div class="card" id="card_obliqueelevator">
                                <h5 class="card-header">斜行エレベーター</h5>
                                <div class="card-body">
                                    <h5 class="card-title">斜行エレベーター</h5>
                                    <div class="row">
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="row g-0">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_img">
                                                        <!-- <img src="images/" alt="" class="img-fluid"> -->
                                                        <span>参考写真</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_img">
                                                        <!-- <img src="images/" alt="" class="img-fluid"> -->
                                                        <span>参考写真</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <p class="card-text">宮の森の傾斜地を利用した斜行エレベーターを採用しています。エレベーターの窓からは、宮の森の豊かな自然、札幌の美しい景観を日々体感することができます。車椅子やベビーカーも安心・快適に乗ることが可能です。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="card_fitnessroom">
                                <h5 class="card-header">フィットネスルーム</h5>
                                <div class="card-body">
                                    <h5 class="card-title">リフレッシュしながら自分と向き合う時間を楽しむフットネスルーム</h5>
                                    <div class="row">
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="box_img">
                                                <!-- <img src="images/" alt="" class="img-fluid"> -->
                                                <span>参考写真</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <p class="card-text">入居者専用のフィットネスルームでは、備え付けのフィットネスマシンが利用できます。日常的に運動を取り入れ、体力づくりやリフレッシュを、時間や天気を気にすることなく楽しめます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="card_indoorparking">
                                <h5 class="card-header">屋内駐車場</h5>
                                <div class="card-body">
                                    <h5 class="card-title">愛車を守る、リモコン自動ゲート付き屋内平面駐車場</h5>
                                    <div class="row">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <p class="card-text">本物件にはリモコン自動ゲート付きの屋内平面駐車場を採用しています。天候の影響を受けにくく、北海道の積雪から大切な愛車を守ります。また、自動ゲートの設置によりセキュリティ面でも安心してご利用頂けます。</p>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="box_img">
                                                <!-- <img src="images/" alt="" class="img-fluid"> -->
                                                <span>参考写真</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="card_others">
                                <h5 class="card-header">その他</h5>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <h5 class="card-title">ドライルーム</h5>
                                            <p class="card-text">換気システムを備えたドライルームを設置しています。ウィンターシーズンには、濡れた衣服や靴、ウィンターポーツ用品の乾燥に最適です。</p>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <h5 class="card-title">トランクルーム</h5>
                                            <p class="card-text">屋内駐車場隣接のトランクルームにはオフシーズンのタイヤなどを大切に保管することが可能です。活用することで、ゆとりのある居住空間を確保することができます。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                
            </div>

            <div class="tab-pane fade" id="service_pane" role="tabpanel" aria-labelledby="service" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="list_general">
                                <li><a href="#card_conciergeservice" data-scroll>コンシェルジュサービス</a></li>
                                <li><a href="#card_security" data-scroll>セキュリティ</a></li>
                            </ul>

                            <div class="card" id="card_conciergeservice">
                                <h5 class="card-header">コンシェルジュサービス</h5>
                                <div class="card-body">
                                    <h5 class="card-title">毎日の暮らしをサポートする コンシェルジュ サービス</h5>
                                    <div class="row">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <p class="card-text mb-2 mb-lg-0">受付サービスから、宅配便・クリーニング・タクシーの取次サービス、各種代行業者の紹介サービスなど。コンシェルジュが多種多様な暮らしの要望にお応えします。</p>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="row g-0">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_img">
                                                        <img src="<?php bloginfo('template_directory');?>/assets/images/img01.jpg" alt="" class="img-fluid">
                                                        <span>参考写真</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_img">
                                                        <img src="<?php bloginfo('template_directory');?>/assets/images/img02.jpg" alt="" class="img-fluid">
                                                        <span>参考写真</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reservation_system">
                                        <div class="row">
                                            <div class="col-12 col-lg-4 align-self-center">
                                                <div class="box_img bg-transparent">
                                                    <img src="<?php bloginfo('template_directory');?>/assets/images/img_phone.png" alt="" class="img-fluid">
                                                    <span class="text-black">参考写真</span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8 align-self-center">
                                                <h3>会員登録制ポータルサイト・予約システム</h3>
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/logo_oicoo.png" alt="" class="img-fluid mb-3">
                                                <p>コンシェルジュの対応時間外は居住者様専用ポータルサイト「オイコス」をご利用いただけます。<br>
                                                居住者様への様々なお知らせをサイト上やメールでも受信できるほか、管理規約などの書類の閲覧機能や共用施設オンライン予約など、マンションライフに役立つメニューを揃えております。</p>
                                                <p>※ご利用には予め会員登録が必要となります。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="card" id="card_security">
                                <h5 class="card-header">セキュリティ</h5>
                                <div class="card-body">
                                    <h5 class="card-title">綜合警備保障の24 時間集中監視システム</h5>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <p class="text-center">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/logo_alsok.jpg" alt="" class="img-fluid">
                                            </p>
                                            <p>綜合警備保障の〈ALSOK〉ガードセンターによる、24 時間集中監視システムを採用しました。住戸内で火災などの異常が発生した場合、住戸内のセキュリティインターホンが警報音を鳴らし、警報表示が点滅、さらに管理室にも警報が届きます。同時に綜合警備保障へ自動通報され、迅速かつ的確に対処。状況に応じて関係各所に通報します。</p>
                                            <p>※機械警備は管理委託契約に則り、警備会社、警備システムが上記と異なる場合がございます。</p>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/about_alsok.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <ul class="list_products_security">
                                        <li>
                                            <h6>ハンズフリーキー</h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro11.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>主なオートロックドアには、鍵をカバンやポケットに入れたまま解錠可能なハンズフリーキーを採用。高いセキュリティと優れた操作性で、荷物で手がふさがっている時や雨の日にとても便利です。</p>
                                        </li>
                                        <li>
                                            <h6>防犯カメラ</h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro12.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>共用部各所に防犯カメラを設置。24 時間作動し、管理室の記録装置にリアルタイムで送り続けています。長時間録画が可能なため、監視機能としてはもちろん。犯罪等の抑止効果も高まります。</p>
                                        </li>
                                        <li>
                                            <h6>カラーモニター付インターホン</h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro13.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>各住戸のカラーモニターでエントランスホールにいる来訪者を映像と音声で確認してから解錠できるので安心です。</p>
                                        </li>

                                        <li>
                                            <h6>防犯センサー</h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro14.jpg" alt="" class="img-fluid">
                                                <span>参考写真</span>
                                            </div>
                                            <p>玄関ドアには防犯センサーを設置。警戒設定時に扉が開けられるとセンサーが反応し、管理室と管理会社へ異常信号を発信します。</p>
                                        </li>
                                        <li>
                                            <h6>ダブルロック仕様ディンプルキー</h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro15.jpg" alt="" class="img-fluid">
                                                <span>参考写真</span>
                                            </div>
                                            <p>防犯性を高めるため、玄関ドアには上下2ヶ所で施錠できるダブルロック仕様を採用しました。また、玄関キーはピッキングなどの不正解錠への対応を強化したリバーシブルタイプのディンプルキーを採用しています。不正に解錠しようとしても時間がかかるため、犯罪の未遂率が高まります。</p>
                                        </li>
                                        <li>
                                            <h6>鎌デッド錠</h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro16.jpg" alt="" class="img-fluid">
                                                <span>参考写真</span>
                                            </div>
                                        </li>
                                        <li>
                                            <h6></h6>
                                            <div class="box_img">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/pro17.jpg" alt="" class="img-fluid">
                                                <span>参考写真</span>
                                                <p>工具をドアの内側に入れサムターンを回してしまう不正解錠に対応したスイッチ式防犯サムターンを採用しています。</p>
                                            </div>
                                        </li>
                                        <li class="expand">
                                            <h6>エレベーター安全装置</h6>
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <p>エレベーター運転中に、地震管制装置が一定値を超えた地震の初期微動（P 波）・主要動（S波）を感知すると、最寄階に速やかに停止します。<br>
                                                    また、停電した際には一旦停止後、停電時自動着床装置により、最寄階に自動停止し、さらに、天井の停電灯が点灯してエレベーター内を照らす他、インターホンが使用できるので、外部との連絡も可能です。</p>
                                                    <p><small>※エレベーター運転中に急速な大きい地震により、主要動（S 波）［高］を感知した場合は、その瞬間に直ちに休止し、最寄階への移動や扉が開かない場合がございます。<br>
                                                    ※非常用エレベーターは停電時、一旦停止後、非常用発電機が作動し通常の運転に戻ります。</small></p>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <img src="<?php bloginfo('template_directory');?>/assets/images/pro18.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="equipment_pane" role="tabpanel" aria-labelledby="equipment" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="list_general">
                                <li><a href="#card_kitchen" data-scroll>キッチン</a></li>
                                <li><a href="#card_washroombathroom" data-scroll>洗面室・浴室</a></li>
                                <li><a href="#card_privatesauna" data-scroll>プライベートサウナ</a></li>
                            </ul>

                            <div class="card" id="card_kitchen">
                                <h5 class="card-header">キッチン</h5>
                                <div class="card-body">
                                    <div class="box_img_main">
                                        <img src="<?php bloginfo('template_directory');?>/assets/images/img_kitchen.jpg" alt="img_kitchen" class="img-fluid">
                                    </div>

                                    <ul class="list_products_security">
                                        <li>
                                            <h6>IH 平面ヒーター</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/kitchen01.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>安全性の高いIH平面ヒーターを採用しました。フラットな天井面は拭き掃除も簡単で衛生的です。</p>
                                        </li>
                                        <li>
                                            <h6>ビルトイン電気オーブン</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/kitchen02.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>熱風循環方式で2 段調理が可能。食品全体を熱風で包み込むように加熱し、ムラを抑えて焼き上げます。</p>
                                        </li>
                                        <li>
                                            <h6>整流板付レンジフード</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/kitchen03.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>フィルターレス仕様で面倒なフィルター掃除も不要。清潔感のあるつぎ目のないシャープな一体フォルム。</p>
                                        </li>

                                        <li>
                                            <h6>食器洗い乾燥機</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/kitchen04.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>食器の片付けに便利な食器洗い乾燥機を標準装備しました。</p>
                                        </li>
                                        <li>
                                            <h6>スライドキャビネット</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/kitchen05.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>引き出しが閉まる直前にスピードをゆるめ、ゆっくりと静かに閉まるソフトクローズ機能付きです。</p>
                                        </li>
                                        <li>
                                            <h6>デュポン・コーリアン製天板</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/kitchen06.jpg" alt="" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>美しさ、耐久性、メンテナンス性に優れたデュポン・コーリアン製の人工大理石天板を採用しました。</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card" id="card_washroombathroom">
                                <h5 class="card-header">洗面室・浴室</h5>
                                <div class="card-body">
                                    <div class="carousel carousel_washroombathroom" data-flickity='{"prevNextButtons": false }'>
                                        <div class="carousel-cell">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/img_washroombathroom01.jpg" alt="washroombathroom01" class="img-fluid">
                                        </div>
                                        <div class="carousel-cell">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/img_washroombathroom02.jpg" alt="washroombathroom02" class="img-fluid">
                                        </div>
                                        <div class="carousel-cell">
                                            <img src="<?php bloginfo('template_directory');?>/assets/images/img_washroombathroom03.jpg" alt="washroombathroom03" class="img-fluid">
                                        </div>
                                    </div>

                                    <ul class="list_products_security">
                                        <li>
                                            <h6>DURAVIT 社製 スタルク浴槽</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom01.jpg" alt="washroombathroom01" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>デザイナーフィリップ・スタルクがデザインを手掛ける、モダンで機能的なアクリルバスタブです。</p>
                                        </li>
                                        <li>
                                            <h6>サーモスタットバス シャワー混合水栓</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom02.jpg" alt="washroombathroom02" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>サーモスタットバスシャワー混合水栓</p>
                                        </li>
                                        <li>
                                            <h6>ユーフォリア モノ ハンドシャワー</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom03.jpg" alt="washroombathroom03" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>安全性の高いIH平面ヒーターを採用しました。フラットな天井面は拭き掃除も簡単で衛生的です。</p>
                                        </li>

                                        <li>
                                            <h6>壁パネル</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom04.jpg" alt="washroombathroom04" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                        </li>
                                        <li>
                                            <h6>ボウル</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom05.jpg" alt="washroombathroom05" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>※部屋タイプにより異なります。</p>
                                        </li>
                                        <li>
                                            <h6>ボウル</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom06.jpg" alt="washroombathroom06" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>※部屋タイプにより異なります。</p>
                                        </li>
                                        <li>
                                            <h6>ボウル</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom07.jpg" alt="washroombathroom07" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                            <p>※部屋タイプにより異なります。</p>
                                        </li>

                                        <li>
                                            <h6>ウォシュレット 一体形便器NJ</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom08.jpg" alt="washroombathroom08" class="img-fluid">
                                                <span>参考写真</span>
                                            </div>
                                        </li>
                                        <li>
                                            <h6>シングルレバー 混合水栓</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom09.jpg" alt="washroombathroom09" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                        </li>
                                        <li>
                                            <h6>立水洗</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/washroombathroom10.jpg" alt="washroombathroom10" class="img-fluid">
                                                <span class="text-black">参考写真</span>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>

                            <div class="card" id="card_privatesauna">
                                <h5 class="card-header">プライベートサウナ</h5>
                                <div class="card-body">
                                    <h5 class="card-title">札幌の冬を健康的に。最高のくつろぎを生むプライベートサウナ</h5>
                                    <div class="row">
                                        <div class="col-12 col-lg-4 align-self-center">
                                            <p class="card-text">60～80℃のマイルドな温熱空間で自然な発汗を感じることで、疲労回復やストレス解消など、心身のリラックスを促進します。室内にいながら、自然の中にいるような心地よいサウナ浴をプライベート空間でお楽しみ頂けます。</p>
                                        </div>
                                        <div class="col-12 col-lg-8 align-self-center">
                                            <div class="row g-0">
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_img">
                                                        <img src="<?php bloginfo('template_directory');?>/assets/images/privatesauna01.jpg" alt="privatesauna01" class="img-fluid">
                                                        <span>参考写真</span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="box_img">
                                                        <img src="<?php bloginfo('template_directory');?>/assets/images/privatesauna02.jpg" alt="privatesauna02" class="img-fluid">
                                                        <span>参考写真</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="structure_pane" role="tabpanel" aria-labelledby="structure" tabindex="0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="list_general">
                                <li><a href="#card_elevation" data-scroll>立面図</a></li>
                                <li><a href="#card_sitelayout" data-scroll>敷地配置図</a></li>
                                <li><a href="#card_structure" data-scroll>構造</a></li>
                                <li><a href="#card_amenities" data-scroll>アメニティ</a></li>
                                <li><a href="#card_ecosystem" data-scroll>エコシステム</a></li>
                            </ul>

                            <div class="card" id="card_elevation">
                                <h5 class="card-header">立面図</h5>
                                <div class="card-body">
                                    <div class="text-center">
                                        <p><img src="<?php bloginfo('template_directory');?>/assets/images/elevation01.jpg" alt="elevation01" class="img-fluid"></p>
                                        <p>東立面図</p>
                                        <p><img src="<?php bloginfo('template_directory');?>/assets/images/elevation02.jpg" alt="elevation02" class="img-fluid"></p>
                                        <p>東立面図</p>
                                        <p><img src="<?php bloginfo('template_directory');?>/assets/images/elevation03.jpg" alt="elevation03" class="img-fluid"></p>
                                        <p>東立面図</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="card_sitelayout">
                                <h5 class="card-header">敷地配置図</h5>
                                <div class="card-body">
                                    <div class="box_sitelayout">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="box_sitelayout_item">
                                                    <img src="<?php bloginfo('template_directory');?>/assets/images/sitelayout01.jpg" alt="sitelayout01" class="img-fluid">
                                                    <span>1階</span>
                                                    <img src="<?php bloginfo('template_directory');?>/assets/images/i_direction.svg" alt="direction" class="img-fluid i_directions" width="100">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="box_sitelayout_item">
                                                    <img src="<?php bloginfo('template_directory');?>/assets/images/sitelayout02.jpg" alt="sitelayout02" class="img-fluid">
                                                    <span>1階</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" id="card_structure">
                                <h5 class="card-header">構造</h5>
                                <div class="card-body">
                                    <ul class="list_products_security">
                                        <li>
                                            <h6>直接基礎</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/structure01.jpg" alt="structure01" class="img-fluid">
                                            </div>
                                            <p>安全性耐震性を左右する基礎工事は強固な地盤（支持層）に構築されます。地表近くに支持層がある場合に使用される「直接基礎」（建物の底部をコンクリートで固めて建物荷重を直接地盤で支える工法）を採用しています。の高いIH平面ヒーターを採用しました。フラットな天井面は拭き掃除も簡単で衛生的です。</p>
                                        </li>
                                        <li>
                                            <h6>構造躯体</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/structure02.jpg" alt="structure02" class="img-fluid">
                                            </div>
                                            <p>本物件は、住戸のある建物は構造躯体の耐久性を高めるために、設計基準強度（Fc）を約24N/ ㎟ ～ 約27N / ㎟に設定しています。これは1㎡当たり約2,400～2,700トンの重量を支えられることを示しています。</p>
                                        </li>
                                        <li>
                                            <h6>ダブル配筋</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/structure03.jpg" alt="structure03" class="img-fluid">
                                            </div>
                                            <p>耐震壁の鉄筋は、コンクリートの中に二重に鉄筋を配したダブル配筋を採用しています。シングル配筋に比べ、より高い構造強度と耐久性を実現しています。</p>
                                        </li>

                                        <li class="w-100">
                                            <h6>コンクリートの水セメント比</h6>
                                            <p>住戸のある建物はコンクリートの耐久性を高めるため、柱・梁・床などの主要な構造部について、セメントの重量に対する水の重量の割合を最大値50.5%に設定しています。<br>
                                            水の量が少ないほど強度が高くなり耐久性が向上します。</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card" id="card_amenities">
                                <h5 class="card-header">アメニティ</h5>
                                <div class="card-body">
                                    <ul class="list_products_security">
                                        <li class="w-100">
                                            <h6>J:COM テレビ / インターネット / 電話</h6>
                                            <p class="text-center">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/amenities.jpg" alt="amenities" class="img-fluid">
                                            </p>
                                            <p>本物件はアンテナケーブルをTV 端子に接続することで、地上デジタル放送をご覧いただけます。 また、地域情報をお届けするJ:COM チャンネル（コミュニティチャンネル）の他、J:COMと加入契約をすることにより、スポーツ、アニメなどの専門チャンネル（CS デジタル放送）やビデオオンデマンドがお楽しみいただけます。<br>
                                            インターネットはT V 端子よりケーブルモデムを介して、LAN ケーブルをパソコンに接続してご利用いただけます。<br>
                                            電話はT V 端子からeMTA（電話専用端末）を介して、一般の固定電話に接続しご利用いただけます。</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card" id="card_ecosystem">
                                <h5 class="card-header">エコシステム</h5>
                                <div class="card-body">
                                    <ul class="list_products_security">
                                        <li>
                                            <h6>開放感を感じる天井高</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/ecosystem01.jpg" alt="ecosystem01" class="img-fluid">
                                            </div>
                                            <p>天井高最大約2,400 ㎜～2,600 ㎜を確保しました。天井を高くすることに、より同じ面積でも空間の広がりを感じられるように配慮した開放感あふれる設計です。<br>
                                            ※住戸タイプにより異なります。詳細は図面集をご確認ください。</p>
                                        </li>
                                        <li>
                                            <h6>エコジョーズ</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/ecosystem02.jpg" alt="ecosystem02" class="img-fluid">
                                            </div>
                                            <p>天然ガスを使った省エネ型ボイラー「エコジョーズ」。キッチン、バスルーム、パウダールームへのスムーズな給湯はもちろん、床暖房や浴室暖房乾燥機までをトータルにサポート。従来無駄に捨てられていた排気熱、潜熱を効率よく回収してお湯を沸かす省エネ仕様となっており、従来の給湯器に比べて環境に優しく、年間ランニングコストにおいても優れた経済性を発揮します。</p>
                                        </li>
                                        <li>
                                            <h6>木・アルミ複合サッシ/ トリプルガラス</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/ecosystem03.jpg" alt="ecosystem03" class="img-fluid">
                                            </div>
                                            <p>住戸一部の開口部には、複数枚のガラスの間に空気層を設けた高断熱トリプルガラスを採用。高い断熱性を発揮し、冷暖房両方の負荷を軽減。省エネにも貢献します。<br>
                                            ※詳細は係員にお尋ねください。</p>
                                        </li>

                                        <li>
                                            <h6>宅配ボックス</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/ecosystem04.jpg" alt="ecosystem04" class="img-fluid">
                                            </div>
                                            <p>留守中に届いた荷物を24時間いつでも受け取ることができます。留守中に届いた荷物は住戸内のインターホン親機の着荷表示により確認できます。宅配業者を装った不審者の侵入などの防犯効果も期待できます。</p>
                                        </li>
                                        <li>
                                            <h6>温水床暖房</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/ecosystem05.jpg" alt="ecosystem05" class="img-fluid">
                                            </div>
                                            <p>リビング・ダイニングには温水床暖房を採用。温水を利用して足元から心地よく室内を暖め、理想的な頭寒足熱を実現。お子さまやお年寄りにも安心なシステムです。</p>
                                        </li>
                                        <li>
                                            <h6>天井埋込カセット形エアコン</h6>
                                            <div class="box_img custom">
                                                <img src="<?php bloginfo('template_directory');?>/assets/images/ecosystem06.jpg" alt="ecosystem06" class="img-fluid">
                                            </div>
                                            <p>埋込型の天井カセットエアコンを標準装備。理想的な気流をお届けします。セントラル換気システムにより冷暖房エネルギーをリサイクルし、四季を通して室内の快適性を高めます。</p>
                                        </li>
                                        <li>
                                            <h6>LED 照明</h6>
                                            <p>住戸内のダウンライトにはLED 照明を採用。従来の白熱灯に比べ寿命が長持ちし、消費電力量とCO2 排出量が削減されます。</p>
                                        </li>
                                        <li>
                                            <h6>断熱構造</h6>
                                            <p>外気に面する梁・壁の室内側に約55 ㎜ 厚、最下階住戸の床下に約35 ㎜～約50 ㎜厚の結露発生を抑制する断熱材を施工。また、最上階の屋上には約70 ㎜厚の断熱材を施しています。<br>
                                            ※一部除く。</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php 
        get_template_part('template-parts/section_tel'); 
    ?>
</main>


<?php get_footer(); ?>
    