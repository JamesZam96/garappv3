<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la página principal de people</title>
</head>
<body>
    <h1>Registrate como gente</h1>
    <a href="{{ route('profile.create') }}">Crear una persona</a>
    
    <h2>Personas</h2>
    <ul>
        @foreach ($profiles as $user)
        <li>
            <a href="">{{ $user->dni }}</a>
        </li>
        @endforeach
    </ul>

    {{ $profiles->links() }}
</body>
</html>
