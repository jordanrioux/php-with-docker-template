<?php
    // ========================================================================
    // ATTENTION: Modifier le fichier database.php pour mettre vos crédentiels
    // ========================================================================
    require "inc/functions/database.php";

    function redirect($url) {
        header("Location: " . $url); 
    }


    $db = db_connect();

    $name = "";
    $nameErrorMessage = "";
    $type = "";

    if (isset($_POST["submit"])) {
        $name = $_POST["pokemonName"];
        $type = $_POST["pokemonType"];

        // TODO: Faire la validation de tous les champs!
        if (empty($name)) {
            $nameErrorMessage = "The pokemon name is mandatory.";
        } else {
            // TODO: Si tout est valide, on INSERT dans les tables pokemon            
      
            // TODO: Récupérer le ID du nouveau pokemon inséré
            
            // TODO: on INSERT dans les tables pokemon avec le ID du pokémon
            
            // TODO: Redirection vers une page de confirmation et arrêter le script
        }
    }

    $sql = "select * from type;";
    $result = pg_query($db, $sql);
    if (!$result) {
        echo pg_last_error($db);
        exit;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires en PHP (commentaires)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/stylesheets/style.css">
    <script type="module" src="public/javascripts/app.js"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Google_Forms_2020_Logo.svg/1524px-Google_Forms_2020_Logo.svg.png" height="40">
                <strong class="ms-2">Forms</strong>
            </a>
        </div>
    </nav>

    <main>
        <div class="container py-5">
            <h2 class="mb-5 text-center">Ajout d'un pokémon</h2>
            
            <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="pokemon-name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="pokemon-name" name="pokemonName" value="<?=$name ?>">

                        <!--
                            Pour les messages d'erreur, il faut simplement générer le HTML correspondant s'il y a une erreur.
                         -->
                        <div class="<?=(!empty($nameErrorMessage) ? "" : "d-none"); ?>">
                            <?=$nameErrorMessage ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="pokemon-type" class="form-label">Type</label>
                        <select class="form-select" id="pokemon-type" name="pokemonType">
                            <option value="-1">Choisir le type</option>
                            <option value="1">Grass</option>

                            <!--  
                                TODO: On parcourt le résultat du SELECT un par un et on génère le HTML pour chaque option.
                                S'il y a un refresh, on vérifie l'élément précédemment sélectionné pour le sélectionner par défaut.
                            -->
                            

                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="pokemon-description" class="form-label">Description</label>
                        <textarea class="form-control" id="pokemon-description" rows="3"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">HP</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Attack</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Defense</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary" type="submit" name="submit">Ajouter</button>
                    </div>
                </div>
            </form>            
        </div>
    </main>

  
    <footer class="my-5 text-muted text-center text-small">
        <div class="container">
            <p>&copy; 2022 Forms</p>
        </div>
    </footer>
</body>
</html>
<?php pg_close($db); ?>