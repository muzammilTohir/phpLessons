<?php
    declare(strict_types=1);
    include('user.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input.php" method="post">
        <p>Simple Calculator</p>
        <input type="number" name="num1" placeholder="First number:">
        <br>
        <select name="op">
            <option value="add">Addition</option>
            <option value="sub">Subtruction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <br>
        <input type="number" name="num2" placeholder="Second number:">
        <br>
        <button type="submit" name="submit">Calculator</button>
    </form>
</body>
</html>