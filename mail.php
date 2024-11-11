<?php

$name = $_POST["name"];
$from = $_POST["email"];
$subject = "/PHP E-MAIL SENDER/ - Wiadomość z formularza";
$to = "jacekpa23143@gmail.com";
$message = $_POST["msg"];

$txt = "Imię: " . $name . "\r\n" . "Email: " .$from . "\r\n" . "\r\n" . "Treść: " . $message;

$headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
$headers .= 'Content-Transfer-Encoding: base64' . "\r\n";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";

$mail_status = mail($to, $subject, $txt, $headers);

if($mail_status) {
    header("Location: /form-contact/index.html?mail_status=sent");
} else {
    header("Location: /form-contact/index.html?mail_status=error");
}

?>