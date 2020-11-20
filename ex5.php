<?php 
$answer = 'non';

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
    
    if ($answer == 'oui')
    {
        echo 'vous avez repondu ' . $answer;
    }
    else if ($answer == 'non')
    {
        echo  'vous avez répondu '. $answer;
    }
    

    $age = ($answer == 'oui') ? 'vous avez repondu ' .$answer : 'vous avez répondu '. $answer;
      echo $age;



    ?></p>
  <!--
    
  $majeur = ($age >= 18) ? true : false;

  
Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher : Bonjour + name + , comment vas-tu ?.

ici on va utiliser des conditions avec if (si) et else if (sinon si) on commence par un if entre parenthèse les conditions que la variable $answer est strictement egal à 'oui' et on lui delimite avec des acolades dedans on met un echo (comme une alerte dans jquery) qui va permettre d'afficher notre php 

on lui donne une autre condition else if (sinon si)
la reponse est non alors un autre texte apparait 

https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/912046-les-conditions

allez tout en bas pour regarder comment faire des ternaires




http://localhost/ExercicePHP/ex5.php 

  -->
</body>
</html>