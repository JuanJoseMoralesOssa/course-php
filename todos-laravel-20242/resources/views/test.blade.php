<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Blade Interface</title>
</head>

<body>

    <h1> Test Blade Interface: {{ $nombre }}</h1>

    <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Eaque voluptatibus veniam fugiat impedit dolorum, pariatur
        ullam mollitia saepe natus porro sint quam sunt voluptas animi,
        laborum eligendi maxime rem. Porro.
    </p>

    <ul>
        @foreach ($books as $book)
        <li>{{ $book }}</li>
        @endforeach
    </ul>

    <ul>
        @foreach ($countries as $country => $cities)
        <li>{{ $country }}:</li>
        <ul>
            @foreach ($cities as $city)
            <li>{{ $city }}</li>
            @endforeach
        </ul>
        @endforeach
    </ul>

</body>

</html>
