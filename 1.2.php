<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Td_1_Php</title>
</head>
<body>
    <?php include "./nav.php" ?>
    <main>
        <h1>Exo 1.2</h1>
        <?php
            $voitures = 3;
            $motos = 6;

            echo "J'ai $voitures voitures et $motos motos, j'ai donc ".$voitures + $motos." véhicules.";
            echo "<br/>";
            echo 'J\'ai '.$voitures.' voitures et '.$motos.' motos, j\'ai donc '.$voitures + $motos.' véhicules.';
        ?>
    </main>
</body>
</html>