<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><?php
function identite($firstName, $name, $age)
{
    return 'Bonjour ' . $firstName.' '.$name. ' tu as ' .$age. ' ans.';
}
    echo identite('Fabien','Coyez',28);

?>

<!-- j'ai crée une fonction avec function
pour executer une fonction en écrivant son nom suivi des parentheses ouvertes

je lui ai donné un nom (il doit commencer par une lettre attantion c'est sensible à la casse entre majuscule et minuscule)
je lui ai donné des parametres séparé par une virgule

j'ai ouvert les acolades

dedans j'ai mis return c'est comme un echo mais invisible pour  l'utilisateur, Une instruction return qui permet de renvoyer une variable.

'Bonjour ' chaine de caractere entre simple cote sur php l'espace entre le mot et la deuxième cte permet de faire l'espace directement
. $firstName. les points permet de faire la concaténation associé les chaines de caractère entre elle
le ' ' permet d'avoir un espace entre les parametre
apres l'acolade on peut metttre l'echo à ne surtout pas mettre dans la fonction cela ne fonctionnera pas, echo va permettre d'afficher le resultat de notre fonction


-->


<!-- ne pas mettre de echo dans une fonction-->


<!-- http://localhost/ExercicePHP/ex20.php -->
</p>


</body>
</html>