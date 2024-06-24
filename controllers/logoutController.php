<?php
setcookie ("user_login",$_SESSION['name'],time()-42000, "/");
unset($_COOKIE['user_login']);
unset($_COOKIE['user_statut']);
unset($_COOKIE['user_id']);
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../index.php');
?>