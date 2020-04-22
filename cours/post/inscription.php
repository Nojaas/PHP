<?php
/*
 * $_POST: permet de lire les données envoyées (via un formulaire) par méthode POST
 *
 * Les données POST ne sont pas visibles sur le navigateur
 * Elles sont envoyées dans le corps de la requête HTTP.
 *
 * "pseudo" requête HTTP:
 *
 *      En-tête: valeur
 *      Autre: exemple
 *
 *      donnees=post&foo=bar
 *
 *
 * GET:     lecture / affichage     formulaire de recherche, page produit
 * POST:    écriture / action       formulaire de connexion, page profil
 */
?>
<form action="traitement.php" method="post">
    <label>Email</label>
    <input type="text" name="email">
    <br>

    <label>Pseudo</label>
    <input type="text" name="pseudo">
    <br>

    <input type="submit" name="inscription">
</form>
