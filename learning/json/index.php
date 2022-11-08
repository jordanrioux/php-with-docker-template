<?php
// PHP fournit les méthodes json_encode et json_decode pour la manipulation simple du JSON
// Ce sont les équivalents de JSON.stringify et de JSON.parse en JavaScript.

$jsonRepresentedAsArray = array(
    'key1' => 1, 
    'key2' => 2, 
    'key3' => 3, 
    'key4' => 4, 
    'key5' => 5
);

// Va afficher la chaîne de caractères: {"key1":1,"key2":2,"key3":3,"key4":4,"key5":5}
echo json_encode($jsonRepresentedAsArray);
echo "<br><br>";

$jsonAsString = '{ "anotherKey1":1111, "anotherKey2":2222, "k3":3, "k4":4 }';
$jsonAsArray = json_decode($jsonAsString);

// Afficher tout le JSON (e.g. objet stdClass qui se comporte comme un tableau)
print_r($jsonAsArray);
echo "<br>";

// Afficher les éléments du JSON en accédant à leur propriété
echo $jsonAsArray->anotherKey1 . "<br>";
echo $jsonAsArray->anotherKey2 . "<br>";
echo $jsonAsArray->k3 . "<br>";
echo $jsonAsArray->k4 . "<br>";
