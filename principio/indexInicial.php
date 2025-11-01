<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C:\xampp\htdocs\cursoPHP</title>
</head>

<body>
    <?php


    //comentar
    $cars = [
        "Volvo",
        "BMW",
        "Toyota",
        "Mazda"
    ];
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    for ($x = 0; $x < sizeof($cars); $x++) {
        echo "<p>Arrglo[$x]: {$cars[$x]}</p> <br>";
    }


    // Arreglos asociativos
    $cars2 = [
        "Volvo" => [ // la flecha hace que eso se convierta en clave valor
            'cx30',
            'cx50',
        ],
        "BMW" => [
            'hola',
            'hola2'
        ],
    ];


    foreach ($cars2 as $key => $value) {
        echo "<p>Marca: $key</p>";
        foreach ($value as $key2 => $value2) {
            echo "<p>Modelo: $value2</p>";
        }
    }


    echo "<br>";


    foreach ($cars2 as $brand => $models) {
        echo "<p>Marca: $brand</p>";
        foreach ($models as $model) {
            echo "<p>Modelo: $model</p>";
        }
    }


    ?>
</body>

</html>
