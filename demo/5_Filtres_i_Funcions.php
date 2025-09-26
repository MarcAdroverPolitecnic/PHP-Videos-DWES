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

    function filtrarPerAutor($llibres, $autor) {
        $llibresFiltrats = [];

        foreach ($llibres as $llibre){
            if($llibre['autor'] === $autor){
                $llibresFiltrats[] = $llibre;
            }
        }
        return $llibresFiltrats;
    }

    ?>

    <ul>
        <?php foreach (filtrarPerAutor($llibres, 'Philip k. Dick') as $llibre) : ?>
            <li>
                <a href="<?= $llibre['urlDeCompra'] ?>">
                    <?= $llibre['nom']; ?> (<?= $llibre['anyPublicacio'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>