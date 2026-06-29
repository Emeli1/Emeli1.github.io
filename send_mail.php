<?php

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require 'src/Exception.php';
 require 'src/PHPMailer.php';
 require 'src/SMTP.php';


 // Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки  почты

 $mail->Host = 'ssl://smtp.gmail.com';
 $mail->Port = 465;
 $mail->Username = 'irina.m.emelianova@gmail.com';
 $mail->Password = 'bzeveyfaokpyfsvj';

 // Переменные, которые отправляет пользователь

 $name = $_POST["name"];
 $phone = $_POST["phone"];

 // Формирование самого письма

 $body = $name . ' ' . $phone;
 $theme = "[Заявка на замер]";

 // Получатель письма

 $mail->addAdress("irina.m.emelianova@gmail.com");

 $mail->Subject = $theme;
 $mail->Body = $body;

 $mail->send();



?>
