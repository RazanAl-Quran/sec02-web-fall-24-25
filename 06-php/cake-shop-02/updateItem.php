<?php

require 'connect.php';

if (isset($_POST['updateOrder'])) {

    $id = $_POST["product_id"];
    $quantity = $_POST['product_quantity'];
    $sql = "UPDATE orders SET product_quantity=$quantity WHERE id=$id;";

    $result = mysqli_query($conn,$sql);
     if($result) {
        header("Location: cart.php");
     } else {
        mysqli_error($conn);
     }
}

?>