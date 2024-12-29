<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HEllo 
        <?php
        echo $_SESSION['username2'];
        ?>
    </h1>
    <a href="data.php"> Data page </a>
    <a href="destroy.php"> Destroy session </a>
</body>
</html>