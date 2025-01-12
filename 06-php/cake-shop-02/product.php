<?php

require 'connect.php';

// http://localhost/cake-shop-02/product.php?id=3

$id = $_GET['id'];

$sql= "SELECT * FROM products WHERE id = $id;";

$result = mysqli_query($conn, $sql);

$cakeDetails = mysqli_fetch_assoc($result);

print_r($cakeDetails);

$name = $cakeDetails['product_name'];
$desc = $cakeDetails['product_desc'];
$image = $cakeDetails['product_image'];
$price = $cakeDetails['product_price'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo $name; ?></h3>
    <p><?php echo $desc; ?></p>
    <p><?php echo $price; ?></p>
</body>
</html>