<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h5>Empleados</h5>
                <p>
                    Crea un arreglo asociativo llamado $empleados que contenga información sobre varios
                    empleados. Cada empleado debe tener un nombre y un arreglo asociativo que almacene
                    información adicional, como salario, fecha de contratación y departamento. Luego,
                    muestra los nombres de todos los empleados junto con su salario.
                </p>

                <?php

                $empleados = [
                    'Juanita' => [
                        'salario' => 3000000,
                        'fecha_contratacion' => '2021-01-01', // Anio-mes-dia
                        'departamento' => 'Ventas'
                    ],
                    'Pepe' => [
                        'salario' => 3500000,
                        'fecha_contratacion' => '2020-01-01',
                        'departamento' => 'Servicio al cliente'
                    ],
                    'Marta' => [
                        'salario' => 4000000,
                        'fecha_contratacion' => '2019-01-01',
                        'departamento' => 'Contabilidad'
                    ],
                    'Anastacia' => [
                        'salario' => 2500000,
                        'fecha_contratacion' => '2021-01-01',
                        'departamento' => 'Ventas'
                    ],
                    'Marta' => [
                        'salario' => 4000000,
                        'fecha_contratacion' => '2019-01-01',
                        'departamento' => 'Recursos humanos'
                    ]
                ];

                foreach ($empleados as $empleado => $datos) {
                    foreach ($datos as $dato => $valor) {
                        if ($dato == "salario") {
                            echo " <p>{$empleado} gana un salario de $ {$valor}</p>";
                        }
                    }
                }


                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>
