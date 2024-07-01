<?php
include "../controllers/registerController.php";
include "../controllers/userController.php";

if (isset($_POST['updateAccount'])) {
    $register = new Register();
    $register->updateAccount();
}

if (isset($_GET['userId'])) {
    $user = new User();
    $userData = $user->getSingleUser($_GET['userId']);
    $id = $userData['id'];
    $username = $userData['username'];
    $statut = $userData['userStatut'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>User information</title>
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
                        <?php if (isset($_GET['success'])) : ?>
                            <div class="alert alert-success" role="alert">
                                <span>Information updated successfully !</span>
                            </div>
                        <?php endif; ?>
                        <!-- Username input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control" value="<?= $username ?>" required />
                            <label class="form-label" for="username">Username</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" required />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <!-- User statut -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <select class="form-control" id="statut" name="statut">
                                <?php
                                $userStatuts = array('User', 'Admin');
                                foreach ($userStatuts as $userStatut) : ?>
                                    <option value="<?= $userStatut ?>" <?php if (isset($statut) && $statut == $userStatut) : ?> selected <?php endif; ?>><?= $userStatut ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="statut">User statut</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="updateAccount" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Update information</button>

                        <input type="hidden" name="userId" value="<?= $id ?>">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

</body>

</html>