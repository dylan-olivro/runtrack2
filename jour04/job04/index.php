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

        <input type="text" id="firstname" name="firstname" placeholder="firstname">

        <input type="text" id="lastname" name="lastname" placeholder="lastname">

        <input type="submit" name="submit">
        <br>
    </form>

    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>prenom</td>
                <td><?php echo $_POST['firstname']; ?></td>
            </tr>
            <tr>
                <td>nom</td>
                <td><?php echo $_POST['lastname']; ?></td>
            </tr>
        </tbody>
    </table>


    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        td,
        th {
            border: 1px solid;
            width: 200px;
        }
    </style>
</body>

</html>