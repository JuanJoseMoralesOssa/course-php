<!-- json_decode -->
<!-- json_encode -->

<script>
    [{
        'name': 'pepe',
        'phone': '3100110011'

    }, {
        'name': 'juan',
        'phone': '3100110011'

    }]
</script>

<?php

$file_content = file_get_contents(('contacts.json'));

$contacts = [
    [
        'name' => 'Juan',
        'phone' => '3100110011'
    ],
    [
        'name' => 'Pepe',
        'phone' => '3210001111'
    ]
];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <?php
    echo json_encode($contacts); // madarlo
    echo "<br>";
    ?>

    <?php
    echo print_r($contacts);
    echo "<br>";
    ?>

    <?php
    echo var_dump($contacts);
    echo "<br>";
    ?>

    <?php
    echo var_dump($file_content); // lo lee como un string
    echo "<br>";
    ?>

    <?php

    $file_content = json_decode(file_get_contents(('contacts.json')), true); // true es para decirle que es asociativo
    echo var_dump($file_content); // Esto ya si lo lee como un arreglo
    echo "<br>";

    $contacts = $file_content;

    /**
     *
     */

    ?>

    <div class="container">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($contacts as $index => $contact) {
                    echo "<tr>";
                    echo "<th scope='row'>" . ($index +  1) . "</th>";
                    echo "<td>" . $contact['name'] . "</td>";
                    echo "<td>{$contact['phone']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="add.php" class="btn btn-success">Create new contact</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
