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
       
       echo $mois[4];
        

?></p>

<!-- tableau indexé. Le premier indice du tableau est alors 0 (chaque nouvel ajout est associé à l'indice immédiatement supérieur au plus grand indice déjà utilisé). Ainsi, l'élément du tableau associé à l'indice 0 contient la valeur 'valeur1' (et les suivants 1, 2, etc.)  -->
   
<!--  le [5] permet d'afficher le 5eme index  ici juin car dans un tableau execel on commence toujours par 0 et ici du coup 0 et janvier etc...-->

   <!--http://localhost/ExercicePHP/ex12tableau.php-->

</body>
</html>