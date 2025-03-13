<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rerstaurants in Baguio</title>
</head>
<body>
    <h1>Restaurants in Baguio</h1>
    <ul>
        @foreach ($restaurants as $restaurant)
            <li>
                <strong>{{ $restaurant['name'] }}</strong> - {{ $restaurant['cuisine'] }} (Located at {{ $restaurant['location'] }})
            </li>
        
        @endforeach
    </ul>
</body>
</html>