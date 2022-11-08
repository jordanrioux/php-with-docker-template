<?php
    require_once "inc/functions/database.php";

    $db = db_connect();
    $result = db_query($db, "select * from pokemon");
?>

<?php require_once "inc/shared/header.php"; ?>

    <main>
        <div class="container">
            <div class="pokemon-filter" data-pokemon-filter>
                <div>
                    <button class="is-selected" data-pokemon-type="all" data-selected>All</button>
                </div>

                <!-- Chaque type de pokémon -->
                <div>
                    <button data-pokemon-type="fire">Fire</button>
                </div>
                <div>
                    <button data-pokemon-type="water">Water</button>
                </div> 

            </div>
        </div>

        <div class="pokemon-container container">

            <?php 
                while ($row = pg_fetch_assoc($result)) { 
                    $formattedId = str_pad($row["id"], 3, "0", STR_PAD_LEFT);
                ?>
                <div class="pokemon" data-pokemon="<?=$row["name"] ?>" data-pokemon-id="<?=$row["id"] ?>" data-pokemon-types="Grass">
                    <figure>
                        <img loading="lazy" src="https://assets.pokemon.com/assets/cms2/img/pokedex/detail/<?=$formattedId ?>.png" alt="<?=$row["name"] ?>">
                    </figure>
                    <div class="pokemon-info">
                        <span>#<?=$formattedId ?></span>
                        <h4><?=$row["name"] ?></h4>
                        <div class="types">
                            <?php 
                                $sql = "select t.type 
                                        from pokemon_type 
                                        join type t on pokemon_type.type_id = t.id 
                                        where pokemon_id = " . $row["id"];
                                
                                $typeResult = pg_query($db, $sql);
                                while ($type = pg_fetch_assoc($typeResult)) {  
                                    $type = $type["type"];    
                                    $minimizeType = strtolower($type);
                            ?>
                                <span class="<?=$minimizeType ?>-type"><?= $type ?></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

<?php require_once "inc/shared/footer.php" ?>

<?php pg_close($db); ?>