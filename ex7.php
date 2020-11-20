<?php
$age = 20;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if($sage >= 18 && $age < 130){?>
    <p> vous etes majeur !</p>}
<?php } elseif($age < 18 && $age > 0) { ?>
    <  p> vous etes mineur !</p>
<?php } else { ?>
    <p> mytho ! </p>
<?php } ?>

<!-- 
Créer une variable age et l'initialiser avec une valeur.

Si l'âge est supérieur ou égale à 18, afficher "Vous êtes majeur". Dans le cas contraire, afficher "Vous êtes mineur".

ici thomas nous à expliquer la programmation la plus propre possible 
on ouvre php condition (avec des delimitations et des esperluettes) entre acolade un paragraphe à mettre

autre condition avec elseif (sinon si) si la premiere n'est pas respecter on fait exactement la meme chose

derniere condition avec un else (sinon) si tu ne respecte pas les 2 premieres regles alors affichera le paragraphe tu es un mytho

http://localhost/ExercicePHP/ex7.php 
-->
</body>
</html>