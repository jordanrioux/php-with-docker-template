<?php
    $examples = array(
        "hello-world" => "Hello World en PHP!",
        "phpinfo" => "La fonction phpinfo()",
        "variables" => "Les variables en PHP"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemples PHP</title>
    <link rel="stylesheet" href="./public/stylesheets/styles.css">
    <script type="module" src="./public/javascripts/app.js"></script>
</head>
<body>
    <h1>Liste d'exemples en PHP</h1>
    <ol>
        <?php foreach ($examples as $key => $value) { ?>
            <li>
                <a href="learning/<?= $key ?>"><?= $value ?></a>
            </li>
        <?php } ?>
    </ol>
</body>
</html>