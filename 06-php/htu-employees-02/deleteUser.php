<?php

require 'connect.php';

$id = $_GET['empid'];
$sql = "DELETE FROM employees WHERE id = $id;";

$result = mysqli_query($conn,$sql);

if($result) {
    header("Location: displayUsers.php");
} else {
    mysqli_error($conn);
}


?>