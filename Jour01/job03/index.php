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
    $boolean = true;
    $entier = 10;
    $float = 1.10;
    $string = 'string';
    ?>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>$boolean</td>
                <td><?php echo $boolean ?></td>
            </tr>
            <tr>
                <td>Integer</td>
                <td>$entier</td>
                <td><?php echo $entier ?></td>
            </tr>
            <tr>
                <td>Float</td>
                <td>$float</td>
                <td><?php echo $float ?></td>
            </tr>
            <tr>
                <td>String</td>
                <td>$string</td>
                <td><?php echo $string ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>