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

    $request = $mysqli->query('SELECT prenom,nom,naissance,sexe,mail FROM etudiants WHERE naissance >= "1998-00-00" AND naissance <= "2018-00-00"');
    $result = $request->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <table>
        <thead>
            <tr>
                <?php
                foreach ($result[0] as $key => $value) : ?>
                    <th><?= $key ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < sizeof($result); $i++) : ?>
                <tr>
                    <td><?= $result[$i]['nom'] ?></td>
                    <td><?= $result[$i]['prenom'] ?></td>
                    <td><?= $result[$i]['naissance'] ?></td>
                    <td><?= $result[$i]['sexe'] ?></td>
                    <td><?= $result[$i]['mail'] ?></td>

                </tr>
            <?php endfor; ?>
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