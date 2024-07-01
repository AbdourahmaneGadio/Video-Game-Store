
<?php



// require_once("../authenticate.php");

class Delete extends Database
{

  private $conn;

  function __construct()
  {
    $this->conn = $this->connect();
  }

  function deleteGame($id)
  {

    // If the game already exists
    if ($id != "") {
      $sql = "DELETE FROM `games` WHERE id = '$id'";
      // var_dump($sql);
      if ($this->conn->query($sql) === TRUE) {
        echo "Update succesfully !";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }

    // $url = "../index.php";
    // header("Location: " . $url);
    // exit();
  }

  function deleteUser($id){

    // If the user already exists
    if ($id != "") {
      $sql = "DELETE FROM `users` WHERE id = '$id'";
      // var_dump($sql);
      if ($this->conn->query($sql) === TRUE) {
        echo "Update succesfully !";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }
  }


}
?>
