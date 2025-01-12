<?php
require 'connect.php';

session_start();

if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['cakeUser'])) {

        $name = $_POST['product_name'];
        $image = $_POST['product_image'];
        $price = $_POST['product_price'];
        $quantity = $_POST['product_quantity'];
        $username = $_SESSION['cakeUser'];

        $sql = "INSERT INTO `orders`(`product_name`, `product_price`, `product_image`, `product_quantity`, `username`) VALUES ('$name',$price,'$image',$quantity,'$username'); ";

        $result = mysqli_query($conn,$sql);


    } else {
        echo "
        <script>alert('please sign in first')</script>
        ";

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <h2>Products</h2>

    <nav>
        <ul>
            <?php
            if (isset($_SESSION['cakeUser'])) {
                $username = $_SESSION['cakeUser'];
                echo "
                <li>Hello $username- <a href='logout.php'>Sign out</a></li>
                <li><a href='cart.php'>My Cart</a></li>
                ";
            } else {
                echo "
                <li><a href='signin.php'>Signin</a></li>
                ";
            }


            ?>
        </ul>
    </nav>

    <div class="container">
        <div class="row">

            <?php

            $sql = "SELECT * FROM products;";

            $result = mysqli_query($conn, $sql);

            $allProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($allProducts as $product) {
                // print_r($product);
                $id = $product['id'];
                $product_name = $product['product_name'];
                $product_desc = $product['product_desc'];
                $product_image = $product['product_image'];
                $product_price = $product['product_price'];

                echo '
                    <div class="card col-md-4 my-5 mx-auto" style="width: 18rem;">
                        <img src="' . $product_image . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $product_name . '</h5>
                            <p class="card-text">' . $product_desc . '</p>
                            <p class="card-text"> price: ' . $product_price . ' JD</p>

                        </div>

                        <form method="post">
                            <input type="hidden" name="product_name" value= ' . $product_name . '>
                            <input type="hidden" name="product_image" value= ' . $product_image . '>
                            <input type="hidden" name="product_price" value= ' . $product_price . '>
                            <input type="number"  name="product_quantity" min="1" required>
                            <input type="submit" name="add_to_cart" value="Add to Cart">
                        </form>
                    ';


                echo "
                    <a href='product.php?id=$id' class='btn btn-primary'>Show Cake</a>
                    
                    </div>";
                // <a href='addProduct.php?id=$id' class='btn btn-primary'>Add To Cart</a>
                // <a href='addProduct.php?name=$product_name&desc=$product_desc&price=$product_price' class='btn btn-primary'>Add To Cart</a>
            
            }

            ?>


</body>

</html>