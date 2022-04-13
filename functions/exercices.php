<h1>Exercices sur les fonctions</h1>

<h2>Fonction permettant de capitaliser des mots</h2>
<p>Veuillez entrer un mot :</p>
<form action="" method="post">
    <input type="text" name="word">
    <input type="submit">
</form>

<?php 
$word = isset($_POST['word']) ? $_POST['word'] : NULL;

function captilazeWords($x) {
    return ucwords($x);
}

echo '<br>';
echo ('Le mot après l\'utilisation de la fonction : ' . captilazeWords($word));
?>

<h2>Fonction permettant d'afficher l'année actuelle</h2>
<?php 
echo "Année actuelle : " . date('Y');
?>

<h2>Fonction permettant d'afficher la date et l'heure</h2>
<?php 
echo "Il est actuellement " . date('H:i:s') . " et on est le " . date("d/m/Y")
?>

<h2>Fonction permettant de faire la somme entre deux nombres</h2>
<p>Veuillez rentrer 2 chiffres :</p>
<form action="" method="post">
    <input type="text" name="number1">
    <input type="text" name="number2">
    <input type="submit">
</form>

<?php 
$nbr1 = isset($_POST['number1']) ? $_POST['number1'] : NULL;
$nbr2 = isset($_POST['number2']) ? $_POST['number2'] : NULL;

function sum( $x,  $y) {
    return $x + $y;
}

echo "La somme des deux nombres vaut : " . sum($nbr1, $nbr2);
?>

<h2>Fonction permettant de créer un acronyme à partir d'une chaine de caractère</h2>
<p>Veuillez rentrer une chaine de caractère :</p>
<form action="" method="post">
    <input type="text" name="string">
    <input type="submit">
</form>

<?php 
$str = isset($_POST['string']) ? $_POST['string'] : NULL ;

function convertIntoAcronym($x) {
    return preg_replace('/\b(\w)|./', '$1', $x);
}

echo ("La chaine de caractère devient l'acronyme suivant : " . convertIntoAcronym($str));
?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>

<h2></h2>
<?php 

?>