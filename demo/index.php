<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <h1> Llibres Recomenats </h1>

    <?php
        $llibres = [
            "Do Androids Dream of Electronic Sheep",
            "The Langoliers",
            "Hail Mary"
            ];
    ?>

    <ul>
        <?php foreach ($llibres as $llibre) : ?>
            <li> <?= $llibre ?></li>

        <?php endforeach; ?>

    </ul>

</body>
</html>