<?php
$nombre_entier = 0;
$nombre_entier = retour_entier($nombre_entier);
echo "Le nombre entier est $nombre_entier\n";
// comment 
// comment 2 
// comment 3

function retour_entier($nombre_entier)
{
    $nombre_entier = readline("entrez un nombre entier superieur Ã  zero\n");
    return $nombre_entier;
}
