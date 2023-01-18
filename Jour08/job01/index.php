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
    session_start();

    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    } else {
        $_SESSION['nbvisites'] = $_SESSION['nbvisites'] + 1;
    }
    echo $_SESSION['nbvisites'];

    if (isset($_GET['reset'])) {
        session_destroy();
        header("location:index.php");
    }
    ?>

    <form action="" method="get">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>