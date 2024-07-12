<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a la página principal de productos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
        }
        h1 {
            color: red;
        }
        .btn-custom {
            border-radius: 25px;
            background-color: red;
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <h1 class="mb-4">Lista de Productos</h1>
        @auth
            <a href="{{ route('auths.create') }}" class="btn btn-custom mb-2">Crear un nuevo producto</a>
        @endauth
        <br>
        <a href="/login" class="btn btn-custom">Iniciar sesión</a>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>