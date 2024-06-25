<?php $ROOT_PATH = "http://localhost/Video-Game-Store" ?>

<header>
    <nav class="navbar navbar-expand-lg bg-body">
        <div class="container-fluid p-4">
            <div>
                <a href=<?= $ROOT_PATH . "/index.php" ?>>
                    <img src=<?= $ROOT_PATH . "/assets/images/mainLogo.png" ?> style="width: 70px;" alt="Video Game Store">
                </a>
            </div>
            <div>
                <?php if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) == TRUE) : ?>
                    <?php if ($_SESSION['admin'] == FALSE) : ?>
                    <span class="fa-light fa-cart-shopping"></span>
                    <?php endif;?>
                    <span>Welcome <?= $_SESSION['name'] ?> !</span>
                    <?php if ($_SESSION['admin'] == TRUE) : ?>
                        <a href=<?= $ROOT_PATH . "/pages/admin.php" ?>>
                            <button type="button" class="btn btn-primary">Administration</button></a>
                    <?php endif; ?>
                    <a href=<?= $ROOT_PATH . "/controllers/logoutController.php" ?>>
                        <button type="button" class="btn btn-danger">Logout</button></a>
                <?php else : ?>
                    <a href=<?= $ROOT_PATH . "/pages/login.php" ?>>
                        <button type="button" class="btn btn-primary">Log in</button></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>