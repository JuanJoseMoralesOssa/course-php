<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h5>Productos</h5>
                <p>
                    Crea un arreglo asociativo llamado $productos que almacene información sobre
                    productos en una tienda. Cada producto tiene un nombre, precio y un arreglo asociativo
                    que contiene detalles adicionales, como disponibilidad y reseñas. Muestra el nombre y el
                    precio de todos los productos que están disponibles.
                </p>

                <?php

                $no_disponible = 'no disponible';
                $disponible = 'disponible';

                $productos = [
                    'computadora-1000000' => [
                        'disponibilidad' => $disponible,
                        'resenas' => [
                            3,
                            4,
                            2
                        ]
                    ],
                    'celular-500000' => [
                        'disponibilidad' => $no_disponible,
                        'resenas' => [
                            3,
                            2,
                            2
                        ]
                    ],
                    'tablet-300000' => [
                        'disponibilidad' => $disponible,
                        'resenas' => [
                            3,
                            4,
                            3
                        ]
                    ],
                    'television-2000000' => [
                        'disponibilidad' => $no_disponible,
                        'resenas' => [
                            3,
                            4,
                            2
                        ]
                    ],
                    'nevera-1500000' => [
                        'disponibilidad' => $disponible,
                        'resenas' => [
                            3,
                            4,
                            2
                        ]
                    ]
                ];
                ?>


                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col"># Disponibles</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 0;
                        foreach ($productos as $nombre_precio => $detalles) {
                            if ($detalles['disponibilidad'] == 'no disponible') {
                                continue;
                            }
                            $value = explode("-", $nombre_precio);
                            $nombre = $value[0];
                            $precio = $value[1];
                            echo "<tr>";
                            echo "<th scope='row'>" . ($index +  1) . "</th>";
                            echo "<td>" . $nombre . "</td>";
                            echo "<td>{$precio}</td>";
                            echo "</tr>";
                            $index++;
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>
