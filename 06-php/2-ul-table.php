<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>HTU Courses</h1>

    <?php
    // get courses from DB and store them in a new array
    $courses = array('programming', 'advanced programming', 'data structures');
    echo "<ul>";
    for ($i = 0; $i < count($courses); $i++) {

        echo "<li class='course'>$courses[$i]</li>";
    }
    echo "</ul>";

    ?>
    <!-- <ul>
        <li class="course">Programming</li>
        <li class="course">Adva Progr</li>
        <li class="course">DS</li>
    </ul> -->

    <?php
    // TABLES
    // get courses from DB and store them in a new array
    $grades = array("khaled" => 80, "Saif" => 100, "Rana" => 98);
   
    echo " <table border='1'>
        <tr>
            <th>Student</th>
            <th>Grade</th>
        </tr>
        ";
    foreach ($grades as $student => $grade) {

        echo "<tr class='student'>
            <td>$student</td>
            <td>$grade</td>
            </tr>
            ";
    }
    echo "</table>";

    ?>

    <!-- <table>
        <tr>
            <th>Student</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Khaled</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Saif</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Rana</td>
            <td>98</td>
        </tr>
    </table> -->

</body>

</html>