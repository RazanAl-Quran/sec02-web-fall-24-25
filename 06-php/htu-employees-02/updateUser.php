<?php

require 'connect.php';

$id= $_GET['empid'];
$sql = "SELECT * FROM employees WHERE id=$id;";

$result = mysqli_query($conn,$sql);
// print_r($result);

$userDetails = mysqli_fetch_assoc($result);

print_r($userDetails);

$name = $userDetails['name'];
$salary = $userDetails['salary'];


if (isset($_POST['updateuser'])) {

    $name = $_POST['name'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employees SET name='$name', salary=$salary WHERE id=$id;";
    $result = mysqli_query($conn,$sql);

    if($result) {
        header("Location: displayUsers.php");
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label>Employee Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary"  value="<?php echo $salary; ?>">
            </div>
            <button type="submit" name="updateuser" class="btn btn-primary">Update Employee</a></button>
        </form>
    </div>
</body>

</html>