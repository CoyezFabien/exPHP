<?php
    $name = 'fabien';
    
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
for ($i = 0 ; $i = 100 ; $i++)
{
    if($i % 3 = 0){ ?>
    <p> <?=  'fizz'  ;?></p>
    <?php
    }
    else($i % 5 = 0){ ?>
        <p> <?=  'buzz'  ;?></p>
        <?php
        }
    
}


?>







<!-- Afficher les nombres de 1 à 100. En remplaçant le nombre par un mot selon certaines conditions :

Le mot Fizz s'il est multiple de 3
Le mot Buzz s'il est multiple de 5
Le mot FizzBuzz s'il est multiple de 3 et de 5





-->

 <!--http://localhost/ExercicePHP/ex22.php-->
</body>
</html>