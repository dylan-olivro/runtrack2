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
    function calcule($a = 0, $operation = '', $b = 0)
    {
        if ($operation = '+') {
            $result = $a + $b;
            return $result;
        } else if ($operation === '-') {
            $result = $a - $b;
            return $result;
        } else if ($operation === '*') {
            $result = $a * $b;
            return $result;
        } else if ($operation === '/') {
            $result = $a / $b;
            return $result;
        } else if ($operation === '%') {
            $result = $a % $b;
            return $result;
        }
        // switch ($operation) {
        //     case '+';
        //         $result = $a + $b;
        //         return $result;
        //         break;
        //     case '-';
        //         $result = $a - $b;
        //         return $result;
        //         break;
        //     case '*';
        //         $result = $a * $b;
        //         return $result;
        //         break;
        //     case '/';
        //         $result = $a / $b;
        //         return $result;
        //         break;
        //     case '%';
        //         $result = $a % $b;
        //         return $result;
        //         break;
        // }
    }
    echo calcule(10 + 3);
    // echo calcule(10, '+', 3);
    ?>
</body>

</html>