<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="connect" methode="get" action="">
        <input type="text" name="prenom">
        <input type="submit" name="connexion" value="Connexion">
    </form>

    <form action="" method="get" id="disconnect">
        <input type="submit" name="deco" value="Deconnexion">
    </form>

    <?php

    setcookie('utilisateur', 'prenomcookie', time());
    if (isset($_GET['prenom'])) {
        $_COOKIE['prenomcookie'] = $_GET['prenom']; ?>
        <style>
            #connect {
                display: none;
            }
        </style>
    <?php
        echo "Bonjour " . $_COOKIE["prenomcookie"] . " !";
    } else if (!isset($_GET['prenom'])) { ?>
        <style>
            #disconnect {
                display: none;
            }
        </style>
    <?php
    }
    ?>
    <style>
        body {
            text-align: center;
        }
    </style>
</body>

</html>