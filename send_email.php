<?php

//$tourId = $_POST['tourId'];

$from_name = "Employee Tracker";
$from_mail = "kasunm07@yahoo.com";
$replyto = "emptracker.com";
$mailto =  . "kmadushanka40@gmail.com";

$subject = "Test";

$message = "Hello";

//$path = "";
//$filename = "";

//$file = $path . $filename;
//$content = file_get_contents($file);
//$content = chunk_split(base64_encode($content));
//$uid = md5(uniqid(time()));
//$name = basename($file);

// header
$header = "From: " . $from_name . " <" . $from_mail . ">\r\n";
$header .= "Reply-To: " . $replyto . "\r\n";
$headers.= "cc: " . "Kasun Madushanka" . " <" . "kasunm07@yahoo.com" . ">" . "\r\n";
$header .= "MIME-Version: 1.0\r\n";
//$header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";

// message & attachment
$nmessage = "--" . $uid . "\r\n";
$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$nmessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$nmessage .= $message . "\r\n\r\n";
//$nmessage .= "--" . $uid . "\r\n";
//$nmessage .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"\r\n";
//$nmessage .= "Content-Transfer-Encoding: base64\r\n";
//$nmessage .= "Content-Disposition: attachment; filename=\"" . $filename . "\"\r\n\r\n";
//$nmessage .= $content . "\r\n\r\n";
$nmessage .= "--" . $uid . "--";

mail($mailto, $subject, $nmessage, $header);
?>
