<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP values to JavaScript</title>
</head>
<body>
    <?php
        // Imaginer des données qui viennent d'un API, d'une base de données, etc.
        $firstname = "Billy";
        $lastname = "Bob";
    ?>
    <script>
        // ==== IMPORTANT ====
        // Regarder le code source généré par le PHP!

        // Création de variables JavaScript au moment de la génération du code PHP
        const firstname = "<?= $firstname ?>";
        const lastname = "<?= $lastname ?>";
        alert(`Avec variables: ${firstname} ${lastname}`);

        // Exemple sans création de variables
        alert(`Sans variables: <?= $firstname ?> <?= $lastname ?>`);
    </script>

    <?php
        // Exemple un peu plus avancé avec le JSON
        $jsonArray = array(
            'firstname' => 'Billy', 
            'lastname' => 'Bob', 
            'age' => 91
        );
    ?>
    <script>
        // Le PHP convertir le tableau en string json qui sera passé au JavaScript qui va utilisé JSON.parse(...) 
        // pour convertir la string en un objet litéral pour pouvoir l'utiliser.
        const json = JSON.parse('<?=json_encode($jsonArray) ?>');

        // Faire ce que vous voulez avec l'objet du JSON
        const information = `JSON: ${json.firstname} ${json.lastname} a ${json.age} ans.`;

        // Une alerte?
        alert(information);

        // Ajouter dynamiquement un élément dans la page?
        const text = document.createElement("p");
        text.innerText = information;
        document.body.append(text);
    </script>
</body>
</html>