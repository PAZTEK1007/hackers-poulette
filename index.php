<?php

$message = isset($_GET['message']) ? $_GET['message'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
$lastName = isset($_GET["lastName"]) ? $_GET["lastName"] : '';
$gender = isset($_GET['gender']) ? $_GET(['gender']) : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$country = isset($_GET['country']) ? $_GET['country'] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/styles/sass/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/main.js"></script>
    <title>Contact Support</title>
</head>
<body>

<header>
    <nav>
        <ul class="navMenu">
            <li class="navItems"><a class="items" href="index.php">Home</a></li>
            <li class="navItems"><a class="items" href="index.php">Products</a></li>
            <li class="navItems"><img id="logo" src="./assets/img/hackers-poulette-logo.png" alt="logo"></li>
            <li class="navItems"><a class="items" href="index.php">Contact Support</a></li>
            <li class="navItems"><a class="items" href="index.php">About</a></li>
        <ul>
    </nav>
</header>

<form method="post" action="./assets/php/sendMail.php">
<div class="container">
    <div class="title">
        <h3 id="title">Contact Support</h3>
        <p id="subtitle">Please fill in this form to contact support.</p>
    </div>
    <div class="name">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Enter your Name" required>
    </div>
    <div class="lastName">
        <label for="lastName">Last Name</label>
        <input id="lastName" type="text" name="lastName" placeholder="Enter your Last Name" required>
    </div>
    <div class="gender">
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="M">
        <label for="M">M</label>
        <input type="radio" name="gender" value="F">
        <label for="F">F</label>
    </div>
    <div class="email">
        <label for="email">Email</label>
        <input id="mail" type="email" name="email" placeholder="Enter your Email" required>
    </div>
    <div class="country">
        <label for="country">Country</label>
        <input id="country" type="text" name="country" placeholder="Enter your country" required>
    </div>
    <div class="subject">
        <label for="subject">Subject</label>
        <select id="subject">
            <option value="1">Technical</option>
            <option value="2">Sales</option>
            <option value="3" selected>Other</option>
        </select>
    </div>
    <div class="message">
        <textarea name="message" placeholder="Message" required></textarea>
    </div>
    <input id="submit" type="submit" name="submit" value="SEND">
</div>
</form>

<footer>
    <div class="footer">
        <p>© Hackers Poulette Copyright 2023 - All rights reserved</p>
    </div>
</footer>




</body>
</html>