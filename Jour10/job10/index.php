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

    $request = $mysqli->query('SELECT nom,id_etage,capacite FROM salles ORDER BY  capacite');
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
                    <td><?= $result[$i]['id_etage'] ?></td>
                    <td><?= $result[$i]['capacite'] ?></td>
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
            padding: 0.5em;
            border: 1px solid;
            text-align: center;
        }
    </style>
</body>

</html>