<?php
$ROOT_PATH = "http://localhost/Video-Game-Store";
require("authenticate.php");
require_once("controllers/gamesController.php");
$games = new Games();

// If rememberme checked
if ($_SESSION['loggedin'] == false) {
    if (isset($_COOKIE['user_login']) && $_COOKIE['user_login'] != "") {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_COOKIE['user_login'];
        $_SESSION['admin'] = $_COOKIE['user_statut'];
        $_SESSION['id'] = $_COOKIE['user_id'];
    }
}

$get_vars = array('rating', 'year', 'editor', 'name');

$set_vars = false;

foreach ($get_vars as $var) {
    if (isset($_GET[$var])) {
        $set_vars = true;
        $gamesList = $games->searchGame();
        break;
    }
}

if ($set_vars == false) {
    $gamesList = $games->getAllGames();
}

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
            <!-- Search Results Modal -->
            <?php include "includes/searchBar.php" ?>

            <!-- La liste des jeux -->
            <?php if (!empty($gamesList)) : ?>
                <?php foreach ($gamesList as $game) :
                    $id = $game[0];
                    $visual = $game[1];
                    $resume = $game[2];
                    $rating = $game[3];
                    $year = $game[4];
                    $title = $game[5];
                    $editor = $games->getSingleEditor($game[6]);
                    $editor = $editor['name'];
                    $video = $game[7];
                    $reservation = $game[8];
                ?>
                    <div class="row p-3 rounded bg-info-subtle mb-3">
                        <div id="ligneJeu" class="row">
                            <!-- Les informations du jeu -->
                            <div class="col-3 my-auto">
                                <img src=<?= $ROOT_PATH . "/uploads/games/" . $visual; ?> class="img-fluid rounded" alt="Game's visual">
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div>
                                        <span class="display-6"><?= $title ?></span>
                                    </div>
                                    <div class="my-2"> <span class="text-body-secondary"><?= $editor ?></span> <span> - </span>
                                        <span class="text-body-secondary"><?= $year ?></span>
                                    </div>
                                    <div class="my-2">
                                        <p class="lead"><?= $resume ?></p>
                                    </div>
                                    <div class="mt-3">
                                        <div class="col-2">
                                            <img src=<?= $ROOT_PATH . "/assets/images/pegi/pegi-" . $rating . ".png" ?> class="img-fluid" alt="Rating">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-3 my-auto">

                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src=<?= $video ?> allowfullscreen></iframe>
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
                        <div class="my-2">
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE) : ?>

                                <a href=<?= $ROOT_PATH . "/pages/update.php?gameId=" . $id ?>>
                                    <button type="button" class="btn btn-primary">Modifier</button></a>
                                <a href=<?= $ROOT_PATH ."/controllers/deleteController.php?gameId=" . $id ?>>
                                    <button type="button" class="btn btn-danger" onclick="return deleteGameAlert();">Supprimer</button></a>
                            <?php elseif ($reservation == 1) : ?>
                                <button type="button" class="btn btn-primary">Retour</button>
                            <?php else : ?>
                                <button type="button" class="btn btn-primary">Réserver</button>

                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <!-- Si aucun jeu -->
            <?php else : ?>
                <div class="alert alert-info" role="alert">
                <span>No games found</span>
                </div>
            <?php endif; ?>

        </div>
    </main>
    <?php include "includes/footer.php" ?>

</body>

</html>