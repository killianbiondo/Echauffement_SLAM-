<?php

// Fonction pour inverser une chaîne de caractères
function inverser_chaine($chaine) {
    // Utilisation de la fonction PHP strrev() pour inverser la chaîne
    return strrev($chaine);
}

// Test de la fonction avec la chaîne "SLAM"
$chaine = "SLAM";
$chaine_inversee = inverser_chaine($chaine);

// Affichage du résultat
echo "Chaîne originale : " . $chaine . "\n";
echo "Chaîne inversée : " . $chaine_inversee . "\n";

?>