<?php
$mois = array('janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');
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
       
       for ($numero = 0 ; $numero < 12 ; $numero++)
       {
           echo '<p>' . $mois[$numero] . '<p>';
       }
        

?></p>

<!-- tuto de openclassrooms sur les tableaux en PHP-->


<!-- 
Qu'est-ce qu'une boucle ?
Je me répète : une boucle est une structure qui permet de répéter les mêmes instructions plusieurs fois.

Tout comme pour les conditions, il y a plusieurs façons de réaliser des boucles. Au bout du compte, cela revient à faire la même chose : répéter les mêmes instructions un certain nombre de fois.
Nous allons voir trois types de boucles courantes:

while

do… while

for  

l'intérêt de la bouclefor. Il y a trois instructions condensées, chacune séparée par un point-virgule.

$numero = 0    La première est l'initialisation : cette première instruction est utilisée pour préparer notre variablecompteur. Dans notre cas, on initialise la variable à 0.

$ numero <12     La seconde est la condition c'est la condition qui dit si la boucle doit être répétée ou non. Tant que la condition est vraie, la boucleforcontinue.

$numero ++      l'incrémentation : cette dernière instruction est exécutée à la fin de chaque tour de boucle pour mettre à jour la variablecompteur. La quasi-totalité du temps on fera une incrémentation, mais on peut aussi faire une décrémentation (variable--) ou encore n'importe quelle autre opération (variable += 2;pour avancer de 2 en 2 par exemple). 

echo pour faire apparaitre le resultat 

<p> pour faire apparaitre le php

$mois[$numero] 


-->
   
   <!--http://localhost/ExercicePHP/ex13tableau.php-->

</body>
</html>