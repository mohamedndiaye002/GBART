<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Generateur de BART</title>
</head>

<body>
    <div class="tableau-div">


        <?php

        if (isset($_GET['nb_lignes'])) {
            $nb_ligne = $_GET['nb_lignes'];
        }
        else{
            $nb_ligne = 10;
        }

        for ($i = 0; $i < $nb_ligne; $i++) {
            echo "<p>Je ne recopierai pas l'exemple de valentin</p>";
        }
        ?>

    </div>

</body>

</html>