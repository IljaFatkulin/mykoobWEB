<?php
    include('php/nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="login_block">
        <input class="login" type="text" placeholder="Username">
        <input class="password" type="text" placeholder="Password">
        <button class="continue" onclick="window.location.href='timetable.php'">Continue</button>
        <p>Already have an account? <a href="login.php">Log in</a></p>
    </div>
</body>
</html> 