<?php require_once("controllers/gamesController.php");
$games = new Games();
?>

<form method="GET" action=<?= $ROOT_PATH . "/index.php" ?> class="form-inline my-4">
    <div class="form-group mr-3">
        <label for="rating">Rating:</label>
        <select class="form-control" id="rating" name="rating">
            <option value="">All</option>
            <?php
            $ratings = $games->getRatings();
            foreach ($ratings as $rating) :
                $id = $rating[0];
                $name = $rating[1];
            ?>
                <?php if (isset($_GET['rating']) && $_GET['rating'] == $id) : ?>

                    <option selected value=<?= "$id" ?>><?= "$name" ?></option>
                <?php else : ?>
                    <option value=<?= "$id" ?>><?= "$name" ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group mr-3">
        <label for="year">Year:</label>
        <?php if (isset($_GET['year'])) : $year = $_GET['year']; ?>
            <input type="number" class="form-control" id="year" name="year" placeholder="Enter year" min="1969" value="<?= $year ?>">
        <?php else : ?>
            <input type="number" class="form-control" id="year" name="year" placeholder="Enter year" min="1969">
        <?php endif; ?>
    </div>
    <div class="form-group mr-3">
        <label for="editor">Editor:</label>
        <select class="form-control" id="editor" name="editor">
            <option value="">All</option>
            <?php
            $editors = $games->getEditors();
            foreach ($editors as $editor) :
                $id = $editor[0];
                $name = $editor[1];
            ?>
                <?php if (isset($_GET['editor']) && $_GET['editor'] == $id) : ?>
                    <option selected value=<?= "$id" ?>><?= "$name" ?></option>
                <?php else : ?>
                    <option value=<?= "$id" ?>><?= "$name" ?></option>
                <?php endif; ?>

            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group mr-3">
        <label for="title">Game Name:</label>
        <?php if (isset($_GET['title'])) : $title = $_GET['title']; ?>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter game name" value="<?= $title ?>">
        <?php else : ?>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter game name">
        <?php endif; ?>

    </div>
    <button type="submit" class="btn btn-primary mt-2">Search</button>
</form>