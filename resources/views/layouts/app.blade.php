<!DOCTYPE html>
<html lang="en">
<head>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Valor por defecto')</title>
    @stack('css')
</head>
<body>
    <header></header>

    @yield('content')

    <footer></footer>
</body>
</html>