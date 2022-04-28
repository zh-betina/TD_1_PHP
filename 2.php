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
        <h1>Exo 2</h1>
        <h2>List non ordonnée</h2>
        <?php
            $list = array();
            $maxNb = 10;

            for ($i = 1; $i <=10; $i++) {
                for ($j = 1; $j <= 7; $j++) {
                    $product = $i * $j;
                    array_push($list, $product);
                }
            };

            echo "<pre>";
            var_dump($list);
            echo "</pre>";
        ?>
        <h2>Table HTML</h2>
        <table>
            <tbody>
                <?php
                $rows = 7;
                $columns = 10;

                for ($j = 0; $j <= $rows; $j++) {
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td class='td--head-2'>i X j</td>";
                    } else {
                        echo "<td class='td--head'>$j</td>";
                    }
                    for ($i = 1; $i <= $columns; $i++) {
                        if ($j == 0) {
                            $no = $i;
                            echo "<td class='td--head'>$i</td>";
                        } else {
                            $calc = $i * $j;
                            echo "<td class='td--default'>$calc</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>