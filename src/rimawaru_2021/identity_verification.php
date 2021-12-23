<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>

            <section class="section_template">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <ul class="steps">
                                <li class="actived">
                                    <a href="registration.php">
                                        <span>1</span>
                                        <span>投資家情報登録</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="identity_verification.php">
                                        <span>2</span>
                                        <span>本人確認書類登録</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="refund.php">
                                        <span>3</span>
                                        <span>払戻し口座情報登録</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="refund.php">
                                        <span>4</span>
                                        <span>確認画面</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="completed.php">
                                        <span>5</span>
                                        <span>申請完了</span>
                                    </a>
                                </li>
                            </ul>

                            <h2 class="title">本人確認書類登録</h2>
                            <h3 class="title_sub">本人確認の資料を登録ください。</h3>
                            <div class="row mb-5">
                                <div class="col-12 col-lg-6 m-auto">
                                    <ul class="m-auto">
                                        <li>運転免許証（裏・表）</li>
                                        <li>マイナンバーカード（裏・表）</li>
                                        <li>〇〇カードの場合は△△の提出も必要です。</li>
                                    </ul>
                                </div>
                            </div>

                            <form class="frm_investerinfo">

                                <div class="card">
                                    <div class="card-header">
                                        出資者基本情報 
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th width="40%">メールアドレス</th>
                                                <td>◯◯◯◯◯◯@xxxxxxxx.jp</td>
                                            </tr>
                                            <tr>
                                                <th>本名</th>
                                                <td>山田　太郎</td>
                                            </tr>
                                            <tr>
                                                <th>本名（カナ）</th>
                                                <td>ヤマダ　タロウ</td>
                                            </tr>
                                            <tr>
                                                <th>性別</th>
                                                <td>男性</td>
                                            </tr>
                                            <tr>
                                                <th>生年月日</th>
                                                <td>1980年1月31日</td>
                                            </tr>
                                            <tr>
                                                <th>住所</th>
                                                <td>100-0001　東京都港区北青山1-1-1ダイハンビル　101</td>
                                            </tr>
                                            <tr>
                                                <th>電話番号</th>
                                                <td>03-0000-11111</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        出資者情報の登録
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-3 align-self-center">
                                                    <label class="mb-lg-0" for="">書類タイプ</label>
                                                </div>
                                                <div class="col-12 col-lg-9 align-self-center">
                                                    <select name="" class="custom-select">
                                                        <option value="">運転免許証</option>
                                                        <option value="">...</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <div class="drop-zone">
                                                        <span class="drop-zone__prompt">タップして表面を読み取る</span>
                                                        <input type="file" name="myFile" class="drop-zone__input">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="drop-zone">
                                                        <span class="drop-zone__prompt">タップして表面を読み取る</span>
                                                        <input type="file" name="myFile" class="drop-zone__input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <p class="text-center mb-5">
                                            <a href="registration.php" class="btn btn_gray mr-0 mr-lg-3 mb-2">戻る</a>
                                            <a href="refund.php" class="btn btn_green mb-2">払い戻し口座登録に進む</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>

        <script type="text/javascript">
            document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
              const dropZoneElement = inputElement.closest(".drop-zone");

              dropZoneElement.addEventListener("click", (e) => {
                inputElement.click();
              });

              inputElement.addEventListener("change", (e) => {
                if (inputElement.files.length) {
                  updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
              });

              dropZoneElement.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZoneElement.classList.add("drop-zone--over");
              });

              ["dragleave", "dragend"].forEach((type) => {
                dropZoneElement.addEventListener(type, (e) => {
                  dropZoneElement.classList.remove("drop-zone--over");
                });
              });

              dropZoneElement.addEventListener("drop", (e) => {
                e.preventDefault();

                if (e.dataTransfer.files.length) {
                  inputElement.files = e.dataTransfer.files;
                  updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                }

                dropZoneElement.classList.remove("drop-zone--over");
              });
            });

            /**
             * Updates the thumbnail on a drop zone element.
             *
             * @param {HTMLElement} dropZoneElement
             * @param {File} file
             */
            function updateThumbnail(dropZoneElement, file) {
              let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

              // First time - remove the prompt
              if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                dropZoneElement.querySelector(".drop-zone__prompt").remove();
              }

              // First time - there is no thumbnail element, so lets create it
              if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("drop-zone__thumb");
                dropZoneElement.appendChild(thumbnailElement);
              }

              thumbnailElement.dataset.label = file.name;

              // Show thumbnail for image files
              if (file.type.startsWith("image/")) {
                const reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = () => {
                  thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                };
              } else {
                thumbnailElement.style.backgroundImage = null;
              }
            }

        </script>
    </body>
</html>