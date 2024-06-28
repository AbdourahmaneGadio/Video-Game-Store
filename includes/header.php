<?php $ROOT_PATH = "http://localhost/Video-Game-Store" ?>

<header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body">
        <div class="container-fluid p-4 bg-info-subtle">

            <a class="navbar-brand" href=<?= $ROOT_PATH . "/index.php" ?>>
                <img src=<?= $ROOT_PATH . "/assets/images/mainLogo.png" ?> style="width: 70px;" alt="Video Game Store">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) == TRUE) : ?>
                        <?php if ($_SESSION['admin'] == FALSE) : ?>
                            <li class="nav-item my-auto">
                                <span class="fa-light fa-cart-shopping"></span>
                            </li>
                        <?php endif; ?>
                        <span class="mx-2 my-auto">Welcome <?= $_SESSION['name'] ?> !</span>
                        <?php if ($_SESSION['admin'] == TRUE) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Administration
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href=<?= $ROOT_PATH . "/pages/addEditor.php" ?>>Add editor</a></li>
                                    <li><a class="dropdown-item" href=<?= $ROOT_PATH . "/pages/userList.php" ?>>Manage users</a></li>
                                    <li> <a class="dropdown-item" href=<?= $ROOT_PATH . "/pages/update.php" ?>>Add a game</a></li>
                                </ul>
                            </li>
                        <?php else : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Settings
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href=<?= $ROOT_PATH . "/pages/userInformation.php" ?>>Account information</a></li>
                                    <li><a class="dropdown-item" href=<?= $ROOT_PATH . "/pages/userRental.php" ?>>Rental history</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href=<?= $ROOT_PATH . "/controllers/logoutController.php" ?>>
                                <button type="button" class="btn btn-danger">Logout</button></a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a href=<?= $ROOT_PATH . "/pages/login.php" ?>>
                                <button type="button" class="btn btn-primary">Log in</button></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>