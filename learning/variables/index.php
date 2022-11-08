<?php
// NOTE: Si votre fichier PHP ne contient aucun code HTML (seulement du PHP), il est recommandé de ne pas fermer 
//       la balise <?php et laisser le PHP s'en occuper pour empêcher des espaces inutiles la réponse générée.


// Les variables commencent avec un $
$a = 1;
$b = 2.2;
$firstname = "Billy";
$lastname = "Bob";

// Le . est utilisé pour concaténer des chaînes de caractères
$fullname = $firstname . " " . $lastname;

// Ou encore en utilisant le "string interpolation" qui est par défaut en PHP lorsque nous utilisons " "
$fullname2 = "$firstname $lastname";
$fullname3 = '$firstname $lastname';    // Ne va pas interpoler les variables vu que nous utilisons ' '

// On utilise echo pour "afficher" les variables dans le HTML
echo $a;
echo "<br><br>";

echo $b;
echo "<br><br>";

echo $fullname;
echo "<br>";
echo $fullname2;
echo "<br>";
echo $fullname3;
echo "<br>";

// Toutes les espace ici sont ignorés vu que nous ne fermons pas la balise <?php 
// Cependant, si on ferme la balise, toutes les espaces avant et après vont apparaître dans la réponse générée...


// Fermer la balise <?php ici et regarder la source de la page, il devrait y avoir des lignes vides
// <fermer ici>




























