<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php if (isset($_GET['style']) != null) {
                                        echo $_GET['style'];
                                    } else {
                                        echo 'default';
                                    }
                                    //!isset($_GET['style']) ? 'default' : $_GET['style'] 
                                    ?>.css">
</head>


<body>
    <form method="get">

        <label for="style-select"></label>

        <select name="style" id="">
            <option value="default">Default</option>
            <option value="red">Rouge</option>
            <option value="blue">Bleu</option>
            <option value="purple">Violet</option>

        </select>

        <input type="submit">

    </form>


    <div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda quam ducimus quidem natus officiis in provident cum laboriosam fugiat et!</p>
    </div>
</body>

</html>