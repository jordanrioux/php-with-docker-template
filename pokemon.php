<?php
    require_once "inc/functions/database.php";

    $db = db_connect();
    $result = db_query($db, "select * from pokemon where id = 6");
    $pokemon = pg_fetch_assoc($result);

    $formattedId = str_pad($pokemon["id"], 3, "0", STR_PAD_LEFT);
?>

<?php require_once "inc/shared/header.php"; ?>

    <main>
        <div class="container">
            
            <!-- Add details/stats for the pokemon -->
            <div class="pokemon" data-pokemon="<?= $pokemon["name"] ?>" data-pokemon-id="<?= $pokemon["id"] ?>">
                <figure>
                    <img loading="lazy" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/<?= $formattedId ?>.png" alt="<?= $pokemon["name"] ?>">
                </figure>
                <div class="pokemon-info">
                    <span>#<?= $formattedId ?></span>
                    <h4><?= $pokemon["name"] ?></h4>
                </div>
            </div>

        </div>
    </main>

<?php require_once "inc/shared/footer.php" ?>

<?php pg_close($db); ?>