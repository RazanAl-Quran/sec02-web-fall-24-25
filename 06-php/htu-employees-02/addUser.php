<?php
include 'connect.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
// }

if (isset($_POST['adduser'])) {
    print_r($_POST);
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name,salary) VALUES ('$name', $salary)";

    $result = mysqli_query($conn,$sql);

    
    if($result) {
        // print_r($result);
        header("Location: allEmp.php");
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
    <h2>Add HTU Employee</h2>

    <div class="container my-5">
       
       <form method="post">
           <div class="mb-3">
               <label>Employee Name</label>
               <input type="text" class="form-control" name="name">
           </div>
           <div class="mb-3">
               <label>Salary</label>
               <input type="text" class="form-control" name="salary">
           </div>
           <button type="submit" name="adduser" class="btn btn-primary">Add Employee</a></button>
       </form>
   </div>
</body>

</html>