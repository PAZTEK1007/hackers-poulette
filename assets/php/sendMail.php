<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";

$mail = new PHPMailer(true);

try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mail -> SMTPDebug = SMTP::DEBUG_SERVER;

    $mail ->isSMTP();
    $mail -> SMTPAuth = false;

    $mail -> Host = 'localhost';
    $mail -> Port = 1025;

    $mail -> Username = 'username';
    $mail -> Password = 'password';

    $mail -> setFrom($email, $name);
    $mail -> addAddress("mathbarbier07@gmail.com", "Robert");

    $mail -> Subject = $subject;
    $mail -> Body = $message;

    $mail -> send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>