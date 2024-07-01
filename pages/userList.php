<?php
require_once("../authenticate.php");
require_once("../controllers/userController.php");
require_once("../controllers/deleteController.php");

if (isset($_GET['deleteUser']) && isset($_GET['userId'])) {
    $delete = new Delete();
    $delete->deleteUser($_GET['userId']);
}

$userObject = new User();
$usersDatabase = $userObject->getAllUsers();
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
            <!-- La liste des utilisateurs -->
            <?php if (!empty($usersDatabase)) : ?>
                <?php foreach ($usersDatabase as $user) :
                    $id = $user[0];
                    $username = $user[1];
                    $dateOfCreation = $user[3];
                    $statut = $user[4];
                ?>
                    <div class="row mt-5">
                        <div class="col-5 mx-auto">
                            <div>
                                <span><?= $username ?></span>
                            </div>
                            <div> <span>Created the <?= $dateOfCreation ?></span></div>
                            <div> <span>Statut : <?= $statut ?></span></div>

                            <div>
                                <a href=<?= $ROOT_PATH . "/pages/userInformation.php?userId=" . $id ?>>
                                    <button type="button" class="btn btn-primary">Modifier</button>
                                </a>
                                <?php if ($statut != "superadmin") : ?>
                                    <a href=<?= "?deleteUser=1&userId=" . $id ?>>
                                        <button type="button" class="btn btn-danger" onclick="return deleteGameAlert();">Supprimer</button>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

</body>

</html>