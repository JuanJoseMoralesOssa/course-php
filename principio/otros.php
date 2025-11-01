<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Aprendiendo PHP</h1>

    <?php
    $i = 0;
    echo "Hola Mundo";
    $name = 'Juan Jose ';
    echo '<h2> Hola ' . $name . '</h2>';
    for ($i = 0; $i < 10; $i++) {
        echo '<p> Iteracion ' . $i . '</p><br>';
    }

    ?>

</body>

</html>
