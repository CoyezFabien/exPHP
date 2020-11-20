<?php
    $lastname = 'coyez';
    $firstname = 'fabien';
    $age = 28; 
    ?>
<!--  on peut marquer les variable avant de commencer à écrire le html pour avoir plus de faciliter à les localiser 
le 28 et sans simple cote car c'est un chiffre et pour dire que c'est un chiffre et non un string et n'ajoute pas les simple cote-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<p><?php echo $lastname.  ' ' .$firstname. ' ' .$age; ?></p>
<!-- pour avoir plusieurs variables à la suite sur une seul ligne on peut utiliser les simples cote avec un espace dedans pour marquer l'espace entre chaque varaible le point qui à la concaténisation (design l'action de mettre de bout en bout au moins 2 chaines de caractères) -->
<p><?php echo $firstname; ?></p>
<p><?php echo $age; ?></p>



</body>
</html>

<!--http://localhost/ExercicePHP/exercice2.php -->