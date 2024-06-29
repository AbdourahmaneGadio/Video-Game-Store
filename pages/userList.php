<?php 
require_once("../authenticate.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>User list</title>
</head>

<body>
    <?php include "../includes/header.php" ?>
    <main>
        <div class="container">
            <div class="row mt-5">
                    <span>User 1</span>
                    <span>Created the 01-01-2024</span>
                    <span>Statut : Client</span>
               
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

</body>

</html>