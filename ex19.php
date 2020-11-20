
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><?php
function stats($number, $number1){
    if($number > $number1 ) {
        return 'le premier nombre est le plus grand';
    } elseif($number < $number1) {
        return 'le premier nombre est le plus petit';
    } elseif($number == $number1 ) {
        return 'les deux nombre sont identiques';
    }
}
echo stats(8,16);

?>
</p>
<!-- 
Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux 

return = info envoyée comme le echo, sans que ce soit visible sur mon navigateur
attention pas de echo dans les fonctions

echo c'est l'affichage de la fonction

si on marque deux parametres il faut marquer dans echo les 2 parametres 


 http://localhost/ExercicePHP/ex19.php

crer un fonction nomer puis 2 paramet
acolade condition on va comparer 
else if
else if 
-->