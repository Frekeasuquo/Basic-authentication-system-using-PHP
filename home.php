<?php
    session_start();

    $username = $_SESSION['username'];

    echo "<center><h2>#Access granted, welcome user zero one</h2></center>"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>