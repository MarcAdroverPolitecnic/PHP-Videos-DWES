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

     ?>

    <h1>
        <?php
            if($llegit){
                echo "Has llegit " . $nom;
            }
        ?>

    </h1>

</body>
</html>