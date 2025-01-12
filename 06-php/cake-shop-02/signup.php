<?php

require 'connect.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password');";

    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location: signin.php");
    } else {
        mysqli_error($conn);
    }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <div class="reg-container">
            <h2>Sign up</h2>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <button type="submit" name="register">Register </button>

            <p>Already have an account? <a class="reg-link" href="signin.php"> Login Here </a></p>
        </div>
    </form>
</body>

</html>