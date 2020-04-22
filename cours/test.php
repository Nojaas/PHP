<?php

// Commentaire sur 1 ligne
# Autre syntaxe

/*
Commentaire multi-lignes
(C-style)
*/

?>
    <h1>Cours PHP</h1>
<?php

// Instructions d'affichage
echo '<p>Affichage de HTML par PHP</p>';
print 'TEST<br>';


echo '<hr><h2>Types de variables</h2>';

// Nombres entier: int
$int = 42;
var_dump($int);

echo 'Notation décimale (base 10): ';
echo 42;

echo '<br>Notation octale (base 8): ';
echo 042;

echo '<br>Notation héxadecimale (base 16): ';
echo 0xF2;

echo '<br>Notation binaire (base 2): ';
echo 0b1011;


echo '<hr>Nombres décimaux: float';
$float = 4.2;
var_dump($float);


echo '<hr><h3>Chaines de caractères: string</h3>';

$string = 'Entre simples quotes';

$who = 'World';
$hello = "Hello $who ! \u{1F602}";
echo $hello;

echo '<hr><h3>Booléens: bool</h3>';
var_dump(true);
var_dump(false);

echo '<hr><h3>Null</h3>';
var_dump(null);

echo '<hr><h3>Objets: object</h3>';
// Un objet est une instance d'une classe
// On instancie un objet avec "new" suivi du nom de la classe
$obj = new stdClass();
var_dump($obj);

echo '<hr><h3>Tableaux: array</h3>';

// Clés numériques:
$array = [
    'foo',
    'bar',
    'baz',
];
echo '<pre>';
print_r($array);
echo '</pre>';

// Afficher "bar":
echo $array[1];

// Insérer une nouvelle valeur dans le tableau
$array[] = 'toto';

echo '<pre>';
print_r($array);
echo '</pre>';

// Clés associatives
$assoc = [
    'prenom' => 'John',
    'nom' => 'Doe',
    'age' => 42,
];

echo '<pre>';
print_r($assoc);
echo '</pre>';

// Afficher le nom
echo $assoc['nom'];

// Ajouter/Remplacer une valeur dans le tableau:
$assoc[] = 'test';
$assoc['prenom'] = 'Toto';

echo '<pre>';
print_r($assoc);
echo '</pre>';

// Tableau multidimensionnel
$multi = [
    'prenom' => 'John',
    'nom' => 'Doe',
    'age' => 42,
    'amis' => [
        'Jean Dupond',
        'Paul Durand',
    ]
];

echo '<pre>';
print_r($multi);
echo '</pre>';

// Afficher "Paul Durand"
echo $multi['amis'][1];


echo '<hr><h3>Constantes</h3>';
// Inverse d'une variable: la valeur ne peut changer
const MA_CONSTANTE = 'exemple';
var_dump(MA_CONSTANTE);

// Déclarer une constante qui nécessite une expression: define()

echo '<hr><h2>Instructions d\'arrêt de script</h2>';
// exit & die arrêtent l'éxecution du fichier
// exit;
// die;

echo '<hr><h2>Les opérateurs</h2>';

echo '42: ';
var_dump(42 == true);

echo '0: ';
var_dump(0 == true);

/*
 * Liste des valeurs équivalentes à false:
 *      0
 *      0.0
 *      "" (chaîne vide)
 *      "0"
 *      [] (tableau vide)
 *      null
 *      false
 */

# Opérateur "soucoupe volante" (PHP 7+)
var_dump(5 <=> 10);

echo '<br>Opérateurs logiques:';
var_dump(true && false);    # false: les 2 opérandes doivent être à true
var_dump(true || false);    # true: au moins 1 opérande doit être à true
var_dump(true XOR true);    # false: seulement 1 opérande doit être à true
var_dump(!false);                    # true: inverse la valeur booléenne

var_dump(!"0" && !(!42));   # true

// Opérateurs de chaine
$who = 'World';
echo 'Hello ' . $who . ' !<br>';

$str = 'Hello';
$str .= ' World!';

// La priorité des opérateurs:
$operation = 'bar' . (42 - 12) . 'baz';
var_dump($operation);