<?php
    
    
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

for($i = 0; $i <= 300; $i++)
{
    if($i % 2 != 0){ ?>
    <p> <?= $i; ?></p>
    <?php
    }
}

?>







<!-- Afficher tous les nombres impairs entre 0 et 300, par ordre croissant

on va utiliser une boucle, Concrètement, une boucle permet de répéter des instructions plusieurs fois.
on lui met plusieurs paramettres ici on va initialiser la valeur de la variable donc ici 0 et son maximum jusqu'a quans elle doit se répeter en boucle donc 300 et va l'acrémentater de 1 

if (si) ($i % 2 != 0)
explication on acrémente à chaque tour donc chaque tour c'est +1 +1 +1 etc... 1 , 2 , 3...
chaque tour on recupere le reste de la dicivion ex tour 5 
on a fait 2 X 2 = 4 et le reste c'est 1 si le reste et 1 il est différent à 0 du coup il apparait

ex pour le tour 6

2 x 3 = 6 il n'y a 0 reste du coup il est egal à 0 du coup il n'apparait pas

ex pour le tour 15

2 x 7 = 14 il reste 1 qui est différents du resultat 0 du coup il doit apparaitre

les balises <P> pour avoir un retour à la ligne

?= remplace le echo qui permet de faire apparaitre notre parametre


sort commande pour faire le tri dans l'ordre croissant 
rsort commande pour faire le tri dans l'ordre croissant
-->

 <!--http://localhost/ExercicePHP/ex21.php-->
</body>
</html>