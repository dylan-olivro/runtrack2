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
    $x = 0;

    while ($x <= 1337) {
        if ($x != 26 && $x != 37 && $x != 88 && $x != 1111 && $x != 3233) {
            echo $x . '<br>';
        };
        $x++;
    };
    ?>
    <!-- 26 37 88, 1111 et 3233 -->
</body>

</html>