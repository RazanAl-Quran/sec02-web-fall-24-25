<?php

require 'connect.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav>
        <ul>

            <?php
            if (isset($_SESSION['cakeUser'])) {
                $loggedIn = $_SESSION['cakeUser'];
                echo " <li> <a href='cart.php'>My Cart</a></li>
                       <li>Hello $loggedIn, <a href='logout.php'>Log out</a> </li>
                     ";
            } else {
                echo "<li><a href='signin.php'>Signin</a></li>";
            }
            ?>
        </ul>
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>


            <?php

            $username = $_SESSION['cakeUser'];
            $sql = "SELECT * FROM orders WHERE username = '$username';";
            $result = mysqli_query($conn, $sql);

            $allorders = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $total = 0;
            foreach ($allorders as $userOrder) {
                $id = $userOrder['id'];
                $product_name = $userOrder['product_name'];
                $product_quantity = $userOrder['product_quantity'];
                $product_price = $userOrder['product_price'] * $product_quantity;
                $total += $product_price;

                echo "
                    <tr>
                        <td> $product_name</td>
                        <td> $product_price</td>
                        <td>
                                <form action='updateItem.php' method='post'>
                                    <input type='number'  name='product_quantity' value= '$product_quantity' >
                                    <input type='hidden' name='product_id' value= '$id'>
                                    <button type='submit' name='updateOrder' class='btn btn-primary'> Update</button>
                                </form>
                        </td>
                        <td>
                         <button class='btn btn-danger'><a class='text-light' href='deleteItem.php?id=$id'>Delete</a></button>
                        </td>
                    </tr>
                ";
            }

            ?>
        </tbody>
    </table>

    <?php

    echo "<p>Total: $total $</p>"

    ?>
</body>

</html>