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
        <h1>Exo 3.1</h1>
        <?php
            $t = ['a'=>'z', 10=>20, 'toto'=>'titi', 'php'];
            echo "<pre>";
            var_dump($t);
            echo "</pre>";
        ?>
        <h2 class="txt--underline">Les clés de ce tableau sont les suivants :</h2>
        <?php 
            echo "<p>";
            foreach ($t as $key => $value) {
                echo "$key, ";
            };
            echo "</p>";
        ?>
        <h2 class="txt--underline">Les valeurs : </h2>
        <?php
            echo "<p>";
            foreach ($t as $value) {
                echo "$value, ";
            }
            echo "</p>";
        ?>
    </main>
</body>
</html>