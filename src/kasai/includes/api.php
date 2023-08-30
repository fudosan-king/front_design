<?php 
    if (isset($_GET['callback']) && $_GET['callback'] == 'api' && isset($_GET['name']) && $_GET['name'] == 'form' ){

        header('Content-type:application/json;charset=utf-8');

        $res = array();

        if(isset($_POST['recaptcha_token'])){

            try {

                $form_url = 'https://form.run/api/v1/r/1ou4vbjn8ghpo0jgf0bucazv';
                
                $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
                $recaptcha_secret = '6LdPxMoZAAAAAN29J1-9X40u8-D-0bhzRGNoXVA1';
                $recaptcha_response = $_POST['recaptcha_token'];

                $recaptcha_url .= '?secret='.$recaptcha_secret.'&response='.$recaptcha_response.'&remoteip='.$_SERVER['REMOTE_ADDR'];

                $recaptcha = file_get_contents($recaptcha_url);

                $_tmp = json_decode($recaptcha);

                $res['success'] = $_tmp->success;
                $res['challenge_ts'] = $_tmp->challenge_ts;
                $res['hostname'] = $_tmp->hostname;
                $res['form_url'] = $form_url;
                
            } catch (Exception $e) {
                $res['error'] = $e;    
            }
        }

        echo json_encode($res);
        exit;
    }
?>