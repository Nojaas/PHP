<?php

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
 * 1. Vérifier que le formulaire ait été envoyé
 * 2. S'il a été envoyé, afficher des liens pour les produits
 * 3. N'afficher que les produits dont le nom contient le terme de recherche
 * 4. Faire en sorte que le formulaire de recherche soit insensible à la casse
 */

if (isset($_GET['recherche'])) {
    foreach ($liste_produits as $produit) {

        // Si le nom du produit contient le terme de recherche
        if (stripos($produit['nom'], $_GET['recherche']) !== false) {
            $query_string = http_build_query($produit);
            echo '<a href="produit.php?' . $query_string . '">' . $produit['nom'] . '</a><br>';
        }
    }
}

?>

<form action="recherche.php" method="get">
    <label>Nom du produit</label>
    <input type="text" name="recherche">

    <button type="submit">Rechercher</button>
</form>
