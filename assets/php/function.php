<?php

function validateEmail($email) {
    $errorMessage = "Please enter a valid email address.";
    $successMessage = "Your ticket as been sent to the support.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo `<p class="errorMessage">$errorMessage</p>`;
    }
}

function requireField($input) {
    $errorMessage = "Please complete all fields of the form.";
    $successMessage = "Your ticket as been sent to the support.";
    $message = "";

    if (empty($input)) {
        echo `<p class="errorMessage">$errorMessage</p>`;
    } else {
        echo `<p class="successMessage">$successMessage</p>`;
    }
}

?>