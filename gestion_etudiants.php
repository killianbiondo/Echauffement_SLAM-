<?php
// Classe pour gérer la liste d'étudiants
class GestionEtudiants {
    private $etudiants = [];

    // Ajouter un ou plusieurs étudiants à la liste
    public function ajouterEtudiants(...$noms) {
        foreach ($noms as $nom) {
            if (!in_array($nom, $this->etudiants)) {
                $this->etudiants[] = $nom;
            } else {
                echo "L'étudiant $nom est déjà dans la liste.\n";
            }
        }
    }

    // Supprimer un ou plusieurs étudiants de la liste
    public function supprimerEtudiants(...$noms) {
        foreach ($noms as $nom) {
            $index = array_search($nom, $this->etudiants);
            if ($index !== false) {
                unset($this->etudiants[$index]);
                // Réindexer le tableau
                $this->etudiants = array_values($this->etudiants);
                echo "L'étudiant $nom a été supprimé.\n";
            } else {
                echo "L'étudiant $nom n'est pas dans la liste.\n";
            }
        }
    }

    // Trier les étudiants par ordre alphabétique
    public function trierEtudiants() {
        sort($this->etudiants);
        echo "La liste d'étudiants a été triée.\n";
    }

    // Afficher la liste d'étudiants
    public function afficherEtudiants() {
        if (empty($this->etudiants)) {
            echo "Aucun étudiant dans la liste.\n";
        } else {
            echo "Liste des étudiants :\n";
            foreach ($this->etudiants as $etudiant) {
                echo "- $etudiant\n";
            }
        }
    }
}

// Exemple d'utilisation du programme
$gestion = new GestionEtudiants();

// Ajouter des étudiants
$gestion->ajouterEtudiants("Alice", "Bob", "Charlie", "Daniel");
$gestion->afficherEtudiants();

// Supprimer un étudiant
$gestion->supprimerEtudiants("Bob");
$gestion->afficherEtudiants();

// Trier les étudiants
$gestion->trierEtudiants();
$gestion->afficherEtudiants();

?>