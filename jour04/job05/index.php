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

        <input type="text" id="username" name="username" placeholder="username">

        <input type="password" id="password" name="password" placeholder="password">

        <input type="submit">
        <br>
    </form>
    <?php

    if (isset($_POST['username']) == null) {
        $_POST['username'] = '';
    }
    if (isset($_POST['password']) == null) {
        $_POST['password'] = '';
    }


    if ($_POST['username'] == 'John' && $_POST['password'] == 'Rambo') {

        echo "C'est pas ma guerre";
    } else if ($_POST['username'] == "" && $_POST['password'] == "") {

        echo '';
    } else {

        echo "Votre pire cauchemar";
    }
    ?>
</body>

</html>