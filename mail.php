<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
   //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = '';
    $mail->SMTPAuth   = true;
    $mail->Username   = '';
    $mail->Password   = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->addCustomHeader('Content-Type', 'text/html;charset=utf-8');
    $mail->setFrom('from address', 'sender name');
    $mail->addAddress('to address');
    $mail->Subject = 'Test Mail';
    $mail->Body    = 'hello test';
    $mail->send();
 echo '1';
} catch (Exception $e) {
echo '0'; 
}
?>
