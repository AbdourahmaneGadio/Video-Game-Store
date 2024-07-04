<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>Log-in</title>
</head>

<body>
    <?php include "../includes/header.php" ?>
    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="mx-auto col-5">
                    <form action="<?= $ROOT_PATH . "/controllers/loginController.php" ?>" method="POST">
                        <?php if ($_GET['error']) : ?>
                            <div class="alert alert-danger" role="alert">
                                <span>Wrong username and/or password</span>
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

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme" checked />
                                    <label class="form-check-label" for="rememberme">Remember me</label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign
                            in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href=<?= $ROOT_PATH . "/pages/register.php" ?>>Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

</body>

</html>