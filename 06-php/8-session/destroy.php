<?php

session_start();

unset($_SESSION['username2']);
unset($_SESSION['id2']);
// or session_unset();

session_destroy();

// Clear the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}

header("Location: student.php");
?>