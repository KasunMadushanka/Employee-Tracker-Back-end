<?php

require 'PHPMailerAutoload.php';

$receipient ="kmadushanka40@gmail.com";

$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com;';
$mail->SMTPAuth = true;
$mail->Username = 'asyouwish077@gmail.com';
$mail->Password = 'asyouwish';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;



$mail->setFrom('asyouwish077@gmail.com', 'Medi+Care');
$mail->addAddress($receipient);
$mail->isHTML(true);

$mail->Subject=null;
$mail->Body=null;

    $mail->Subject = 'Medi+Care User Account Password Reset';
    $mail->Body = 'Dear member,<br>Your new password is #u32957.';


if (!$mail->send()) {
    echo "s";
} else {
    echo 1;
}
echo "scx";
