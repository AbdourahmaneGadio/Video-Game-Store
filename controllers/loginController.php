
<?php

require("../authenticate.php");

class Login extends Database
{
  private $conn;

  function __construct()
  {
    $this->conn = $this->connect();
  }
  function checkLogin()
  {
    // Check username AND password
    $password = $_POST['password'];
    // If error, we redirect
    // Else, we go to the admin page
    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $this->conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
      // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
      $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      // Store the result so we can check if the account exists in the database.
      $stmt->store_result();


      // $stmt->close();
    }

    if ($stmt->num_rows > 0) {
      $stmt->bind_result($id, $password);
      $stmt->fetch();
      // Account exists, now we verify the password.
      // Note: remember to use password_hash in your registration file to store the hashed passwords.
      if (password_verify($_POST['password'], $password)) {
        // Verification success! User has logged-in!
        // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        $url = "../index.php";
        header('Location: ' . $url);
        exit();
      } else {
        // Incorrect password
        $url = "../pages/login.php?error=1";
        header('Location: ' . $url);
        exit();
      }
    } else {
      // Incorrect username
      $url = "../pages/login.php?error=1";
      header('Location: ' . $url);
      exit();
    }
  } // checkLogin()
}

$login = new Login();
$login->checkLogin();
?>
