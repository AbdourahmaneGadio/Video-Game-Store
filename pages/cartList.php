<?php
require_once("../authenticate.php");
require_once("../controllers/gamesController.php");
require_once("../controllers/cartController.php");
$cart = new Cart();

if (isset($_POST['deleteGameFromCart'])) {
    $cart->removeGameFromCart($_POST['deleteGameFromCart']);
    unset($_POST['deleteGameFromCart']);
}

$cartList = $cart->getShoppingList();
$games = new Games();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>Shopping list</title>
</head>

<body>
    <?php include "../includes/header.php" ?>
    <main>
        <div class="container">
            <h1 class="my-3">Shopping cart</h1>
            <!-- La liste des objets du panier-->
            <?php if (!empty($cartList)) : ?>
                <?php foreach ($cartList as $objetPanier) :
                    $id = $objetPanier[0];
                    $gameId = $objetPanier[1];
                    $price = $objetPanier[3];

                    $game = $games->getSingleGame($gameId);
                    $visual = $game['visual'];
                    $title = $game['title'];
                ?>
                    <form action="" method="post">
                        <div class="row my-5 text-center">
                            <div class="col-sm-2">
                                <span><?= $title ?></span>
                                <img src=<?= $ROOT_PATH . "/uploads/games/" . $visual; ?> class="img-fluid rounded" alt="Game's visual">
                            </div>
                            <div class="col-sm-1 my-auto"> 
                                <span><?= $price ?>$</span>
                            </div>
                            <div class="col-sm-2 my-auto">
                                <div class="my-2">
                                    <button name="deleteGameFromCart" value="<?= $id ?>" type="submit" class="btn btn-danger" onclick="return deleteGameAlert();">Supprimer</button></a>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="alert alert-info" role="alert">
                    <span>No games found</span>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

</body>

</html>