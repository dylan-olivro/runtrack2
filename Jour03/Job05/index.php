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
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
    $tabVowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
    $tabConsonants = ['b', 'B', 'c', 'C', 'd', 'D', 'f', 'F', 'g', 'G', 'h', 'H', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'v', 'V', 'x', 'X', 'z', 'Z'];
    $countConsonants = 0;
    $countVowels = 0;

    for ($i = 0; isset($str[$i]) != null; $i++) {

        for ($x = 0; isset($tabVowels[$x]); $x++) {
            if ($str[$i] == $tabVowels[$x]) {
                $countVowels++;
            }
        }

        for ($x = 0; isset($tabConsonants[$x]); $x++) {
            if ($str[$i] == $tabConsonants[$x]) {
                $countConsonants++;
            }
        }
    }
    // echo $str[$i] . " = " . $x . "</br>";

    // $signal = 0;
    // foreach ($tabVowels as $vowels) {

    //     if ($str[$i] == $vowels) {
    //         $signal = 1;
    //         $countVowels++;
    //     }
    // }
    // if ($signal == 0) {

    //     $countConsonants++;
    // }
    // for ($i = 0; isset($str[$i]) != null; $i++) {

    //     if (in_array($str[$i], $tabVowels)) {
    //         $countVowels++;
    //     } else if ($str[$i] >= 'a' && $str[$i] <= 'z') {
    //         $countConsonants++;
    //     }
    // }

    ?>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        td,
        th {
            border: 1px solid;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $countConsonants ?></td>
                <td><?php echo $countVowels ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>