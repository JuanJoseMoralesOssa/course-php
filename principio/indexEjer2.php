<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $my_array = [
        'Colombia' => [
            'Bogota',
            'Armenia',
            'Medellin',
        ],
        'Peru' => [
            'Lima',
            'Cuzco',
            'Arequipa',
        ],
        'Ecuador' => [
            'Quito',
            'Guayaquil',
            'Cuenca',
        ],
    ];


    foreach ($my_array as $pais => $ciudades) {
        echo "<p>País: {$pais}</p>";
        foreach ($ciudades as $ciudad) {
            echo "<p>Ciudad:{$ciudad}</p>";
        }
    }

    ?>
</body>

</html>
