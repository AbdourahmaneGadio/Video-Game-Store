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
                <option value=<?= "$id" ?>><?= "$name" ?></option>

            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group mr-3">
        <label for="year">Year:</label>
        <input type="number" class="form-control" id="year" name="year" placeholder="Enter year" min="1969">
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
                <option value=<?= "$id" ?>><?= "$name" ?></option>

            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group mr-3">
        <label for="name">Game Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter game name">
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>