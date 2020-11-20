<?php
    $age = 9;
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
        if( $age >= 18)
        {
            echo 'tu es majeur';
        }
        else
        {
            echo 'tu es mineur';
        }

?></p>
   
   <!--http://localhost/ExercicePHP/ex10.php-->

</body>
</html>