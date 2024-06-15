
<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../authenticate.php");

class Update extends Database
{

  private $conn;

  function __construct()
  {
    $this->conn = $this->connect();
  }

  function addGame()
  {
    // Adding the game into the database
    $visual = $_POST['formFileSm'];
    $title = $_POST['title'];
    $editor = $_POST['editor'];
    $year = $_POST['year'];
    $resume = $_POST['resume'];
    $rating = $_POST['rating'];

    $id = $_POST['gameId'];

    // If the game already exists
    if ($id != "") {
      $sql = "UPDATE `games` SET `resume`='$resume',`rating`='$rating',`year`='$year',`title`='$title',`editor`='$editor' WHERE id = '$id'";
      if ($this->conn->query($sql) === TRUE) {
        echo "Update succesfully !";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }

    // New game
    else {

      $sql = "INSERT INTO `games` (`visual`, `resume`, `rating`, `year`, `title`, `editor`) VALUES ('$visual', '$resume', '$rating', '$year', '$title', '$editor') ";
      if ($this->conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }

    $url = "../pages/admin.php";
    header("Location: " . $url);
    exit();
  }
}

$update = new Update();
$update->addGame();
?>
