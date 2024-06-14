<!DOCTYPE html>
<html lang="en">

<head>
       <?php include "../includes/meta.php"?>

    <title>Admin Panel</title>
</head>

<body>
<?php include "../includes/header.php"?>

    <main>
        <div class="container">

            <div><a href="update.php">
                    <button type="button" class="btn btn-primary">Ajouter un jeu</button></a>
            </div>
            <!-- La liste des jeux -->
            <div id="ligneJeu" class="row">

                <!-- Les informations du jeu -->
                <div class="col-4">
                    <img src="" class="img-fluid" alt="Game's visual">
                    <span>Titre du jeu</span>
                    <span>Editeur</span>
                    <span>Année de parution</span>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div>
                            <span>Résumé</span>
                        </div>
                        <div class="mt-3">
                            <img src="" class="img-fluid" alt="Rating">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Les boutons pour supprimer ou modifier le jeu -->
            <div><a href="update.php?id=1">
                    <button type="button" class="btn btn-primary">Modifier</button></a>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </main>
</body>

</html>