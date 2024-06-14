
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

    $title = $_POST['title'];
    $editor = $_POST['editor'];
    $year = $_POST['year'];
    $resume = $_POST['resume'];
    $rating = $_POST['rating'];
    $video = $_POST['video'];
    $video = $this->convertYouTubeUrlToEmbedCode($video);
    $id = $_POST['gameId'];

    // If we changed the visual
    if (isset($_FILES['visual'])) {
      $ext = pathinfo($_FILES["visual"]["name"], PATHINFO_EXTENSION);
      $visual = $id . "." . $ext;
    }

    // If the game already exists
    if ($id != "") {
      $sql = 'UPDATE `games` SET';
      if (isset($_FILES['visual'])) {
        $sql .= "`visual`='$visual', ";
      }

      $sql .= "`resume`='$resume',`rating`='$rating',`year`='$year',`title`='$title',`editor`='$editor', `video`='$video' WHERE id = '$id'";
      if ($this->conn->query($sql) === TRUE) {
        echo "Update succesfully !";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }

    // New game
    else {

      $sql = "INSERT INTO `games` (`visual`, `resume`, `rating`, `year`, `title`, `editor`, `video`) VALUES ('$visual', '$resume', '$rating', '$year', '$title', '$editor', '$video') ";
      if ($this->conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $this->conn->error;
      }
    }


    // We move the image
    if (isset($_FILES['visual'])) {

      $target_dir = "../uploads/games/";
      if(! is_dir("../uploads")){
        mkdir("../uploads", 0777, true);
      }
      if(! is_dir($target_dir)){
        mkdir($target_dir, 0777, true);
      }
      $target_file = $target_dir . $id . ".". $ext;

      if (move_uploaded_file($_FILES["visual"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["visual"]["name"])) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $url = "../index.php";
    header("Location: " . $url);
    exit();
  }




  function convertYouTubeUrlToEmbedCode($url)
  {
    $videoId = '';
    $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

    preg_match($pattern, $url, $matches);

    if (isset($matches[1])) {
      $videoId = $matches[1];
    }

    $embedCode = "https://www.youtube.com/embed/" . $videoId;

    return $embedCode;
  }

  
}

$update = new Update();
$update->addGame();
?>
