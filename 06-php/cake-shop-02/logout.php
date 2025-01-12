<?php
session_start();

unset($_SESSION['cakeUser']);

session_destroy();

header("Location:products.php");
?>