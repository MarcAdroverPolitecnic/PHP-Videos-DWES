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

    function filtrarPerAurtor(){
        //

    }



    ?>

    <ul>
        <?php foreach ($llibres as $llibre) : ?>
            <?php if($llibre['autor'] === 'Andy Wair') : ?>
            <li>
                <a href="<?= $llibre['urlDeCompra'] ?>">
                    <?= $llibre['nom']; ?> (<?= $llibre['anyPublicacio'] ?>)
                </a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

    <p>
        <?= filtrarPerAutor(); ?>
    </p>

</body>
</html>