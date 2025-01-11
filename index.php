<?php

declare(strict_types=1);

require_once './utils.php';
require_once './constants.php';
// include_once works too, gives a warning if file is not found. Not good for this case.

$data = get_data(API_URL);
?>

<html lang="en">

<?php render_template("head", $data) ?>

<body>
    <?php if ($data) : ?>
        <img src="<?= $data["poster_url"] ?>" alt="poster image">
        <div class="content">
            <h2><?= $data["title"] ?></h2>
            <p><?= $data["overview"] ?></p>
            <p>Release date: <?= $data["release_date"] ?></p>
        </div>
    <?php endif ?>
</body>

</html>