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
        <h1>Exo 5.1</h1>
        <?php
        $anneeScolaire = [
            "Rentrée" => [5, 9, 2016],
            "Vacances Toussaint" => [
                "début" => [22, 10, 2016],
                "fin" => [30, 10, 2016]
            ],
            "Vacances Noël" => [
                "début" => [17, 12, 2016],
                "fin" => [2, 1, 2017]
            ], "Vacances d'hiver" => [
                "début" => [11, 2, 2017],
                "fin" => [19, 2, 2017]
            ],
            "Vacances de printemps" => [
                "début" => [1, 4, 2017],
                "fin" => [9, 4, 2017]
            ],
            "Fin des cours" => [8, 7, 2017]
        ];
        ?>
        <?php
        foreach ($anneeScolaire as $key => $value) {
            echo "<p>$key : ";
            $arr = $anneeScolaire[$key];
            if (count($arr) === 3) {
                $date = implode("/", $value);
                echo " $date</p>";
            } else {
                $i = 0;
                foreach ($anneeScolaire[$key] as $key_key => $key_value) {
                    if ($i == 0) {
                        $from = " du " . implode("/", $key_value);
                        $i += 1;
                    } else {
                        $to = " au " . implode("/", $key_value);
                        $i -= 1;
                    }
                }
                echo " $from $to</p>";
            }
        }
        ?>
    </main>
</body>

</html>