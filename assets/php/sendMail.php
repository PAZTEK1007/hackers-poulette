<?php
function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


function requireField($fields) {
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            return false;
        }
    }
    return true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/sass/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/main.js"></script>
    <title>Contact Support</title>
</head>
<body>
<header>
    <nav>
        <ul class="navMenu">
            <li class="navItems"><a class="items" href="../../index.php">Home</a></li>
            <li class="navItems"><a class="items" href="../../index.php">Products</a></li>
            <li class="navItems"><img id="logo" src="../img/hackers-poulette-logo.png" alt="logo"></li>
            <li class="navItems"><a class="items" href="../../index.php">Contact Support</a></li>
            <li class="navItems"><a class="items" href="../../index.php">About</a></li>
        <ul>
    </nav>
</header>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";

$mail = new PHPMailer(true);

try {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $gender = isset($_POST['gender']);
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = isset($_POST['subject']);

    $mail ->isSMTP();
    $mail -> SMTPAuth = false;

    $mail -> Host = 'localhost';
    $mail -> Port = 1025;

    $mail -> Username = 'username';
    $mail -> Password = 'password';

    $mail -> setFrom($email, $name);
    $mail -> addAddress("support@hackerpoulette.be", "Support");

    $mail -> Subject = $subject;
    $mail -> Body = $message;

?>
    <div class="messageContainer">
<?php
    $mail -> send();
    echo '<p class="sucess">Your support ticket has been sent!</p>';
} catch (Exception $e) {
    echo '<p class="error">Your support ticket could not be sent. Mailer Error: {$mail->ErrorInfo}';
}

?>
    </div>
<footer>
    <div class="footer">
        <p>© Hackers Poulette Copyright 2023 - All rights reserved</p>
    </div>
</footer>
</body>
</html> 