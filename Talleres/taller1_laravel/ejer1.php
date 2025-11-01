<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h5>Calificaciones</h5>
                <p>
                    Crear un arreglo asociativo llamado $estudiantes donde cada clave es el nombre de
                    un estudiante y el valor es un arreglo con las calificaciones de ese estudiante en
                    diferentes asignaturas. Calcular el promedio de calificaciones para cada estudiante
                    y luego mostrar al estudiante con el promedio más alto.
                </p>

                <?php

                $estudiantes = [
                    'Juanita' => [
                        'Matematicas' => 1,
                        'Biologia' => 3,
                        'Quimica' => 4
                    ],
                    'Pepe' => [
                        'Matematicas' => 3.5,
                        'Biologia' => 3,
                        'Quimica' => 5
                    ],
                    'Marta' => [
                        'Matematicas' => 4,
                        'Biologia' => 3,
                        'Quimica' => 2
                    ],
                    'Anastacia' => [
                        'Matematicas' => 1,
                        'Biologia' => 5,
                        'Quimica' => 3.5
                    ],
                    'Marta' => [
                        'Matematicas' => 4,
                        'Biologia' => 2,
                        'Quimica' => 4
                    ]
                ];

                $promedios = [];

                foreach ($estudiantes as $nombre => $asignaturas) {
                    $suma = 0;
                    foreach ($asignaturas as $calificacion) {
                        $suma += $calificacion;
                    }
                    $promedios[$nombre] = $suma / count($asignaturas);
                }

                $estudiante = '';
                $mejorPromedio = 0;

                foreach ($promedios as $nombre => $promedio) {
                    if ($promedio > $mejorPromedio) {
                        $estudiante = $nombre;
                        $mejorPromedio = $promedio;
                    }
                }

                echo "<p>El estudiante con el promedio más alto es $estudiante con un promedio de $mejorPromedio</p>";

                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>
