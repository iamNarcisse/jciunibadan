<?php

date_default_timezone_set('Etc/UTC');
require './PHPMailer/PHPMailerAutoload.php';
require './sensitive.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = USERNAME;
$mail->Password = PASSWORD;
$mail->setFrom('iammitchellcooper@gmail.com');
$mail->addReplyTo('narcyhandsome@yahoo.com');
$mail->addAddress('iammitchellcooper@gmail.com');
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = 'Testing sending mails Using NodeMailer';
$mail->AltBody = 'This is a plain-text message body';
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";

}