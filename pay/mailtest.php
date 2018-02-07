<?php

$email = "harithsa@outlook.com";
$to = $email;
$subject = 'Developer Labs Registration Confirmation';
$from = "IM Developer Labs";
$reply = "devlabs@inspiredmemories.in";

$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($reply) . "\r\n";
$headers .= "CC: office@inspiredmemories.in.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<h1>Hello, World!</h1>';
$message .= '</body></html>';

mail($to, $subject, $message, $headers);

?>