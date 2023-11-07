<?php

if(isset($_GET['submit'])) {
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $lastName = isset($_GET["lastName"]) ? $_GET["lastName"] : '';

    $gender = isset($_GET['gender']) ? $_GET(['gender']) : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    $country = isset($_GET['country']) ? $_GET['country'] : '';
    $subject = isset($_GET['subject']) ? $_GET['subject'] : '3';
    $message = isset($_GET['message']) ? $_GET['message'] : '';

}
?>