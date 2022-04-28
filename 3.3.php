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
        <h1>Exo 3.3</h1>
        <?php
           $table = ['a' => 2, 10 => 'b', true => 'false', 21 => false, "2" => ["2" => 5, "toto", 2 => "titi"]];
           $table["bon"] = "jour";
           array_push($table, "nuit");
            echo "<pre>";
            var_dump($table);
            echo "</pre>";
        ?>
        <p>La clé assignée par le PHP automatiquement est le chiffre suivant par rapport au dernier élément avec un chiffre assigné</p>
    </main>
</body>
</html>