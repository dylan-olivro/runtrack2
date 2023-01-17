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


    function leetSpeak($str)
    {
        // $tab = ['a', 'A', 'b', 'B', 'e', 'E', 'g', 'G', 'l', 'L', 's', 'S', 't', 'T'];
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] == 'a' || $str[$i] == 'A') {
                $str[$i] = '4';
            } elseif ($str[$i] == 'b' || $str[$i] == 'B') {
                $str[$i] = '8';
            } elseif ($str[$i] == 'e' || $str[$i] == 'E') {
                $str[$i] = '3';
            } elseif ($str[$i] == 'g' || $str[$i] == 'G') {
                $str[$i] = '6';
            } elseif ($str[$i] == 'l' || $str[$i] == 'L') {
                $str[$i] = '1';
            } elseif ($str[$i] == 's' || $str[$i] == 'S') {
                $str[$i] = '5';
            } elseif ($str[$i] == 't' || $str[$i] == 'T') {
                $str[$i] = '7';
            }
        }
        return $str;
    }
    $x = "Salut les hackeur.";
    echo leetSpeak($x);


    // function leetSpeak($str)
    // {
    //     $tab = ['a', 'e'];
    //     for ($i = 0; isset($str[$i]); $i++) {
    //         for ($a = 0; isset($tab[$a]); $a++) {
    //             if ($str[$i] == $tab[$a]) {
    //                 $str[$i] = 'a';
    //             }
    //         }
    //     }
    //     return $str;
    // }
    // $x = "aaefehas";
    // echo leetSpeak($x);

    ?>
</body>

</html>