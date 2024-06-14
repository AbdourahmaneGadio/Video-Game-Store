<!DOCTYPE html>
<html lang="en">

<head>
<?php include "../includes/meta.php"?>

    <title>Admin Panel - Update</title>
</head>

<body>
<?php include "../includes/header.php"?>

    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="mx-auto col-8">
                    <form action="../controllers/updateController.php" method="POST">

                        <div id="ligneJeu" class="row">

                            <!-- Les informations du jeu -->
                            <div class="col-6">
                                <img src="" class="img-fluid" alt="Game's visual">
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input class="form-control form-control-sm" id="formFileSm" name="formFileSm" accept="image/png, image/jpeg">
                                  </div>
                                  
                                <span>Titre du jeu</span>
                                <input type="text" class="form-control" name="title" placeholder="Title" required>

                                <span>Editeur</span>
                                <input type="text" class="form-control" name="editor" placeholder="Editor" required>

                                <span>Année de parution</span>
                                <input type="number" class="form-control" name="year" placeholder="2024" aria-label="yearOfPublication" aria-describedby="basic-addon1" min="1975" required>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div>
                                        <span>Résumé</span>
                                        <textarea class="form-control" id="resume" name="resume" rows="3" required></textarea>
                                    </div>
                                    <div class="mt-3">
                                        <select name="rating" id="rating" required>
                                            <option value="3">+3</option>
                                            <option value="16">+16</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Les boutons pour supprimer ou modifier le jeu -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <?php if (empty($_POST)):?>
Ajouter                                    <?php else:?>
Modifier
                                    <?php endif;?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>