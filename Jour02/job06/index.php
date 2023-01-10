<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $largeur = 20;
    $longueur = 10;

    while ($largeur <= 2000) { ?>
        <div style=" 
        height: <?php echo $longueur ?>px; 
        width: <?php echo $largeur ?>px; 
        border: 1px solid; 
        margin-bottom: 1rem;"></div>
    <?php $largeur *= 2;
    } ?>
</body>

</html>