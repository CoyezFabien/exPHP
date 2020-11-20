<?php
    $gender = 'femme';
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
        if( $gender != 'homme')
        {
            echo 'tu es une developpeuse';
        }
        else
        {
            echo 'tu es un developpeur';
        }

?></p>


<!-- Traduire ce code avec des if et des else :


    echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
-->
   
   <!--http://localhost/ExercicePHP/ex9.php-->

</body>
</html>