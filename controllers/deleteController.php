
<?php



require("../authenticate.php");

class Delete extends Database
{

  private $conn;

  function __construct()
  {
    $this->conn = $this->connect();
  }

  function deleteGame()
  {
    $id = $_GET['gameId'];

    // If the game already exists
    if ($id != "") {
      $sql = "DELETE FROM `games` WHERE id = '$id'";
      var_dump($sql);
      if ($this->conn->query($sql) === TRUE) {
        echo "Update succesfully !";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }

    $url = "../index.php";
    header("Location: " . $url);
    exit();
  }


}

$delete = new Delete();
$delete->deleteGame();
?>
