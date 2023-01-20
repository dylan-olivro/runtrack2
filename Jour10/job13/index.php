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
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    try {
        $mysqli = new PDO("mysql:host=$servername;dbname=jour09", $username, $password);

        $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connexion réussie';
    } catch (PDOException $e) {
        // echo "Erreur : " . $e->getMessage();
    }

    $request = $mysqli->query('SELECT `salles`.`nom`, `etage`.`nom` FROM salles INNER JOIN etage ON `salles`.`id_etage` = `etage`.`id`');
    $result = $request->fetchAll();
    ?>
    <table>
        <thead>
            <th>Nom des étages</th>
            <th>Nom des salles</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($result as $val) : ?>
                <tr>
                    <?php foreach ($val as $value) : ?>
                        <td><?= $value ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid;
        }
    </style>
</body>

</html>