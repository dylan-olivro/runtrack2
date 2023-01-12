<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" id="firstname" name="firstname">
        <input type="text" id="lastname" name="lastname">
        <input type="submit" name="submit">
        <br>
        <?php

        $count = 0;

        foreach ($_POST as $key => $value) {
            if ($value != '') {
                $count++;
            }
        }
        echo $count;
        ?>
    </form>
</body>

</html>