<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>
<nav class="navbar">
        <div>
        <a href="{{ route('bookstore') }}">
                <p>BookStore</p>
            </a>
        </div>
        <div>
            <a href="{{ route('authors') }}">
                <p>Authors</p>
            </a>
        </div>
        <div>
            <a href="">
                <p>Books</p>
            </a>
        </div>
    </nav>
    <div class="content">
        @yield('content')
    </div>
    </body>
</html>