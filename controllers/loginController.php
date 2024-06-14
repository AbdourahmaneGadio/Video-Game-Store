
<?php
class Login {

  function checkLogin() {
    // Check username AND password
    // If error, we redirect
    // Else, we go to the admin page
    $url = "../pages/admin.php";
    header('Location: '.$url);
    exit();
  }

}

$login = new Login();
$login->checkLogin();
?>
