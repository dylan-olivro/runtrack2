<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">

        <input type="int" id="nombre" name="nombre" placeholder="Nombre">

        <input type="submit">
        <br>
    </form>
    <?php
    // foreach ($_GET as $key => $value) {

    //     if ($_GET['nombre'] % 2 == 0) {
    //         echo $_GET['nombre'] . " est un nombre pair";
    //     } else {
    //         echo $_GET['nombre'] . " est un nombre impaire";
    //     }
    // }
    foreach ($_GET as $key => $value) {

        if ($value == null) {
            echo '';
        } elseif ($value % 2 == 0) {
            echo $value . " est un nombre pair";
        } else {
            echo $value . " est un nombre impaire";
        }
    }

    ?>
</body>

</html>