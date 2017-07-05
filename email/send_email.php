<?php

require 'PHPMailerAutoload.php';

$receipient ="asyouwish0550@gmail.com";
$subject = "Testing";
$message = "Tesitng";

$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com;';
$mail->SMTPAuth = true;
$mail->Username = 'kmadushanka40@gmail.com';
$mail->Password = 'Spider123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

echo "sc";

$mail->setFrom('kmadushanka40@gmail.com', 'Medi+Care');
$mail->addAddress($receipient);
$mail->isHTML(true);

$mail->Subject=null;
$mail->Body=null;

if($status==1) {
    $mail->Subject = 'Medi+Care User Account Password Reset';
    $mail->Body = 'Dear member,<br>Your new password is #u32957.';
} else if($status==2) {
    $mail->Subject = $subject;
    $mail->Body = $message;
}

if (!$mail->send()) {
    echo "s";
} else {
    echo 1;
}
