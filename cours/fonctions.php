<?php

// Nombre de fonctions prédéfinies sur l'installation de PHP:
echo 'Nombre de fonctions internes à PHP disponibles sur cette installation: ';
echo count(get_defined_functions()['internal']) . '<hr>';

//      Données d'entrée        -->     Fonction    -->         Données de sortie
//          INPUT               -->     Fonction    -->             OUTPUT
//        Arguments             -->     Fonction    -->         Valeur de retour

// Fonction pour déterminer si un nombre est pair

function est_pair(int $nombre): bool
{
    return $nombre % 2 === 0;
}

echo '42 est ' . (est_pair(42) ? 'pair' : 'impair') . '<br>';
echo '53 est ' . (est_pair(53) ? 'pair' : 'impair') . '<br>';

$random = rand(1, 100);
echo $random . ' est ' . (est_pair($random) ? 'pair' : 'impair') . '<br>';


echo '<hr>';
/*
 * Créer une fonction palindrome()
 * Qui doit nous indiquer si un mot est un palindrome
 * Exemple de palindrome: ressasser
 */
function palindrome(string $mot): bool
{
    // SOLUTION 1: retourner la chaîne avec une fonction
    // return $mot === strrev($mot);

    // SOLUTION 2: retourner la chaîne manuellement
    // $reverse = '';
    // for ($i = strlen($mot) - 1; $i >= 0; $i--) {
    //     $reverse .= $mot[$i];
    // }
    // return $mot === $reverse;

    // SOLUTION 3: transformer la chaine en tableau et le retourner avec une fonction
    // $mot = str_split($mot);
    // return $mot === array_reverse($mot);

    // SOLUTION 4: transformer la chaine en tableau et le retourner manuellement
    // $mot = str_split($mot);
    // $reverse = [];
    // for ($i = count($mot) - 1; $i >= 0; $i--) {
    //     $reverse[] = $mot[$i];
    // }
    // return $mot === $reverse;

    // SOLUTION 5: parcourir la chaine avec 2 curseurs
    // for (
    //     $i = 0, $j = strlen($mot) - 1;
    //     $i < $j;
    //     $i++, $j--
    // ) {
    //     if ($mot[$i] !== $mot[$j]) {
    //         return false;
    //     }
    // }
    // return true;

    // SOLUTION 6: casser la chaine par caractères en tenant compte des accents, puis solutions précédentes
    $lettres = preg_split('~~u', $mot, -1, PREG_SPLIT_NO_EMPTY);
    return $lettres === array_reverse($lettres);
}

echo 'ressasser ' . (palindrome('ressasser') ? 'est' : 'n\'est pas') . ' un palindrome<br>';
echo 'exemple ' . (palindrome('exemple') ? 'est' : 'n\'est pas') . ' un palindrome<br>';
echo 'réssàssér ' . (palindrome('réssàssér') ? 'est' : 'n\'est pas') . ' un palindrome<br>';