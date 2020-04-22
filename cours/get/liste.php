<?<?php
/*
 * Les superglobales
 *
 * Ce sont des variables accessibles depuis n'importe où
 * Elles permettent de lire / écrire des informations liés à une fonctionnalité spécifique
 *
 * Points communs:
 *      - sont des tableaux associatifs
 *      - s'écrivent $_SUPERGLOBALE
 *
 * $_GET: permet de lire des paramètres situés dans l'URL
 *      les paramètres sont enregistrés dans la Query String:
 *      cle=valeur&prenom=toto
 */

// echo '<pre>' . print_r($_GET, true) . '</pre>';

$liste_produits = [
    [
        'nom' => 'Jeans',
        'couleur' => 'bleu',
        'prix' => 75
    ],
    [
        'nom' => 'Pull',
        'couleur' => 'rouge',
        'prix' => 50
    ],
    [
        'nom' => 'Bonnet',
        'couleur' => 'blanc',
        'prix' => 15
    ]
];

/*
 * 1. Parcourir la liste des produits pour faire afficher un lien vers produit.php
 * 2. Faire afficher le nom du produit dans chaque lien
 * 3. Ajouter une query string à construire avec une fonction interne à PHP (à rechercher):
 *      Query String:       nom=Jeans&couleur=bleu&prix=75
 *      Lien:               produit.php?nom=Jeans&couleur=bleu&prix=75
 */
?>

<ul>
    <?php
    // C'est parti !
    for ($i = 0; $i < count($liste_produits); $i++) {
        echo '<li><a href="produit.php">' . $liste_produits[$i]['nom'] . '</a></li>';
    }

    foreach ($liste_produits as $produit) {
        echo '<li><a href="produit.php">' . $produit['nom'] . '</a></li>';
    }
    ?>
</ul>
