<?php
$departement = ['02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme'];
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
       
      foreach($departement as $clefs => $valeur)
      {
          echo 'le departement ' . $valeur . ' à le numero de departement ' . $clefs;
      }
        

?></p>

<!-- tuto de openclassrooms sur les tableaux en PHP-->


<!--  -->
   
<!--Avec le tableau de l'exercice 4, afficher toutes les valeurs de ce tableau ainsi que les clés associées. Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département-->







   <!--http://localhost/ExercicePHP/ex16.php-->

</body>
</html>