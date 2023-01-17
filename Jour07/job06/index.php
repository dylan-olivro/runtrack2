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
        $tab = ['a', 'A', 'b', 'B', 'e', 'E', 'g', 'G', 'l', 'L', 's', 'S', 't', 'T'];
        for ($i = 0; isset($str[$i]); $i++) {
            if ($str[$i] == $tab[0] || $str[$i] == $tab[1]) {
                $str[$i] = '4';
            } elseif ($str[$i] == $tab[2] || $str[$i] == $tab[3]) {
                $str[$i] = '8';
            } elseif ($str[$i] == $tab[4] || $str[$i] == $tab[5]) {
                $str[$i] = '3';
            } elseif ($str[$i] == $tab[6] || $str[$i] == $tab[7]) {
                $str[$i] = '6';
            } elseif ($str[$i] == $tab[8] || $str[$i] == $tab[9]) {
                $str[$i] = '1';
            } elseif ($str[$i] == $tab[10] || $str[$i] == $tab[11]) {
                $str[$i] = '5';
            } elseif ($str[$i] == $tab[12] || $str[$i] == $tab[13]) {
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