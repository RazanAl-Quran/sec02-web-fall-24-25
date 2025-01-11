<?php

require 'connect.php';

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
    <button class="btn btn-primary my-5"> <a href="addUser.php" class="text-light">Add User</a></button>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql = "SELECT * FROM employees;";
                $result = mysqli_query($conn,$sql);

                // print_r($result);
                // echo '<br>';

                // $usersDetails = mysqli_fetch_all($result);
                $usersDetails2 = mysqli_fetch_all($result,MYSQLI_ASSOC);

                // print_r($usersDetails);
                // echo "<br>";
                print_r($usersDetails2);

                foreach($usersDetails2 as $user) {

                    // numeric array
                    // $id = $user[0];
                    // $name = $user[1];
                    // $salary = $user[2];

                    // associative array
                    $id = $user['id'];
                    $name = $user['name'];
                    $salary = $user['salary'];

                    echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$salary</td>
                        <td>
                              <button class='btn btn-primary'><a class='text-ligh' href='updateUser.php?empid=$id'>Update</a></button>

                                <button class='btn btn-danger'><a class='text-ligh' href='deleteUser.php?empid=$id'>Delete</a></button>
                        </td>
                    </tr> ";


                }



            ?>
              
            </tbody>
        </table>
    </div>

</body>

</html>