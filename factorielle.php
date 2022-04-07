<?php
$valeur_entree = readline("entrez un nombre entier superieur Ã  zero\n");
$valeur_affichage = $valeur_entree;
$valeur_entree = factorielle($valeur_entree);

echo "Le factoriel de $valeur_affichage = $valeur_entree\n";



function factorielle($valeur_entree)
{
    $calcul_factorielle = 1;
    $compteur = 1;
    while ($compteur <= $valeur_entree) {
        $calcul_factorielle = $calcul_factorielle * $compteur;
        $compteur++;
    }
    return $calcul_factorielle;
}
