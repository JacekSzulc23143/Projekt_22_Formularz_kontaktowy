<?php

$name = $_POST["name"];
$from = $_POST["email"];
$subject = "Wiadomość z formularza";
$to = "jacekpa23143@gmail.com";
$message = $_POST["msg"];

$txt = "Imię " . $name . "\r\n" . "Email: " .$from . "\r\n" . "\r\n" . "Treść: " . $message;

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";

$mail_ststus = mail($to, $subject, $message, $headers);

if($mail_status) {
    header("Location: index.html?mail_status=sent");
} else {
    header("Location: index.html?mail_status=error");
}