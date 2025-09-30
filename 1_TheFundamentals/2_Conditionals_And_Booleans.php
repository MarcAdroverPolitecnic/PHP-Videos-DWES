<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
     <?php
            $nom = "Materia Oscura!";
            $llegit = false;


     if ($llegit) {
         $missatge = "Has llegit " . $nom;
     } else {
         $missatge = "NO Has llegit " . $nom;
     }


     ?>

    <h1>
        <?php echo $missatge; ?>
        <?= $missatge ?>

    </h1>

</body>
</html>