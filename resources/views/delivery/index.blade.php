<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la pagina principla de people</title>
</head>
<body>
    <h1>Registrate como repartidor</h1>
    <a href="/deliveries/create">crear repartidor</a>
    @foreach ($deliveries as $delivery)
    <li><a href="{{route('deliveries.show', $delivery->id)}}">{{$delivery->licenseNumber}}</a></li>
        {{$deliveries->links()}}
    @endforeach
    
</body>
</html>