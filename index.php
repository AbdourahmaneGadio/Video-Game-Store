<?php require_once "authenticate.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/meta.php"?>
    <title>Video Game Store</title>
</head>

<body>
<?php include "includes/header.php"?>

    <main>
        <div class="container p-5">

            <!-- La liste des jeux -->
            <div class="row p-3 rounded bg-info-subtle mb-3">
                <div id="ligneJeu" class="row">
                    <!-- Les informations du jeu -->
                    <div class="col-3 my-auto">
                        <img src="assets/images/53063.jpg" class="img-fluid rounded" alt="Game's visual">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div>
                                <span class="display-6">NBA Street VOL.2</span>
                            </div>
                            <div class="my-2"> <span class="text-body-secondary">Editeur</span>
                                <span class="text-body-secondary">Année de parution</span>
                            </div>
                            <div class="my-2">
                                <p class="lead">Résumé</p>
                            </div>
                            <div class="mt-3">
                                <img src="" class="img-fluid" alt="Rating">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Zone pour emprunter -->
                <div class="input-group my-3">
                    <span class="input-group-text" id="basic-addon1">Nom</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
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
        </div>
    </main>
</body>

</html>