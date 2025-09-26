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
                'Do Androids Dream of Electric Sheep',
                'Philip k. Dick',
                'http://example.com'
            ],
            [
                'Hail Mary',
                'Andy Wair',
                'http://example.com'
            ]
        ];
    ?>

    <p>
        <?= $llibres[1]?>
    </p>

</body>
</html>