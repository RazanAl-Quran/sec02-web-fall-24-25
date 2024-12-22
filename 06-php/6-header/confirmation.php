<?php

// get the data from the request - POST
$name = $_POST['username'];

// then send the data to DB to create account

// then redirect the user to profile page
header("Location: profile.php?name2=$name");

?>