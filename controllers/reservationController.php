<?php
class Reservation{

    function reservGame(){
        // Changing the state of the game
        // set to 1
        $url = "../index.php";
        header('Location: '.$url);
        exit();
    }

}

$reservation = new Reservation();
$reservation->reservGame();
?>