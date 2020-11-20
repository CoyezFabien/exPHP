<?php
   $age = 36;
   $gender = 'femme'

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
<p><?php

if ($gender == 'homme' && $age >=18 && $age <=100)
{
    echo 'vous etes un homme et vous etes majeur';
}
else if ($gender == 'homme' && $age >=0 && $age <=18)
{
    echo 'vous etes un homme et vous etes mineur';
}
if ($gender == 'femme' && $age >=18 && $age <=100)
{
    echo 'vous etes une femme et vous etes majeur';
}
else if ($gender == 'femme' && $age >=0 && $age <=18)
{
    echo 'vous etes une femme et vous etes mineur';
}


?></p>
    

    <!-- Créer deux variables age et gender. La variable gender peut prendre comme valeur :Homme ou Femme

En fonction de l'âge et du genre afficher la phrase correspondante :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas.

si vous etes un homme et un age entre >=18 et <100 " vous etes un homme et vous etes majeur
si vous etes un homme et un age entre >=0 et < 18 " vous etes un homme et vous etes majeur

si vous etes une femme et un age entre >=18 et <100 " vous etes une femme et vous etes majeur
si vous etes une femme et un age entre >=0 et < 18 " vous etes une femme et vous etes majeur






http://localhost/ExercicePHP/ex8.php 
-->

 
</body>
</html>