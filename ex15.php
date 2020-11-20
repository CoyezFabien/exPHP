<?php
$departement = ['02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php   foreach($departement as $departe){ ?>
        <p> <?= $departe ?> </p>
        <?php}?>

<!-- tuto de openclassrooms sur les tableaux en PHP-->


<!--  -->
   
<!--Avec le tableau de l'exercice 4, afficher toutes les valeurs de ce tableau-->

<!-- Pour parcourir un tableau associatif et par exemple afficher les valeurs les unes après les autres, nous allons en revanche être obligés d’utiliser une boucle foreach qui est une boucle créée spécialement pour les tableaux. 

Ici, nous utilisons une syntaxe de type foreach($tableau as $clef => $valeur). Cette syntaxe nous permet de récupérer à la fois les valeurs du tableau qui vont être stockées dans la variable qu’on a ici appelée $valeur ainsi que les clefs associées à chaque valeur.

Lors du premier passage dans la boucle, la première paire clef => valeur du tableau va être récupérée et affichée grâce à echo puis foreach va nous permettre de passer à la paire suivante clef => valeur du tableau qu’on va afficher lors du deuxième passage dans la boucle et etc. jusqu’à la fin de notre tableau.
 <p></p> permet d'avoir un retour à la ligne
Précédent
-->


<!-- Tableau associatif
Les tableaux peuvent également comporter des indices sous forme de texte. On parle alors de tableau associatif. A un terme est associée une valeur comme dans les exemples suivants:

$tableau = ['nom' => 'dupont', 'prenom' => 'jean'];

Ici, 02, 59 et 60.... sont les clefs ou indices du tableau et « Aisne », « Nord » et « Oise » sont les valeurs associées. Notez bien l’utilisation du signe => qui sert à associer une clef à une valeur. -->

 

<!-- 
Aisne (02)
Nord (59)
Oise (60)
Pas-de-Calais (62)
Somme (80) -->


   <!--http://localhost/ExercicePHP/ex15.php-->

</body>
</html>
</html>