
<?php

require("../authenticate.php");

class Register extends Database
{
  private $conn;

  function __construct()
  {
    $this->conn = $this->connect();
  }
  function createAccount()
  {
    // Check username AND password
    $username = $_POST['username'];
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

    if ($stmt->num_rows == 0) {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $this->conn->prepare("INSERT INTO `users`(`username`, `password`) VALUES (?,?)");
      $stmt->bind_param('ss', $username, $password);
      $stmt->execute();
      // Verification success! User has logged-in!
      // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
      session_regenerate_id();

      $stmt = $this->conn->prepare('SELECT id FROM users WHERE username = ?');
      $stmt->bind_param('s', $username);
      $stmt->execute();
      $result = $stmt->get_result()->fetch_assoc();
      $id = $result['id'];

      $_SESSION['loggedin'] = TRUE;
      $_SESSION['admin'] = FALSE;
      $_SESSION['name'] = $username;
      $_SESSION['id'] = $id;

      unset($_POST['registerButton']);

      $url = "../index.php";
      header('Location: ' . $url);
      exit();
    } else {
      // Username taken
      $url = "../pages/register.php?error=1";
      header('Location: ' . $url);
      exit();
    }
  } // checkLogin()

  function updateAccount()
  {
    // Check username AND password
    $username = $_POST['username'];
    $password = $_POST['password'];
    // If error, we redirect
    // Else, we go to the admin page
    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $this->conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
      // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
      $stmt->bind_param('s', $_POST['username']);
      $stmt->execute();
      // Store the result so we can check if the account exists in the database.
      // $stmt->store_result();

      // $stmt->close();
    }

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // If the username is not taken, or if we only change the password
    if ($stmt->num_rows == 0 || ($_SESSION['name'] = $row['username'] && $_SESSION['id'] == $row['id'])) {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $this->conn->prepare("UPDATE `users` SET `username`= ?,`password`= ? WHERE `id` = ?");
      $stmt->bind_param('ssi', $username, $password, $_SESSION['id']);
      $stmt->execute();
      // Verification success! User has logged-in!
      // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
      session_regenerate_id();

      $_SESSION['name'] = $username;

      unset($_POST['updateAccount']);

      $url = "../pages/userInformation.php?success=1";
      header('Location: ' . $url);
      exit();
    } else {
      // Username taken
      $url = "../pages/userInformation.php?error=1";
      header('Location: ' . $url);
      exit();
    }
  } // checkLogin()
}
?>
