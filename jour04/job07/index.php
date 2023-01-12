<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            text-align: center;
        }
    </style>
    <form action="" method="get">

        <input type="text" id="hauteur" name="hauteur" placeholder="hauteurs">

        <input type="submit">
        <br>
    </form>
    <?php
    for ($i = 0; $i < $_GET['hauteur']; $i++) {
        for ($k = ($_GET['hauteur'] - $i); $k > 0; $k--) {
            echo " ";
        }
        for ($z = 0; $z <= $i; $z++) {
            echo "*";
        }
        echo "<br />";
    } ?>
</body>

</html>