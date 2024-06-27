<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <?php include 'header.php'; ?>

        <div class="salesconsultation_page">

            <section class="section_subbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>無料査定依頼・売却相談</h2>
                            <p>必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_salesconsultation">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <form action="">
                                <div class="request_content">
                                    <div class="block_content">
                                        <h2>査定方法・ご相談内容の種別</h2>
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus mt-lg-3">ご希望の査定方法 <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row g-2 align-items-center">
                                                    <div class="col-4 col-lg-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                            <label class="form-check-label ms-2" for="flexRadioDefault1">訪問査定</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-lg-9">
                                                        <p class="box_text_sm">実際に査定をご希望される物件の現地を訪問し、実際の物件の状況等を確認の上、具体的な査定を行うことができます。</p>
                                                    </div>
                                                    <div class="col-4 col-lg-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label ms-2" for="flexRadioDefault2">簡易査定</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-lg-9">
                                                        <p class="box_text_sm mb-0">お客様よりお伝えいただいた物件に関する情報と、周辺の売出事例、成約事例等から概算の査定を行います。</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="block_content">
                                        <h2>査定対象物件の情報をご入力ください。</h2>

                                        <div class="block_content_highline">
                                            <div class="row g-3 mb-3">
                                                <div class="col-12 col-lg-3">
                                                    <label for="" class="col-form-label">間取り</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                                                            <select class="form-select">
                                                                <option value="部屋数">部屋数</option>
                                                                <option value="">0</option>
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                                <option value="">3</option>
                                                                <option value="">4</option>
                                                                <option value="">5</option>
                                                                <option value="">6</option>
                                                                <option value="">7</option>
                                                                <option value="">8</option>
                                                                <option value="">9</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <select class="form-select">
                                                                <option value="タイプ">タイプ</option>
                                                                <option value="ワンルーム">ワンルーム</option>
                                                                <option value="K">K</option>
                                                                <option value="DK">DK</option>
                                                                <option value="LK">LK</option>
                                                                <option value="LDK">LDK</option>
                                                                <option value="SK">SK</option>
                                                                <option value="SDK">SDK</option>
                                                                <option value="SLK">SLK</option>
                                                                <option value="SLDK">SLDK</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mb-3">
                                                <div class="col-12 col-lg-3">
                                                    <label for="" class="col-form-label">専有面積</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-lg-9">
                                                            <input class="form-control" type="text" name="" value="" placeholder="おおよその面積で結構です">
                                                        </div>
                                                        <div class="col-12 col-lg-3">
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label ms-2" for="inlineRadio1"> ㎡</label>
                                                            </div>
                                                            <div class="form-check form-check-inline mt-2">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label ms-2" for="inlineRadio2"> 坪</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <label for="" class="col-form-label">築年</label>
                                                </div>
                                                <div class="col-12 col-lg-9">
                                                    <select class="form-select">
                                                        <option value="選択してください">選択してください</option>
                                                        <option value="1960年（昭和35年）以前">1960年（昭和35年）以前</option>
                                                        <option value="...">...</option>
                                                        <option value="正確に覚えていない">正確に覚えていない</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                        <hr>

                                        <div class="row g-3">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus">物件所在地 <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label class="text-lg-end d-block" for="">郵便番号</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <div class="w_addresssearch">
                                                            <input class="form-control" type="text" name="" value="" placeholder="1234567">
                                                            <a href="#" class="btn btn_addresssearch"><i></i> 住所検索</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label class="text-lg-end d-block" for="">都道府県</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <select class="form-select">
                                                            <option value="都道府県を選択してください">都道府県を選択してください</option>
                                                            <option value="北海道">北海道</option>
                                                            <option value="...">...</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label class="text-lg-end d-block" for="">市区町村</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <input class="form-control" type="text" name="" value="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center g-2 g-lg-4 mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label class="text-lg-end d-block" for="">丁目番地</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <input class="form-control" type="text" name="" value="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center align-items-lg-center g-2 g-lg-4 ">
                                                    <div class="col-3 col-lg-2">
                                                        <label class="text-lg-end d-block" for=""><i class="label_name">建物・部屋番号</i></label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <input class="form-control" type="text" name="" value="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row g-3">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label">その他お問い合わせ</label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <textarea rows="" cols="" class="form-control" placeholder="ご希望・ご質問・物件に関しての追加情報等ございましたらご記入ください。"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="block_content">
                                        <h2>連絡先をご入力ください</h2>
                                        <div class="row g-3 mb-4">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus">お名前 <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" class="form-control mb-3 mb-lg-0" placeholder="姓">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" class="form-control" placeholder="名">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus">フリガナ <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" class="form-control mb-3 mb-lg-0" placeholder="セイ">
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <input type="text" class="form-control" placeholder="メイ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row g-3">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus">物件所在地 <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label for="" class="text-lg-end d-block">郵便番号</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <div class="w_addresssearch">
                                                            <input class="form-control" type="text" name="" value="" placeholder="1234567">
                                                            <a href="#" class="btn btn_addresssearch"><i></i> 住所検索</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label for="" class="text-lg-end d-block">都道府県</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <select class="form-select">
                                                            <option value="都道府県を選択してください">都道府県を選択してください</option>
                                                            <option value="北海道">北海道</option>
                                                            <option value="...">...</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label for="" class="text-lg-end d-block">市区町村</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <input class="form-control" type="text" name="" value="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center mb-3">
                                                    <div class="col-3 col-lg-2">
                                                        <label for="" class="text-lg-end d-block">丁目番地</label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <input class="form-control" type="text" name="" value="">
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                    <div class="col-3 col-lg-2">
                                                        <label for="" class="text-lg-end d-block"><i class="label_name">建物・部屋番号</i></label>
                                                    </div>
                                                    <div class="col-9 col-lg-10">
                                                        <input class="form-control" type="text" name="" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row g-3 mb-4">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus">ご連絡先電話番号 <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col-12 col-lg-3">
                                                <label for="" class="col-form-label require_cus">メールアドレス <span>必須</span></label>
                                            </div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" class="form-control mb-3" placeholder="半角英数">
                                                <input type="text" class="form-control" placeholder="確認用">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="box_privacypolicy">
                                            <p class="privacypolicy">ご入力いただいた情報は、当社のプライバシーポリシーに従って厳重に管理いたします。<br>
                                                個人情報の取扱に関しましては <a target="_blank" href="https://www.logknot.co.jp/privacypolicy/">個人情報の取扱いについて</a> をご覧ください。<br>
                                                ご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label fw-normal" for="flexCheckChecked">個人情報の取扱いについてに同意する</label>
                                            </div>
                                            <button type="submit" class="btn btn_checkentries">入力内容を確認する</button>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </div>


    <?php require 'footer.php'; ?>
    <?php require 'js-footer.php'; ?>
</body>

</html>