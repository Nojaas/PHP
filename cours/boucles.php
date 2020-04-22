<?php

// for
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// afficher les nombres de 0 à 10, et en même temps, les nombres de 10 à 0
for (
    $i = 0, $j = 10;
    $i <= 10 && $j >= 0;
    $i++, $j--
) {
    echo $i . ' ' . $j . '<br>';
}

/*
 * Afficher des tables de multiplication:
 *      Faire un tableau HTML
 *      Afficher les titres des colonnes et des lignes (<th>)
 *      Afficher les tables de 1 à 10, multipliés de 0 à 10
 */
echo '<table width="100%" border="1">';
// Ligne d'en-têtes
echo '<tr><th></th>';
for ($i = 0; $i <= 10; $i++) {
    echo '<th>' . $i . '</th>';
}
echo '</tr>';

// Tables de multiplication
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    echo '<th>' . $i . '</th>';

    for ($j = 0; $j <= 10; $j++) {
        echo '<td>' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}

echo '</table>';

// Parcourir un tableau
$users = [
    'John Doe',
    'Toto',
    'AymDev',
];

for ($i = 0; $i < count($users); $i++) {
    echo $users[$i] . '<br>';
}
echo '<hr>';

// while
// Exemple d'utilisation de la boucle while (pas adapté au parcourt d'un tableau)
// Problème: le tableau se vide lors de la lecture
while ($item = array_shift($users)) {
    echo $item . '<br>';
}
echo '<hr>';

// do while
// Générer un nombre aléatoire entre 1 & 100 pair

do {
    $nb = rand(1, 100);
    echo $nb . '<br>';
} while ($nb % 2 !== 0);

echo 'Résultat: ' . $nb . '<hr>';

// foreach
$utilisateur = [
    'prenom' => 'John',
    'nom' => 'Doe',
    'age' => 42,
];

foreach ($utilisateur as $valeur) {
    echo $valeur . '<br>';
}

foreach ($utilisateur as $cle => $valeur) {
    echo $cle . ': ' . $valeur . '<br>';
}


echo '<hr>';
/*
 * Afficher les nombres de 1 à 100
 * Pour les multiples de 3, afficher le nombre suivi de "Fizz"
 * Pour les multiples de 5, afficher le nombre suivi de "Buzz"
 * Pour les multiples de 3 et de 5, afficher le nombre suivi de "FizzBuzz"
 */
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . 'FizzBuzz<br>';

    } elseif ($i % 3 === 0) {
        echo $i . 'Fizz<br>';

    } elseif ($i % 5 === 0) {
        echo $i . 'Buzz<br>';

    } else {
        echo $i . '<br>';
    }
}