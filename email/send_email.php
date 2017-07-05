<?php

require 'PHPMailerAutoload.php';

$status = $this->input->post('status');
$receipient ="kmadushanka40@gmail.com";
$subject = "Testing";
$message = "Tesitng";

$mail = new PHPMailer;
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com;';
$mail->SMTPAuth = true;
$mail->Username = 'asyouwish055@gmail.com';
$mail->Password = 'asyouwish';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('asyouwish055@gmail.com', 'Medi+Care');
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
    echo 0;
} else {
    echo 1;
}
