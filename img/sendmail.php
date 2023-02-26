<?php
use PHPMailer\PHPMailer\PHPMailer;
Use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail ->CharSet = 'utf8mb4_general_ci';
$mail ->setLanguage('ru', 'phpmailer/language/');
$mail ->isHTML(true);

$mail ->setFrom('GLHFinfo@gl.hf', 'GL HF shop');

$mail->addAddress('code@fls.guru');

$mail->Subject = 'Добрового времени суток! Это магазин "GL HF"';

$body = '<h1>Спасибо за регистрацию!</h1>';

if(trim(!empty($_POST['login']))){
    $body.='<p><strong>Логин:</strong> '.$_POST['login'].'</p>';
}
if(trim(!empty($_POST['FIO']))){
    $body.='<p><strong>ФИО:</strong> '.$_POST['FIO'].'</p>';
}
if(trim(!empty($_POST['mail']))){
    $body.='<p><strong>E-mail:</strong> '.$_POST['mail'].'</p>';
}
if(trim(!empty($_POST['message']))){
    $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
}

if (!$mail->send()){
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>