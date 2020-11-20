
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $km = 1;
    ?>

<p><?php echo $km; ?>

<!-- on definit notre variable au chiffre 1 et grace à la ligne 14 permet d'afficher la valeur de la varaible-->

<?php $km = 3; ?>
<p><?php echo $km; ?>
<!-- ligne 16 on lui dit en gros stop le km qui a initialement 1 sera maintenant 3 et la ligne 17 va permettre de l'afficher-->

<?php $km = 125; ?>
<p><?php echo $km; ?></p>
<!-- ligne 19 on lui dit en gros stop le km qui a initialement 1 sera maintenant 125 et la ligne 20 va permettre de l'afficher-->

<!-- http://localhost/ExercicePHP/ex3.php -->
</body>
</html>