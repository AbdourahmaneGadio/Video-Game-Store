<?php
require_once("../authenticate.php");

require_once("../controllers/gamesController.php");

$games = new Games();

if (isset($_GET['gameId']) && $_GET['gameId'] != "") {
    $gameId = $_GET['gameId'];
    $singleGame = $games->getSingleGame($gameId);
    $id = $singleGame['id'];
    $visual = $singleGame['visual'];
    $resume = $singleGame['resume'];
    $rating = $singleGame['rating'];
    $year = $singleGame['year'];
    $title = $singleGame['title'];
    $editor = $singleGame['editor'];
    $video = $singleGame['video'];
    $price = $singleGame['price'];
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
                    <form action="../controllers/updateController.php" method="POST" enctype="multipart/form-data">

                        <div id="ligneJeu" class="row">

                            <!-- Les informations du jeu -->
                            <div class="col-4">
                                <?php if (isset($gameId)) : ?>
                                    <input type="hidden" name="gameId" value=<?= $gameId ?>>
                                <?php endif; ?>
                                <?php if (isset($visual)) : ?>
                                    <img src=<?= $ROOT_PATH . "/uploads/games/" . $visual; ?> class="img-fluid rounded my-2" alt="Game's visual">
                                <?php endif; ?>

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input type="file" class="form-control form-control-sm" id="visual" name="visual" accept="image/png, image/jpeg" <?php if (!isset($id)) : ?> required="true" <?php endif; ?>>
                                </div>


                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div>
                                        <span>Titre du jeu</span>
                                        <input type="text" class="form-control" name="title" placeholder="Title" <?php if (isset($title)) : ?> value="<?= htmlspecialchars($title) ?>" <?php endif; ?> required>
                                    </div>
                                    <div>
                                        <span>Editeur</span>
                                        <select class="form-control mr-sm-2" id="editor" name="editor" required>
                                            <option value="">Editor</option>
                                            <?php
                                            $editorsDatabase = $games->getEditors();
                                            foreach ($editorsDatabase as $editorDatabase) :
                                                $id = $editorDatabase[0];
                                                $name = $editorDatabase[1];
                                            ?>
                                                <?php if ($editor && $id == $editor) : ?>
                                                    <option value="<?= "$id"; ?>" selected><?= "$name"; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= "$id"; ?>"><?= "$name"; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                    <div>
                                        <span>Année de parution</span>
                                        <input type="number" class="form-control" name="year" placeholder="2024" <?php if (isset($year)) : ?> value="<?= $year ?>" <?php endif; ?> aria-label="yearOfPublication" aria-describedby="basic-addon1" min="1975" required>
                                    </div>
                                    <div>
                                        <span>Résumé</span>
                                        <textarea class="form-control" id="resume" name="resume" rows="3" required><?php if (isset($resume)): echo $resume; endif ?></textarea>
                                    </div>
                                    <div>
                                        <span>Prix en $</span>
                                        <input type="number" class="form-control" name="price" placeholder="100" <?php if (isset($price)) : ?> value="<?= $price ?>" <?php endif; ?> aria-label="priceOfTheGame" aria-describedby="basic-addon1" min="1" required>
                                    </div>
                                    <div>
                                        <span>Vidéo YouTube</span>
                                        <input type="text" class="form-control" name="video" placeholder="https://www.youtube.com/watch?v=sfbMHbFiN08" <?php if (isset($video)) : ?> value=<?= "$video" ?> <?php endif; ?> required>
                                    </div>
                                    <div class="my-3">
                                        <span>Rating</span>
                                        <select name="rating" id="rating" required>
                                            <?php foreach ($ratingsLabels as $ratingLabel) :
                                                $ratingId = $ratingLabel[0];
                                                $ratingTitle = $ratingLabel[1];
                                                if ($ratingTitle == $rating) :
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
                                        <?php if (empty($_GET['gameId'])) : ?>
                                            Ajouter
                                        <?php else : ?>
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
    <?php include "../includes/footer.php" ?>
</body>

</html>