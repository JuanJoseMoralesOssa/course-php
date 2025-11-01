<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C:\xampp\htdocs\cursoPHP</title>
</head>

<body>
    <?php


    $arreglo = [
        'keyStr1' => 'lado',
        0 => 'ledo',
        'keyStr2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
    ];

    foreach ($arreglo as $key => $value) {
        echo "{$value}, ";
    }

    echo "<p>decirlo al revés lo dudo.</p> ";

    foreach (array_reverse($arreglo) as $key => $value) {
        echo "{$value}, ";
    }

    echo "<p>Que trabajo me ha costado!</p> ";

    foreach (array_reverse($arreglo) as $value) {
        echo "{$value}, ";
    }

    ?>


</body>

</html>
