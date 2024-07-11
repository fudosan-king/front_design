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
                                            <input type="text" class="form-control" placeholder="サブタイトル">
                                        </h2>

                                        <div class="standard_post_main_img edit">
                                            <!-- <h3><img src="assets/images/i_collection.svg" alt="collection icon" width="31"> メインイメージ</h3> -->
                                            <ul>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/01.jpg" alt="01"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/02.jpg" alt="02"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/03.jpg" alt="03"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/04.jpg" alt="04"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="assets/images/uploads/05.jpg" alt="05"></a>
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
                                            <textarea class="form-control" rows="" cols="" placeholder="例）製品・サービスなどについての説明。"></textarea>
                                        </div>


                                        <div class="box_reverse">
                                            <div id="group_zone_demo" class="list-group">
                                                <div class="list-group-item">
                                                    <div id="box_text_link_item" class="box_text_link_item list-group nested-sortable">
                                                        <div class="text_link">
                                                            <input class="form-control input_text" type="text" name="" value="" placeholder="リンクに関するテキスト">
                                                            <div class="box_link">
                                                                <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                                                                <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                                                                <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                                                                <button type="button" class="btn btnClose" onclick="removeTextLink(this)"></button>
                                                            </div>
                                                        </div>

                                                        <div id="box_text_link_item_footer" class="box_text_link_item_footer">
                                                            <div id="button_size" class="button_size">
                                                                <span>リンクタイプ</span>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="link_type" id="text_button" checked>
                                                                    <label class="form-check-label" for="text_button">テキスト＋ボタン</label>
                                                                </div>
                                                                <div class="form-check ms-2">
                                                                    <input class="form-check-input" type="radio" name="link_type" id="button_only">
                                                                    <label class="form-check-label" for="button_only">ボタン(大)のみ</label>
                                                                </div>
                                                            </div>

                                                            <button id="btn_addlink2" class="btn btn_addlink btn_addlink_theme mb-0" type="button">
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
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                        <div class="box_material_content three_columns text-center mt-3">
                                            <div class="list-group-item">
                                                <ul id="link_list" class="list-group">
                                                    <li>
                                                        <label class="box_uploads">
                                                            <input type="file" class="upload_default">
                                                            <p class="upload_custom">
                                                                <i>
                                                                    <img src="assets/images/i_uploads.svg" alt="uploads cloud" width="24">
                                                                </i>
                                                                <span>資料</span>
                                                            </p>
                                                        </label>
                                                        <p class="or">or</p>
                                                        <label class="label_url" for="動画のURL">動画のURL</label>
                                                        <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                        <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                        <button id="btnClose" type="button" class="btn btnClose"></button>
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
                                                        </label>
                                                        <p class="or">or</p>
                                                        <label class="label_url" for="動画のURL">動画のURL</label>
                                                        <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                        <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                        <button id="btnClose" type="button" class="btn btnClose"></button>
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
                                                        </label>
                                                        <p class="or">or</p>
                                                        <label class="label_url" for="動画のURL">動画のURL</label>
                                                        <input class="form-control" type="" name="" value="例) https://www." placeholder="例) https://www.">
                                                        <textarea class="form-control" rows="" cols="" placeholder="動画・資料の説明"></textarea>
                                                        <button id="btnClose" type="button" class="btn btnClose"></button>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-center">
                                            <button id="btn_addlink4" class="btn btn_addlink btn_addlink_theme" type="button">
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
                                        </div>

                                        <div class="box_inquiry">
                                            <a href="#" class="btn btn_inquiry">お問い合わせ</a>
                                            <div class="box_indicate">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="">
                                                    <label class="form-check-label" for="inlineRadio1">表示する</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">表示しない</label>
                                                </div>
                                            </div>
                                            <div class="box_indicate_product">
                                                <label for="">このセクションのお問い合わせ件名</label>
                                                <input type="text" name="" value="" class="form-control">
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="d-flex flex-center">
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
        function addTextLink() {
            const container = document.getElementById('box_text_link_item');
            const newTextLink = document.createElement('div');
            newTextLink.className = 'text_link';
            newTextLink.innerHTML = `
                <input class="form-control input_text" type="text" name="" value="" placeholder="リンクに関するテキスト">
                <div class="box_link">
                    <a href="#"><img src="assets/images/i_externallink.svg" alt="external link" width="20"></a>
                    <input class="form-control" type="text" name="" value="" placeholder="例) https://www.">
                    <input class="form-control" type="text" name="" value="" placeholder="ボタンラベル">
                    <button type="button" class="btn btnClose" onclick="removeTextLink(this)"></button>
                </div>
            `;
            container.insertBefore(newTextLink, document.getElementById('box_text_link_item_footer'));

            updateFooterVisibility();
            updateTextLinkVisibility();
        }

        function removeTextLink(button) {
            const textLink = button.closest('.text_link');
            textLink.parentNode.removeChild(textLink);
            updateFooterVisibility();
        }

        function updateFooterVisibility() {
            const textLinks = document.querySelectorAll('.box_text_link_item .text_link');
            const footer = document.getElementById('box_text_link_item_footer');

            if (textLinks.length >= 3) {
                footer.style.display = 'none';
            } else {
                footer.style.display = 'block';
            }
        }

        function updateTextLinkVisibility() {
            const isTextButton = document.getElementById('text_button').checked;
            const textInputs = document.querySelectorAll('.box_text_link_item .text_link .input_text');

            textInputs.forEach(input => {
                if (isTextButton) {
                    input.style.display = 'none';
                } else {
                    input.style.display = 'block';
                }
            });
        }

        // Kiểm tra số lượng box "text_link" khi trang được tải lại
        document.addEventListener('DOMContentLoaded', function() {
            updateFooterVisibility();
            updateTextLinkVisibility();
        });

        document.getElementById('btn_addlink2').addEventListener('click', addTextLink);
        document.getElementById('text_button').addEventListener('change', updateTextLinkVisibility);
        document.getElementById('button_only').addEventListener('change', updateTextLinkVisibility);

        //////////////////////////////////////////////////////////////////////////////////////////

        document.addEventListener("DOMContentLoaded", function() {
            const btnAddLink4 = document.getElementById("btn_addlink4");

            btnAddLink4.addEventListener("click", function() {
                const ul = document.getElementById("link_list");
                const newLi = document.createElement("li");

                newLi.innerHTML = `
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
        `;

                ul.appendChild(newLi);

                // Thêm sự kiện click cho button btnClose mới tạo
                newLi.querySelector(".btn.btnClose").addEventListener("click", function() {
                    newLi.remove();
                    checkLiCount();
                });

                checkLiCount();
            });

            // Thêm sự kiện click cho các button btnClose hiện có
            document.querySelectorAll(".btn.btnClose").forEach(function(button) {
                button.addEventListener("click", function() {
                    button.closest("li").remove();
                    checkLiCount();
                });
            });

            function checkLiCount() {
                const ul = document.getElementById("link_list");
                const liCount = ul.querySelectorAll("li").length;

                if (liCount >= 10) {
                    btnAddLink4.style.display = "none";
                } else {
                    btnAddLink4.style.display = "inline-block";
                }
            }

            checkLiCount();
        });

        //////////////////////////////////////////////////////////////////////////////////////////

        document.addEventListener("DOMContentLoaded", function() {
            const radio1 = document.getElementById("inlineRadio1");
            const radio2 = document.getElementById("inlineRadio2");
            const boxIndicateProduct = document.querySelector(".box_indicate_product");

            function toggleBox() {
                if (radio1.checked) {
                    boxIndicateProduct.classList.add("show");
                } else {
                    boxIndicateProduct.classList.remove("show");
                }
            }

            radio1.addEventListener("change", toggleBox);
            radio2.addEventListener("change", toggleBox);

            // Gọi hàm toggleBox() để kiểm tra trạng thái ban đầu
            toggleBox();
        });

        // Lấy tất cả các nút btnClose
        const closeButtons = document.querySelectorAll("#btnClose");

        closeButtons.forEach(button => {
            button.addEventListener("click", function() {
                // Tìm phần tử li chứa nút này và xoá nó
                const li = this.closest("li");
                if (li) {
                    li.remove();
                }
            });
        });
        //////////////////////////////////////////////////////////////////////////////////////////

        new Sortable(document.getElementById('link_list'), {
            group: {
                name: 'shared',
                pull: false,
                put: false
            },
            animation: 150
        });
    </script>
</body>

</html>