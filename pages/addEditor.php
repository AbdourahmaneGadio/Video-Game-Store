<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../includes/meta.php" ?>

    <title>Add editor</title>
</head>

<body>
    <?php include "../includes/header.php" ?>
    <main>
        <div class="container">
            <div class="row mt-5">
                <div class="mx-auto col-5">
                    <form action="<?= $ROOT_PATH . "" ?>" method="POST">
                        <?php if ($_GET['error']) : ?>
                            <div class="alert alert-danger" role="alert">
                                <span>Error</span>
                            </div>
                        <?php endif; ?>

                        <div class="my-2">
                            <textarea class="form-control" id="resume" name="resume" rows="3" placeholder="Add 1 editor per line" required><?= $resume; ?></textarea>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Add editor(s)</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include "../includes/footer.php" ?>

</body>

</html>