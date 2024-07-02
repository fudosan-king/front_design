<!doctype html>
<html class="no-js" lang="jp">

<head>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page">
        <form action="" class="frm_admin">
            <header class="text-start">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="container_custom">
                                <input type="text" class="form-control" placeholder="メインタイトル">
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main_content template2">

                                <div class="main_right admin new_templates">
                                    <article class="standard_article">
                                        <h2>
                                            <span></span>
                                            <input type="text" class="form-control" placeholder="見出し">
                                        </h2>

                                        <div class="standard_post_main_img">
                                            <h3><img src="assets/images/i_collection.svg" alt="collection icon" width="31"> メインイメージ</h3>
                                            <ul>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/01.jpg" alt="01"></a>
                                                    <button type="button" class="btn btnClose"></button>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/02.jpg" alt="02"></a>
                                                    <button type="button" class="btn btnClose"></button>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/03.jpg" alt="03"></a>
                                                    <button type="button" class="btn btnClose"></button>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/04.jpg" alt="04"></a>
                                                    <button type="button" class="btn btnClose"></button>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/05.jpg" alt="05"></a>
                                                    <button type="button" class="btn btnClose"></button>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>ファイルを選択</span>
                                                        </p>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="box_reverse">
                                            <textarea class="form-control" rows="" cols="" placeholder="例）製品・サービスなどについての説明。"></textarea>
                                            <div class="text_link">
                                                <input class="form-control input_text" type="text" name="" value="" placeholder="リンクに関するテキスト">
                                                <div class="box_link">
                                                    <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                                                    <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                                                    <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                                                    <button type="button" class="btn btnClose"></button>
                                                </div>
                                            </div>

                                            <div id="link_container" class="link_container"></div>

                                            <div class="button_size">
                                                <span>ボタンサイズ</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">普通　◯大</label>
                                                </div>
                                            </div>

                                            <button id="btn_addlink2" class="btn btn_addlink btn_addlink_theme" type="button">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="plus-circle 1" clip-path="url(#clip0_452_22745)">
                                                        <path id="Vector" d="M9.99984 18.3337C14.6022 18.3337 18.3332 14.6027 18.3332 10.0003C18.3332 5.39795 14.6022 1.66699 9.99984 1.66699C5.39746 1.66699 1.6665 5.39795 1.6665 10.0003C1.6665 14.6027 5.39746 18.3337 9.99984 18.3337Z" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_2" d="M10 6.66699V13.3337" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_3" d="M6.6665 10H13.3332" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_452_22745">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                リンクを追加する
                                            </button>

                                            <div class="text_link">
                                                <div class="box_link">
                                                    <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                                                    <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                                                    <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                                                    <button type="button" class="btn btnClose"></button>
                                                </div>
                                            </div>

                                            <div id="link_container2" class="link_container"></div>

                                            <div class="button_size">
                                                <span>ボタンサイズ</span>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">普通　◯大</label>
                                                </div>
                                            </div>

                                            <button id="btn_addlink3" class="btn btn_addlink btn_addlink_theme" type="button">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="plus-circle 1" clip-path="url(#clip0_452_22745)">
                                                        <path id="Vector" d="M9.99984 18.3337C14.6022 18.3337 18.3332 14.6027 18.3332 10.0003C18.3332 5.39795 14.6022 1.66699 9.99984 1.66699C5.39746 1.66699 1.6665 5.39795 1.6665 10.0003C1.6665 14.6027 5.39746 18.3337 9.99984 18.3337Z" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_2" d="M10 6.66699V13.3337" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_3" d="M6.6665 10H13.3332" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_452_22745">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                リンクを追加する
                                            </button>


                                        </div>

                                        <div class="box_material_content three_columns">
                                            <ul>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                        <button type="button" class="btn btnClose"></button>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                        <button type="button" class="btn btnClose"></button>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                        <button type="button" class="btn btnClose"></button>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                        <button type="button" class="btn btnClose"></button>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                                <li>
                                                    <label class="box_uploads">
                                                        <input type="file" class="upload_default">
                                                        <p class="upload_custom">
                                                            <i>
                                                                <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                            </i>
                                                            <span>資料</span>
                                                        </p>
                                                        <button type="button" class="btn btnClose"></button>
                                                    </label>
                                                    <p class="or">or</p>
                                                    <label class="label_url" for="動画のURL">動画のURL</label>
                                                    <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                    <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                </li>
                                            </ul>
                                            <button class="btn btn_addlink btn_addlink_theme" type="">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="plus-circle 1" clip-path="url(#clip0_452_22745)">
                                                        <path id="Vector" d="M9.99984 18.3337C14.6022 18.3337 18.3332 14.6027 18.3332 10.0003C18.3332 5.39795 14.6022 1.66699 9.99984 1.66699C5.39746 1.66699 1.6665 5.39795 1.6665 10.0003C1.6665 14.6027 5.39746 18.3337 9.99984 18.3337Z" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_2" d="M10 6.66699V13.3337" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_3" d="M6.6665 10H13.3332" stroke="#0168B7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_452_22745">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                動画・資料を追加する
                                            </button>
                                            <hr>
                                            <button class="btn btn_addlink active" type=""><img src="assets/images/i_plus_circle_white.svg" alt="plus circle" width="20"> ブロックを追加する</button>
                                        </div>

                                    </article>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

    <?php require 'footer.php'; ?>
    <?php require 'js-footer.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btn_addlink2").addEventListener("click", function() {
                const linkContainer = document.getElementById("link_container");

                if (linkContainer) {
                    const newLink = document.createElement("div");
                    newLink.classList.add("text_link");

                    newLink.innerHTML = `
                                <input class="form-control input_text" type="text" name="" value="" placeholder="リンクに関するテキスト">
                                <div class="box_link">
                                    <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                                    <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                                    <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                                    <button type="button" class="btn btnClose"></button>
                                </div>
                            `;

                    linkContainer.appendChild(newLink);

                    // Thêm sự kiện cho button btnClose trong phần tử mới tạo
                    newLink.querySelector(".btn.btnClose").addEventListener("click", function() {
                        newLink.remove();
                    });
                }
            });

            // Thêm sự kiện cho button btnClose ban đầu nếu có
            document.querySelectorAll(".btn.btnClose").forEach(function(button) {
                button.addEventListener("click", function() {
                    button.parentElement.remove();
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btn_addlink3").addEventListener("click", function() {
                const linkContainer = document.getElementById("link_container2");

                if (linkContainer) {
                    const newLink = document.createElement("div");
                    newLink.classList.add("text_link");

                    newLink.innerHTML = `
                                <div class="box_link">
                                    <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                                    <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                                    <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                                    <button type="button" class="btn btnClose"></button>
                                </div>
                            `;

                    linkContainer.appendChild(newLink);

                    // Thêm sự kiện cho button btnClose trong phần tử mới tạo
                    newLink.querySelector(".btn.btnClose").addEventListener("click", function() {
                        newLink.remove();
                    });
                }
            });

            // Thêm sự kiện cho button btnClose ban đầu nếu có
            document.querySelectorAll(".btn.btnClose").forEach(function(button) {
                button.addEventListener("click", function() {
                    button.parentElement.remove();
                });
            });
        });
    </script>
</body>

</html>