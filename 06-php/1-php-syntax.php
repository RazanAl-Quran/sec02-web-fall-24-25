<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello from my first PHP code</h1>

    <?php
    $username = 'Mohammad';
    echo "Hello $username";
    echo "Hello ". $username;
    echo "<h2>Hello $username</h2>";

    $cars = array("Mercedes","Samurai","Range Rover");

    echo "my cars are $cars[0] and $cars[1]";
    // echo "my cars are $cars";

    for ($i=0; $i < count($cars); $i++) { 
        echo $cars[$i]. "</br>";
    }

    // Associative Arrays
  $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");

//   echo $students[0];
  echo $students['Ahmad'];


    ?>

</body>
</html>