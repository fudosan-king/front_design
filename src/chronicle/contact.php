<!doctype html>
<html>
<head>
    <meta property="og:title" content="WEBからのお問い合わせ｜クロニクルリフォーム">
    <meta property="og:description" content="クロニクルリフォームへのWEBからのお問い合わせページです。ホーチミンでオフィスの内装工事ならお任せ下さい。内装空間デザイン、設計、施工をワンストップで、働く方に喜ばれる空間をご提供しております。">
    <meta name="description" content="クロニクルリフォームへのWEBからのお問い合わせページです。ホーチミンでオフィスの内装工事ならお任せ下さい。内装空間デザイン、設計、施工をワンストップで、働く方に喜ばれる空間をご提供しております。">
    <meta name="keywords" content="ベトナム,ホーチミン,クロニクルリフォーム,内装工事,進出">
    <title>WEBからのお問い合わせ｜クロニクルリフォーム</title>
    <?php require 'head.php'; ?>
</head>

<body>
    <div id="page" class="animsition">
        <?php require 'header.php';?>
        <main id="content">
            <section class="banner_sub">
                <div class="swiper-container">
                    <div class="parallax-bg" style="background-image:url('images/shutterstock_606887375.jpg')" data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="title" data-swiper-parallax="-300">WEBからの お問い合わせ</div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['email'])) {

  // EDIT THE 2 LINES BELOW AS REQUIRED
  $email_to = "tam@fudosan-king.jp";
  $name_to = "Truong Tam";
  $email_subject = "クロニクルリフォームWEBお問合わせ";

  function died($error) {
    // your error code can go here
    echo '<section class="main_content" style="color: red;"><div class="container"><div class="row content_underpages"><div class="col-lg-6 col-lg-offset-3">';
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    echo '</div></div></div></section>';
    // die();
  }

  // validation expected data exists
  if(!isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['address']) ||
    !isset($_POST['comments'])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
  }

  $name = $_POST['name']; // required
  $email = $_POST['email']; // required
  $phone = $_POST['phone']; // required
  $address = $_POST['address']; // not required
  $comments = $_POST['comments']; // required

  $error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

  $string_exp = "/^[A-Za-z .'-]+$/";
  $number_exp = "/^[0-9 .'-()]+$/";

  if(!preg_match($number_exp,$phone)) {
    $error_message .= 'The Number Phone is wrong<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  } else {
    $email_message  = "お名前: ".clean_string($name)."\n<br />";
    $email_message .= "電話番号: ".clean_string($phone)."\n<br />";
    $email_message .= "メールアドレス: ".clean_string($email)."\n<br />";
    $email_message .= "ご住所: ".clean_string($address)."\n<br />";
    $email_message .= "お問い合わせ: ".clean_string($comments)."\n<br />";

    $mail = new PHPMailer(true);
    echo '<section class="main_content" style="color: red;"><div class="container"><div class="row content_underpages"><div class="col-lg-6 col-lg-offset-3">';
    try {
      echo '<div style="display: none;">';
      //Server settings
      $mail->CharSet = 'UTF-8';
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'propolifevn@gmail.com';            // SMTP username
      $mail->Password = 'qqawtigjgfesgien';                 // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to
      $mail->SMTPAuth = true;

      //Recipients
      $mail->setFrom($email, $name);
      $mail->addAddress($email_to, $name_to);     // Add a recipient
      $mail->addAddress('info@aodaihousing.com');
      $mail->addAddress('info@propolifevietnam.com');
      // $mail->addReplyTo('info@example.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $email_subject;
      $mail->Body    = $email_message;

      $mail->send();
      echo '</div>';
      echo '<h3 style="color: #009AAC;">The mail has been sent successfully.</h3>';
      echo '<script type="text/javascript">dataLayer.push({"event": "inquiry-complete"});</script>';

    } catch (Exception $e) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    echo '</div></div></div></section>';
  }
}else{
?>
                <section class="main_content">

                    <div class="container">
                        <div class="row content_underpages">
                            <div class="col-lg-6 col-lg-offset-3">
                                <h3>WEBからの お問い合わせ</h3>
                                <div class="frm_contact">
                                    <form action="/contact.php" method="POST" role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" required="required" placeholder="お名前">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" required="required" placeholder="メールアドレス">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" required="required" placeholder="電話番号">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="address" id="address" class="form-control" rows="3" required="required" placeholder="ご住所"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" class="form-control" rows="5" required="required" placeholder="お問い合わせ"></textarea>
                                        </div>
                                        <button type="submit" class="btn btnSend">送信する</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="section_contact">
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <p class="text-center">ベトナム国内から <a href="tel:028-3824-1418">028-3824-1418</a>
                                        <br> 日本海外から <a href="tel:+84-(0)28-3824-1418（日本語)">+84-(0)28-3824-1418（日本語)</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
}
?>
        </main>
        <?php require 'footer.php';?>
    </div>
    <?php require 'js_footer.php';?>
</body>

</html>