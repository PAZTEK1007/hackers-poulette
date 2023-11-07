<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

require "assets/vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail -> SMTPDebug = SMTP::DEBUG_SERVER;

$mail ->isSMTP();
$mail -> SMTPAuth = true;

$mail -> Host = 'smtp.example.com';
$mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail -> Port = 587;

$mail -> Username = 'username';
$mail -> Password = 'password';

$mail -> setFrom($email, $name);
$mail -> addAddress("robert@example.com", "Robert");

$mail -> Subject = $subject;
$mail -> Body = $message;

$mail -> send();

?>