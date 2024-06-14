
<?php
class Update {

  function addGame() {
    // Adding the game into the database
    $image = $_POST['formFileSm'];
    $title = $_POST['title'];
    $editor = $_POST['editor'];
    $year = $_POST['year'];
    $resume = $_POST['resume'];
    $rating = $_POST['rating'];
  }

}

$update = new Update();
$update->addGame();
?>
