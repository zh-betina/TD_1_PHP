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
        <h1>Exo 4.1</h1>
        <?php
        $tabE1 = [
            'Frédérique' => 12,
            'Silvia' => 3,
            'Julien' => 19,
            'Lionel' => 12,
            'Mario' => 12,
            'Andrea' => 9,
            'Gérard' => 3
        ];

        ksort($tabE1);

        foreach($tabE1 as $student => $result) {
            echo "<p>$student</p>";
        }
        ?>
    </main>
</body>

</html>