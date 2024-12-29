<?php
print_r($_POST);
$username = $_POST['name'];
$id = $_POST['id'];

// setcookie("username4",$username, time() + (86400 * 30));

setcookie("username",$username,time() +(86400 * 30)); // Cookie lasts 30 days
setcookie("id",$id, time() + (86400 * 30));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<a href="viewCookie.php"> View cookies  </a>

<h1>Hello
    <?php echo $username;
    ?>
</h1>

</body>

</html>