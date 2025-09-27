<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

<h1> Llibres Recomenats </h1>

<ul>
    <?php foreach ($llibresFiltrats as $llibre) : ?>
        <li>
            <a href="<?= $llibre['urlDeCompra'] ?>">
                <?= $llibre['nom']; ?> (<?= $llibre['anyPublicacio'] ?>)
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>