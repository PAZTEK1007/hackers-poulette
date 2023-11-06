<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/styles/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Support</title>
</head>
<body>
    

<form method="get" action="">
<div class="container">
    <h3>Contact Support</h3>
    <p>Please fill in this form to contact support.</p>
    <hr>
    <div class="name">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your Name" required>
    </div>
    <div class="lastName">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" placeholder="Enter your Last Name" required>
    </div>
    <div class="email">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your Email" required>
    </div>
    <div class="country">
        <label for="country">Country</label>
        <input type="text" name="country" placeholder="Enter your country" required>
    </div>
    <div class="subject">
        <label for="subject">Subject</label>
        <select id="subject">
            <option value="1">Technical</option>
            <option value="2">Sales</option>
            <option value="3">Other</option>
        </select>
    </div>
    <div class="message">
        <label for="message">Message</label>
        <textarea name="message" placeholder="Message" required></textarea>
    </div>
<input type="submit" name="submit" value="Submit">

</div>
</form>






</body>
</html>