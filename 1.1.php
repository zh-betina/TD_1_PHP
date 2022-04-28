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
        <h1>Exo 1.1</h1>
        <?php 
            echo "1) "; var_dump(1+2); echo '<br/>';
            echo "2) "; var_dump('1'+'2'); echo '<br/>';
            echo "3) "; var_dump(1 . 2); echo '<br/>';
            echo "4) "; var_dump('1'.'2'); echo '<br/>';
            echo "5) "; var_dump("3 fruits" + '1 légume' . 'donnent'); echo '<br/>';
            echo "6) "; var_dump("3 fruits" . '1 légume' + 'donnent'); echo '<br/>';
            echo "7) "; var_dump(1/2 + true - "-2"); echo '<br/>';
        ?>
    </main>
</body>
</html>