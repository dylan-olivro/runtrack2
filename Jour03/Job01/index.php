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

    $array = [200, 204, 173, 98, 171, 404, 459];

    foreach ($array as $key) {
        if ($key % 2 == 0) {
            echo $key . '&nbsp je suis paire <br>';
        } else {
            echo $key . '&nbsp je suis impaire<br>';
        }
    }
    ?>
</body>

</html>