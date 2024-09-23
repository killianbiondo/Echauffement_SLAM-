<?php

// Fonction pour calculer la somme des éléments d'un tableau
function sommeTableau($tableau) {
    $somme = 0;
    foreach ($tableau as $element) {
        $somme += $element;
    }
    return $somme;
}


// Exemple d'utilisation
$tableau = [1, 2, 3, 4, 5];
echo "La somme des éléments du tableau est : " . sommeTableau($tableau);
?>