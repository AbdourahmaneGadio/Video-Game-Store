<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$ROOT_PATH = "http://localhost/Video-Game-Store";
require ("authenticate.php"); 
require_once("controllers/gamesController.php");
$games = new Games();
$gamesList = $games->getAllGames();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/meta.php" ?>
    <title>Video Game Store</title>
</head>

<body>
    <?php include "includes/header.php" ?>

    <main>
        <div class="container p-5">

            <!-- La liste des jeux -->
            <?php foreach ($gamesList as $game) :
                $id = $game[0];
                $visual = $game[1];
                $resume = $game[2];
                $rating = $game[3];
                $year = $game[4];
                $title = $game[5];
                $editor = $game[6];
            ?>
                <div class="row p-3 rounded bg-info-subtle mb-3">
                    <div id="ligneJeu" class="row">
                        <!-- Les informations du jeu -->
                        <div class="col-3 my-auto">
                            <img src=<?= $ROOT_PATH . "/assets/images/games/" . $visual; ?> class="img-fluid" alt="Game's visual">
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div>
                                    <span class="display-6"><?=$title?></span>
                                </div>
                                <div class="my-2"> <span class="text-body-secondary"><?=$editor?></span> <span> - </span>
                                    <span class="text-body-secondary"><?=$year?></span>
                                </div>
                                <div class="my-2">
                                    <p class="lead"><?=$resume?></p>
                                </div>
                                <div class="mt-3">
                                <img src=<?=$ROOT_PATH . "/assets/images/rating/pegi-" . $rating?>  class="img-fluid" alt="Rating">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Zone pour emprunter -->
                    <div class="input-group my-3">
                        <span class="input-group-text" id="basic-addon1">Nom</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <!-- Les informations de l'emprunt -->
                    <div class="my-2">
                        <span>Client A</span>
                        <span>13 juin 2024 - 14:07</span>
                    </div>

                    <!-- Les boutons pour réserver ou retourner un jeu -->
                    <div>
                        <button type="button" class="btn btn-primary">Réserver</button>
                        <button type="button" class="btn btn-primary">Retour</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>