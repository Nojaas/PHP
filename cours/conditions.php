<?php

$solde = 1500;

if ($solde <= -200) {
    echo 'Compte bloqué.<br>';

} elseif ($solde < 0) {
    echo 'Vous êtes à découvert !<br>';

} else {
    echo 'RAS<br>';
}

echo 'Solde: ' . $solde;
echo '<hr>';

$statut = "administrateur";

switch ($statut) {
    case 'administrateur':
        echo 'Bienvenue dans le back office.<br>';
    // Un administrateur a les droits d'un modérateur
    // break;
    case 'moderateur':
        echo 'Voici les cas nécessitant votre intervention.<br>';
        break;
    default:
        echo 'Bonjour !<br>';
        break;
}
echo 'Statut: ' . $statut;


// Conditions ternaires
# Est-ce que 5 est supérieur à 10 ?

if (5 > 10) {
    $resultat = 'supérieur';
} else {
    $resultat = 'inférieur';
}

//       condition ?   si true   :  si false
$resultat = 5 > 10 ? 'supérieur' : 'inférieur';

// Condition ternaire raccourcie: opérateur Elvis
// (retourne la 1e valeur qui équivaut à true)
$elvis = false ?: 'valeur par défaut';
