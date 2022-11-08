<?php
    $examples = array(
        "hello-world" => "Hello World en PHP!",
        "phpinfo" => "La fonction phpinfo()",
        "variables" => "Les variables en PHP",
        "arrays" => "Les tableaux en PHP",
        "json" => "Manipulation du JSON",
        "php-to-javascript" => "Passer des valeurs PHP au JavaScript"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemples PHP</title>
</head>
<body>
    <h1>Liste d'exemples en PHP</h1>
    <ol>
        <?php
            foreach ($examples as $key => $value) {
        ?>
            <li>
                <a href="learning/<?= $key ?>"><?= $value ?></a>
            </li>
        <?php
            }
        ?>
        <li>
            <a href="pokedex.php">Pokédex</a>
        </li>
    </ol>
</body>
</html>