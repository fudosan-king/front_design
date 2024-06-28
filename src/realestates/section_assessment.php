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
                            <div class="radio-buttons" data-group="<?=$incNumber;?>">
                                <input type="radio" id="visit-<?=$incNumber;?>" name="assessment" value="visit" checked>
                                <label for="visit-<?=$incNumber;?>" class="btn">訪問査定</label>

                                <input type="radio" id="simple-<?=$incNumber;?>" name="assessment" value="simple">
                                <label for="simple-<?=$incNumber;?>" class="btn">簡易査定</label>
                            </div>
                        </li>
                        <li>
                            <div class="label">
                                <span>STEP2</span>
                                物件住所を入力
                            </div>
                            <div class="box_field">
                                <input type="text" class="form-control" id="" placeholder="郵便番号を入力"
                                    name="post"
                                    
                                >
                                <select name="pref" id="" class="form-select">
                                    <option selected value="">都道府県を選択</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="東京都">東京都</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>
                                <input type="text" name="city" class="form-control" id="" placeholder="市区町村を入力">
                                <input type="text" name="aza" class="d-none" value="">
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