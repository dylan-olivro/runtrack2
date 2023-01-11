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
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $tabVowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

    for ($i = 0; isset($str[$i]) != null; $i++) {

        foreach ($tabVowels as $vowels) {

            if ($str[$i] == $vowels) {
                echo $str[$i];
            }
        }
    }

    // for ($i = 0; isset($str[$i]) != null; $i++) {

    //     for ($x = 0; isset($tabVowels[$x]); $x++) {

    //         if ($str[$i] == $tabVowels[$x]) {
    //             echo $str[$i];
    //         }
    //     }
    // }
    ?>
</body>

</html>