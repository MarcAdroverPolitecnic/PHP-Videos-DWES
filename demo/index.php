<?php
$llibres = [
        [
                'nom' => 'Do Androids Dream of Electric Sheep',
                'autor' => 'Philip k. Dick',
                'anyPublicacio' => '1968',
                'urlDeCompra' => 'http://example.com'
        ],
        [
                'nom' => 'Hail Mary',
                'autor' => 'Andy Wair',
                'anyPublicacio' => '2021',
                'urlDeCompra' => 'http://example.com'
        ],
        [
                'nom' => 'The Martian',
                'autor' => 'Andy Wair',
                'anyPublicacio' => '2011',
                'urlDeCompra' => 'http://example.com'
        ]
];


$llibresFiltrats = array_filter($llibres, function ($llibre) {
    return $llibre['anyPublicacio'] >= 2012;
});

?>

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