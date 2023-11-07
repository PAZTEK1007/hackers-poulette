<?php

require('./assets/php/function.php');
require('./assets/php/sendMail.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/styles/sass/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h3>Contact Support</h3>
        <p>Please fill in this form to contact support.</p>
    </div>
    <div class="name">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your Name" required>
        <?php
            $name = isset($_GET['name']) ? $_GET['name'] : '';
            requireField($name);
        ?>
    </div>
    <div class="lastName">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" placeholder="Enter your Last Name" required>
        <?php
            $lastName = isset($_GET["lastName"]) ? $_GET["lastName"] : '';
            requireField($lastName); 
        ?>
    </div>
    <div class="gender">
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="M">
        <label for="M">M</label>
        <input type="radio" name="gender" value="F">
        <label for="F">F</label>
        <?php 
            $gender = isset($_GET['gender']) ? $_GET(['gender']) : '';
            requireField($gender); 
        ?>

    </div>
    <div class="email">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your Email" required>
        <?php
            $email = isset($_GET['email']) ? $_GET['email'] : '';
            validateEmail($email);
            requireField($email);
        ?>
    </div>
    <div class="country">
        <label for="country">Country</label>
        <input type="text" name="country" placeholder="Enter your country" required>
        <?php
            $country = isset($_GET['country']) ? $_GET['country'] : '';
            requireField($country); 
        ?>
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
        <?php
            $message = isset($_GET['message']) ? $_GET['message'] : '';
            requireField($message);
        ?>
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