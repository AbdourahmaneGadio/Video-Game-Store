<?php
include "../controllers/registerController.php";

if (isset($_POST['registerButton'])) {
    $register = new Register();
    $register->createAccount();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>Register</title>
</head>

<body>
    <?php include "../includes/header.php" ?>
    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="mx-auto col-5">
                    <form method="POST">
                        <?php if (isset($_GET['error'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <span>Username already taken</span>
                            </div>
                        <?php endif; ?>
                        <!-- Username input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control" required />
                            <label class="form-label" for="username">Username</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" required />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="registerButton" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Register</button>

                        <!-- Login buttons -->
                        <div class="text-center">
                            <p>Already a member? <a href=<?= $ROOT_PATH . "/pages/login.php" ?>>Log-in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>    
    <?php include "../includes/footer.php" ?>
</body>

</html>