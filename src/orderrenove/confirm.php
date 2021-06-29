<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header2.php') ?>

        <main>
            <div class="box_template">
                <section class="p-0">
                    <div class="box_top mb-0">
                        <div class="container">
                            <h2 class="title mb-3">確認</h2>
                        </div>
                    </div>
                </section>

                <section class="section_contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                
                                <form class="frm_contact" action="#" method="post">
                                    <!-- confirm -->
                                    <div class="box_confirm">
                                        <div class="frm_general_content frm_confirm mt-3" style="">
                                           <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                     <td width="50%">
                                                        <label>第1希望日時</label>
                                                     </td>
                                                     <td class="confirm-text">
                                                         <span id="date">Lorem, ipsum dolor.</span> <span id="time"></span>
                                                     </td>
                                                  </tr>

                                                  <tr>
                                                     <td>
                                                        <label>お名前</label>
                                                     </td>
                                                     <td id="full_name" class="confirm-text"><span>Lorem, ipsum dolor.</span></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>メールアドレス</label>
                                                     </td>
                                                     <td id="email" class="confirm-text"><span>Lorem, ipsum dolor.</span></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>電話番号</label>
                                                     </td>
                                                     <td id="phone-number" class="confirm-text"><span>Lorem, ipsum dolor.</span></td>
                                                  </tr>
                                                  <tr>
                                                     <td>
                                                        <label>気になるご質問</label>
                                                     </td>
                                                     <td id="inquiry_content" class="confirm-text"><span>Lorem, ipsum dolor.</span></td>
                                                  </tr>
                                               </tbody>
                                           </table>

                                           <div class="box_content_footer mt-4">
                                               <div class="form-group text-center">
                                                   <div class="row">
                                                       <div class="col-12 col-lg-6">
                                                           <a href="contact.php" class="btn btn_back"><img src="images/svg/i_left_white.svg" alt="" class="img-fluid" width="10"> 戻る</a>
                                                       </div>
                                                       <div class="col-12 col-lg-6">
                                                           <a href="#modal_register" class="btn btn_send" data-toggle="modal">送信する <img src="images/svg/i_right_white.svg" alt="" class="img-fluid" width="10"></a>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="modal fade modal_register" id="modal_register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">いつもカウカモをご覧いただき<br>
                                                ありがとうございます。<br>
                                                お申し込みには「会員登録」が必要です。</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul>
                                                    <li>
                                                        <a class="btn" href="#"><img src="images/svg/i_fb.svg" alt="" class="img-fluid" width="24">Facebookではじめる</a>
                                                    </li>
                                                    <li><a class="btn" href="#"><img src="images/svg/i_google.svg" alt="" class="img-fluid" width="24"> Googleではじめる</a></li>
                                                </ul>
                                                <p class="termofuse mt-3"><a href="#">利用規約</a>・ <a href="#">プライバシーポリシー</a> に同意の上、<br>会員登録を行ってください。</p>
                                                <p class="mb-0">または</p>
                                                <p class="mb-0"><a href="#" class="btn btn-lg btn_register">メールアドレスで登録</a></p>
                                            </div>
                                            <div class="modal-footer">
                                                <p class="text-center"><a href="#">すでに会員の方はログイン</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>