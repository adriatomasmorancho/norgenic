<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('title')
</head>
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('bookstore') }}">Bookstore</a>
    <div class="navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('authors') }}">Authors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books') }}">Books</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="content">
        @yield('content')
    </div>
    </body>
</html>