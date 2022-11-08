<?php
// On déclare des tableaux en utilisant array(...)
$array1 = array("foo", "bar");

// Il existe également la syntaxe raccourie [...] (comme en JavaScript)
$array2 = [ "foo", "bar" ];

// print_r permet d'afficher le contenu d'un tableau sous forme de string
print_r($array1);
echo "<br><br>";

// Accéder à chaque élément par son indice
echo $array1[0];
echo "<br>";
echo $array1[1];
echo "<br><br>";

// Ou on peut parcourir tous les éléments d'un tableau avec une boucle for, while, foreach, etc.
foreach ($array1 as $value) {
    echo $value;
    echo "<br>";
}
echo "<br><br>";

// En PHP, les clés d'un tableau ne sont obligatoires des nombres comme 0, 1, 2, 3, 4, 5...
// Il est possible d'utiliser des string comme clé d'un tableau. On appelle cela des tableaux associatifs.
//      https://www.w3schools.com/php/php_arrays_associative.asp
// Les valeurs d'un tableau peuvent être n'importe quoi également.
// Pour faire un comparatif, c'est un peu comme un objet litéral en JavaScript où nous accédons aux valeurs par la clé qui est un string.
$array3 = array(
    "key1" => "value1",
    "key2" => 24.99,
    "key3" => 10
);

// Accéder à chaque élément par son indice
echo $array3["key1"];
echo "<br>";
echo $array3["key2"];
echo "<br>";
echo $array3["key3"];
echo "<br><br>";

// On utilise la syntaxe $key => $value pour déclarer une variable pour la clé et une variable pour la valeur automatiquement pour nous.
foreach ($array3 as $key => $value) {
    echo $key . " - " . $value;   // On pourrait aussi faire echo "$key - $value";
    echo "<br>";
}
echo "<br><br>";

// Si nous prenons l'exemple d'un objet en JavaScript, il est possible d'avoir un objet qui contient des objets.
// En PHP, nous ferions cela avec un tableau qui contient des tableaux.
$array4 = array(
    "key1" => array("key1value1", "key1value2", "key1value3", "key1value4"),
    "key2" => array("key2value1", 44, 3.25),
    "key3" => 10,
    "key4" => array("H", "e", "l", "l", "o"),
);

// Puisque le PHP est un langage interprété et non-typé, il est possible d'utiliser des fonctions pour déterminer
// le type des variables comme: is_integer, is_float, is_string, is_array, etc.
foreach ($array4 as $key => $value) {        
    // Si la valeur est un tableau, on va parcourir ce tableau pour afficher toutes les valeurs.
    if (is_array($value)) {
        foreach ($value as $arrayKey => $arrayValue) {
            echo "[array] Clé='$arrayKey', Valeur='$arrayValue'";
            echo "<br>";
        }
    } else {
        // Si ce n'est pas un tableau, on affiche sa valeur tout simplement
        echo "[not array] Clé='$key', Valeur='$value'";
        echo "<br>";
    }        
    echo "<br>";
}