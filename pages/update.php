<?php 
require_once("../authenticate.php");

require_once("../controllers/gamesController.php");

$games = new Games();

if ($_GET['gameId'] != "") {
    $gameId = $_GET['gameId'];
    $singleGame = $games->getSingleGame($gameId);
    $id = $singleGame['id'];
    $visual = $singleGame['visual'];
    $resume = $singleGame['resume'];
    $rating = $singleGame['rating'];
    $year = $singleGame['year'];
    $title = $singleGame['title'];
    $editor = $singleGame['editor'];
}

$ratingsLabels = $games->getRatings();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>Admin Panel - Update</title>
</head>

<body>
    <?php include "../includes/header.php" ?>

    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="mx-auto col-8">
                    <form action="../controllers/updateController.php" method="POST">

                        <div id="ligneJeu" class="row">

                            <!-- Les informations du jeu -->
                            <div class="col-4">
                                <input type="hidden" name="gameId" value=<?=$gameId?>>
                                <img src=<?= $ROOT_PATH . "/assets/images/games/" . $visual; ?> class="img-fluid" alt="Game's visual">
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input type="file" class="form-control form-control-sm" id="formFileSm" name="formFileSm" accept="image/png, image/jpeg">
                                </div>

                               
                            </div>
                            <div class="col-6">
                                <div class="row">
                                <span>Titre du jeu</span>
                                <input type="text" class="form-control" name="title" placeholder="Title" <?php if($title):?> value=<?= "$title" ?> <?php endif;?> required>

                                <span>Editeur</span>
                                <input type="text" class="form-control" name="editor" placeholder="Editor" <?php if($editor):?> value=<?= "$editor" ?> <?php endif;?> required>

                                <span>Année de parution</span>
                                <input type="number" class="form-control" name="year" placeholder="2024" <?php if($year):?> value=<?= $year ?> <?php endif;?> aria-label="yearOfPublication" aria-describedby="basic-addon1" min="1975" required>
                                    <div>
                                        <span>Résumé</span>
                                        <textarea class="form-control" id="resume" name="resume" rows="3" required><?= $resume; ?></textarea>
                                    </div>
                                    <div class="mt-3">
                                        <span>Rating</span>
                                        <select name="rating" id="rating" required>
                                            <?php foreach ($ratingsLabels as $ratingLabel) :
                                            $ratingId = $ratingLabel[0];
                                                $ratingTitle = $ratingLabel[1];
                                                if ($ratingTitle== $rating) :
                                            ?>
                                                    <option value=<?= $ratingId ?> selected><?= $ratingTitle  ?></option>
                                                <?php else : ?>
                                                    <option value=<?= $ratingId  ?>><?= $ratingTitle ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>

                                         <!-- Les boutons pour supprimer ou modifier le jeu -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <?php if (empty($_POST)) : ?>
                                    Ajouter <?php else : ?>
                                    Modifier
                                <?php endif; ?>
                            </button>
                        </div>
                            </div>
                        </div>

               
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>