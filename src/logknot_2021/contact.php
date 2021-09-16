<!doctype html>
<html lang="en">
    <?php include('head.php') ?>
    <body>
        <?php include('header.php') ?>

        <main>

            <section class="section_subbanner" style="background-image: url('https://t4.ftcdn.net/jpg/03/95/04/15/240_F_395041586_h21AxqD0dNjxUw3lKFiV5t7qMBJs6wfe.jpg');">
                <h1>お問い合わせ</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CONTACT</li>
                    </ol>
                </nav>
            </section>

            <section class="section_contact">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <h2 class="title_sub">CONTACT</h2>
                            <p class="subtitle mb-4">お問い合わせ</p>
                            <form action="" class="frm_contact">
                                <div class="form-group">
                                    <label for="">お名前　[必須]</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">貴社名（※法人様の場合）</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">メールアドレス [必須]</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">お問い合わせ内容　[必須]</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <p class="text-center info">弊社の個人情報に関する取り扱いについては <a href="#">プライバシーポリシー</a> をご一読ください。<br>
                                上記事項をご確認の上、ご同意いただける方は下の「同意する」をチェックしてください。</p>
                                <div class="custom-control custom-checkbox text-center">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">同意する</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btnSend">上記に同意して送信 <img src="images/svg/i_right_black.svg" alt="" class="img-fluid" width="25"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


           

            

            

            
            

            



        </main>

        <?php include('footer.php') ?>

        <?php include('js-footer.php') ?>
    </body>
</html>