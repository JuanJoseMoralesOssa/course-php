<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Encontrar los tres numeros mas grandes y los tres numeros mas bajos
    $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

    sort($valores);
    echo "<p>Los tres numeros mas bajos son: {$valores[0]}, {$valores[1]}, {$valores[2]}</p>";

    $valores = array_reverse($valores);
    echo "<p>Los tres numeros mas grandes son: {$valores[0]}, {$valores[1]}, {$valores[2]}</p>";


    rsort($valores);
    $mayores = array_slice($valores, 0, 3);
    

    ?>
</body>

</html>
