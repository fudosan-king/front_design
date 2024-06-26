<section class="section_assessment">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="salesconsultation.php">
                    <ul>
                        <li>
                            <div class="label">
                                <span>STEP1</span>
                                査定方法を選択
                            </div>
                            <div class="radio-buttons">
                                <input type="radio" id="visit" name="assessment" value="visit" checked>
                                <label for="visit" class="btn">訪問査定</label>

                                <input type="radio" id="simple" name="assessment" value="simple">
                                <label for="simple" class="btn">簡易査定</label>
                            </div>
                        </li>
                        <li>
                            <div class="label">
                                <span>STEP2</span>
                                物件住所を入力
                            </div>
                            <div class="row g-3">
                                <div class="col-4 col-lg-4">
                                    <input type="text" class="form-control" id="" placeholder="郵便番号を入力">
                                </div>
                                <div class="col-4 col-lg-4">
                                    <select id="" class="form-select">
                                        <option selected>都道府県を選択</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-4 col-lg-4">
                                    <input type="text" class="form-control" id="" placeholder="市区町村を入力">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn_request"></button>
                    <p><a href="#">◇地域や物件によりお取り扱いできない場合がございます。</a></p>
                </form>
            </div>
        </div>
    </div>
</section>