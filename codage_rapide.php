<?php
// Fonction pour calculer la somme des éléments d'un tableau
function sommeTableau($tableau) {
    // Vérifier que le paramètre est un tableau
    if(!is_array($tableau)) {
        return "Erreur: le paramètre doit être un tableau.";
    }

    // Utilisation de array_sum pour calculer la somme des éléments
    $somme = array_sum($tableau);

    // Retourner la somme
    return $somme;
}

// Exemple de test
$tableau_exemple = [1, 2, 3, 4, 5];
echo "La somme des éléments du tableau est: " . sommeTableau($tableau_exemple);

// Fonction pour trouver le plus grand élément dans un tableau
function maxTableau($tableau)
{
// Vérifier que le paramètre est un tableau
    if (!is_array($tableau)) {
        return "Erreur: le paramètre doit être un tableau.";
    }

}

?>



