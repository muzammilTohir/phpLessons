<?php
    include_once 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <div class="wrap">
    <h2>Sign up</h2>
    <form action="signup.php" method="post">
    <input type="text" name="first" placeholder="Firstname" required>
    <input type="text" name="last" placeholder="Lastname" required>
    <input type="text" name="email" placeholder="E-mail" required>
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <input type="submit" name="submit" value="Submit" required>
    </form>
    </div>
    
</body>
</html>