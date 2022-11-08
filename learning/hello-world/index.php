<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World en PHP!</title>
</head>
<body>
    <h1>Hello World en PHP!</h1>
    <!-- 
        On insère le code PHP dans les balises <?php /* commentaires */ ?> 

        Le code PHP est exécuter sur le serveur et il sert à générer la réponse qui consiste à du HTML (ou autre).
        Ce code n'est pas visible! Regarder la source de la page généré!
    -->
    <?php echo "Hello World!"; ?>
    <br><br>

    <!-- 
        Il est également possible d'utiliser une syntaxe raccourcie pour afficher une valeur directement
        au lieu d'ouvrir les balises PHP et faire le echo.

        NOTE: "valeur" peut bien évidemment être une variable sans problème.
    -->
    <?php echo "valeur1"; ?>
    <br>

    <?= "valeur" ?>
    <br>

    <!-- 
        Il est possible d'ouvrir et de fermer plusieurs balises PHP.
        L'important est que le code utilisé dans ces balises ait une syntaxe valide une fois "combiné" ensemble.
    -->
    <?php
        // Le if commence ici et se termine plus tard
        if (true) {
    ?>
        <p>Du beau HTML qui sera visible vu que la condition est <em>true</em>.</p>
    <?php 
        // Fermeture du if précédent
        } 
    ?>

    <?php if (false) { ?>
        <p>Du beau HTML qui NE sera PAS visible vu que la condition est <em>false</em>.</p>
    <?php } ?>

    <!-- 
        Il est possible d'utiliser une syntaxe alternative sans "accolades" si vous préférez (comme Python)
        https://www.php.net/manual/en/control-structures.alternative-syntax.php
    -->
    <?php if (true): ?>
        <strong>Du code HTML...</strong>
    <?php endif; ?>
</body>
</html>