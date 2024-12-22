<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name3 = $_GET['name2'];
    ?>
    <h1>Welcome <?php echo $name3 ?> </h1>
    <?php
    echo "<h1>Welcome " . $name3 . "</h1>"
        ?>
</body>

</html>