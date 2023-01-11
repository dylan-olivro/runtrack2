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
    $str = "Certaines choses changent, et d'autres ne changeront jamais."; // 60 caracteres
    // $shift = $str[0];
    // $str[0] = $str[-1];
    // $str[-1] = $shift;

    // for ($i = 0; isset($str[$i]) != null; $i++) {
    // }

    // En attendant de trouver mieux
    for ($i = 0; isset($str[$i]) != null; $i++) {
        echo $str[$i - 59];
    }
    ?>
</body>

</html>