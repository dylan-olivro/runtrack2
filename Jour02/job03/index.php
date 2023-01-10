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
    for ($x = 0; $x <= 100; $x++) {
        if ($x <= 20) {
            echo '<i>' . $x . '</i> <br>';
        } else if ($x == 42) {
            echo 'La Plateforme_<br>';
        } else if ($x >= 25 && $x <= 50) {
            echo '<u>' . $x . '</u> <br>';
        } else {
            echo $x . '<br>';
        }
    }
    ?>
</body>

</html>