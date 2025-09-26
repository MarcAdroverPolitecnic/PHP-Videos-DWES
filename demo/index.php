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
            [
                'nom' => 'Do Androids Dream of Electric Sheep',
                'autor' => 'Philip k. Dick',
                'urlDeCompra' => 'http://example.com'
            ],
            [
                'nom' => 'Hail Mary',
                'autor' => 'Andy Wair',
                'urlDeCompra' => 'http://example.com'
            ]
        ];
    ?>

    <ul>
        <?php foreach ($llibres as $llibre) : ?>
        <li>
            <a href="<?= $llibre['urlDeCompra'] ?>">
                <?= $llibre['nom']; ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>