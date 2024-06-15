<?php 
require_once("../authenticate.php");
require_once("../controllers/gamesController.php");
$games = new Games();
$gamesList = $games->getAllGames();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>Admin Panel</title>
</head>

<body>
    <?php include "../includes/header.php" ?>

    <main>
        <div class="container">

            <div><a href="update.php">
                    <button type="button" class="btn btn-primary">Ajouter un jeu</button></a>
            </div>
            <!-- La liste des jeux -->
            <?php foreach ($gamesList as $game) : 
                $id=$game[0];
                $visual=$game[1];
                $resume=$game[2];
                $rating=$game[3];
                $year=$game[4];
                $title=$game[5];
                $editor=$game[6];
                ?>
                <div class="row p-3 rounded bg-info-subtle my-3">
                    <div id="ligneJeu" class="row">
                        <!-- Les informations du jeu -->
                        <div class="col-3 my-auto">
                            <img src=<?=$ROOT_PATH . "/assets/images/games/" . $visual?> class="img-fluid rounded" alt="Game's visual">
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div>
                                    <span class="display-6"><?=$title?></span>
                                </div>
                                <div class="my-2"> <span class="text-body-secondary"><?=$editor?></span>
                                <span> - </span>
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

                    <!-- Les boutons pour supprimer ou modifier le jeu -->
                    <div><a href=<?="update.php?gameId=" . $id?>>
                            <button type="button" class="btn btn-primary">Modifier</button></a>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </div> 
                    

                </div>
                <?php endforeach; ?>


        </div>
    </main>
</body>

</html>